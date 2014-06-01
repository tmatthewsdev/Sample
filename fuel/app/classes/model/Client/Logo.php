<?php

class Model_Client_Logo extends Orm\Model
{
	/**
	 * 
	 */
	protected static $_properties = array(
		'id',
		'client_id',
		'url',
		'created_at',
	);

	/**
	 * 
	 */
	protected static $_belongs_to = array(
		'client' => array(
			'key_from'       => 'client_id',
			'model_to'       => 'Model_Client',
			'key_to'         => 'id',
			'cascade_save'   => true,
			'cascade_delete' => false,
		),
	);

	/**
	 * 
	 */
	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events'          => array('before_insert'),
			'mysql_timestamp' => true,
		),
	);
}