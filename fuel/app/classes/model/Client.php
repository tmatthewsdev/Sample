<?php

/**
 * 
 */
class Model_Client extends Orm\Model
{
	/**
	 * 
	 */
	protected static $_properties = array(
		'id',
		'name',
		'url',
		'created_at',
		'updated_at',
	);

	/**
	 * 
	 */
	protected static $_has_one = array(
		'logo' => array(
			'key_from'       => 'id',
			'model_to'       => 'Model_Client_Logo',
			'key_to'         => 'client_id',
			'cascade_save'   => true,
			'cascade_delete' => true,
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
		'Orm\Observer_UpdatedAt' => array(
			'events'          => array('before_save'),
			'mysql_timestamp' => true,
		),
	);
}