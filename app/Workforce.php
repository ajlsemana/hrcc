<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Workforce extends Model
{
    public static function getList() {
		$query = DB::table('users')
			->where('user_type', '!=', 1)
			->orderBy('first_name', 'ASC')
			->get();
		
		return $query;
	}

	public static function getListCtr() {
		$query = DB::table('users')
			->where('user_type', '!=', 1)			
			->count();
		
		return $query;
	}

	public static function insertData($data = array()) {
		DB::table('users')->insertGetId($data);		
	}
}
