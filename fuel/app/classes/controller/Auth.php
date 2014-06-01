<?php

/**
 * 
 */
class Controller_Auth extends Controller_Template
{
	/**
	 * 
	 */
	public $template = 'auth/template';

	/**
	 * 
	 */
	protected $auth;

	/**
	 * 
	 */
	public function before()
	{
		parent::before();

		$this->auth = Auth::instance();

		// if ($this->auth->check())
		// {
			
		// }
	}

	/**
	 * 
	 */
	public function get_index()
	{
		if (! $this->auth->check())
		{
			Response::redirect('auth/login');
		}

		$this->template->content = View::forge('auth/index', array(
			'user' => $this->auth->get_user()
		));
	}

	/**
	 * 
	 */
	public function get_login()
	{
		if ($this->auth->check())
		{
			Response::redirect('auth');
		}

		$this->template->content = View::forge('auth/login');
	}

	/**
	 * 
	 */
	public function post_login()
	{
		$val = Validation::forge('auth.login');

		$val->add('email', 'Email')
			->add_rule('required')
			->add_rule('valid_email');

		$val->add('password', 'Your password')
			->add_rule('required')
			->add_rule('min_length', 4)
			->add_rule('max_length', 128);

		if (! $val->run())
		{
			$errors = Html::ul($val->error());
			return $errors;
		}

		if (! $this->auth->login($val->validated('email'), $val->validated('password')))
		{
			Response::redirect('auth/login#error');
		}

		Response::redirect('auth');
		
	}

	/**
	 * 
	 */
	public function get_register()
	{
		if ($this->auth->check())
		{
			Response::redirect('auth');
		}
		
		$this->template->content = View::forge('auth/register');
	}

	/**
	 * 
	 */
	public function post_register()
	{
		$val = Validation::forge('auth.register');

		$val->add('email', 'Email')
			->add_rule('required')
			->add_rule('valid_email');

		$val->add('password', 'Your password')
			->add_rule('required')
			->add_rule('min_length', 4)
			->add_rule('max_length', 128);

		if (! $val->run())
		{
			$errors = Html::ul($val->error());
			return $errors;
		}

		try
		{
			$user_id = $this->auth->create_user($val->validated('email'), $val->validated('password'), $val->validated('email'));
		}
		catch (SimpleUserUpdateException $e)
		{
			Respose::redirect('auth/register#error');
		}

		if ($user_id and $this->auth->force_login($user_id))
		{
			Response::redirect('auth');
		}

		throw new RuntimeException("Unable to login newly registered user id: {$user_id}");
	}

	/**
	 * 
	 */
	public function action_logout()
	{
		$this->auth->logout() and Response::redirect('auth/login');
	}
}