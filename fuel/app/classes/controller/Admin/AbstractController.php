<?php

/**
 * 
 */
abstract class Controller_Admin_AbstractController extends Controller_AbstractController
{
	/**
	 * 
	 */
	public $template = 'admin/template';

	/**
	 * 
	 */
	public function before()
	{
		parent::before();

		if (! $this->user)
		{
			Response::redirect('auth#not_logged_in');
		}

	}

	/**
	 * 
	 */
	protected function init_template()
	{
		parent::init_template();
		
		$this->template->nav = View::forge('admin/nav');
	}
}