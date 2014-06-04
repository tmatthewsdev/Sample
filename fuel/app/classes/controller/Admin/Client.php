<?php

/**
 * 
 */
class Controller_Admin_Client extends Controller_Admin_AbstractController
{
	/**
	 * 
	 */
	protected $client;

	/**
	 * 
	 */
	public function before()
	{
		parent::before();

		if (! $this->client = Model_Client::get_by_url($this->param('url')))
		{
			throw new HttpNotFoundException;
		}
	}

	/**
	 * 
	 */
	public function get_view()
	{
		$this->template->content = View::forge('admin/client/view');
		$this->template->content->client = $this->client;
	}


	/**
	 * 
	 */
	public function get_edit()
	{
		throw new Exception("Error Processing Request", 1);
		
		$this->template->content = View::forge('admin/client/view');
		$this->template->content->client = $this->client;
	}
}