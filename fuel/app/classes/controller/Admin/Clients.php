<?php

/**
 * 
 */
class Controller_Admin_Clients extends Controller_Admin_AbstractController
{
	/**
	 * 
	 */
	public function get_index()
	{
		$this->template->content = View::forge('admin/clients/index');
		
		$this->template->content->clients = Model_Client::query()->get();


	}

	/**
	 * 
	 */
	public function get_add()
	{
		$this->template->content = View::forge('admin/clients/add');
	}

	/**
	 * 
	 */
	public function post_add()
	{
		$name = Input::post('name');
		$url  = Input::post('url');

		$client = new Model_Client;
		$client->name = $name;
		$client->url  = $url;
		$client->save();

		Response::redirect('admin/clients');
	}
}