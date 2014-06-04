<?php

/**
 * 
 */
abstract class Controller_AbstractController extends Controller_Template
{
	/**
	 * 
	 */
	public $template = 'admin/template';

	/**
	 * 
	 */
	protected $auth;

	/**
	 * 
	 */
	protected $user;

	/**
	 * 
	 */
	public function before()
	{
		parent::before();

		$this->_init_auth();
		$this->_init_user();

		isset($this->template) and $this->init_template();

	}

	/**
	 * 
	 */
	private function _init_auth()
	{
		$this->auth = Auth::instance();
	}

	/**
	 * 
	 */
	private function _init_user()
	{
		if ($this->auth->check())
		{
			// current user id
			$id = $this->auth->get_user_id()[1];

			$this->user = Model_User::get_by_id($id);

		}
		else
		{
			$this->user = null;
		}
	}

	/**
	 * 
	 */
	protected function init_template()
	{
		if ($this->user)
		{
			$this->template->set_global('user', $this->user);
		}
	}

}