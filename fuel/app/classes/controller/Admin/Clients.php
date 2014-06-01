<?php

/**
 * 
 */
class Controller_Admin_Clients extends Controller_Template
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

		$this->auth = Auth::instance();

		if (! $this->auth->check())
		{
			throw new Exception("Not logged in");
		}
	}

	/**
	 * 
	 */
	public function get_index()
	{
		$this->template->content = 'hello';
	}
}