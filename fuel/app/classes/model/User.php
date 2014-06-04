<?php

/**
 * 
 */
class Model_User extends Auth\Model\Auth_User
{
	/**
	 * 
	 */
	public static function get_by_id($id)
	{
		return static::query()->where('id', $id)->get_one();
	}
}