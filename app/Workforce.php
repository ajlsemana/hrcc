<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Workforce extends Model
{	
	public static function getMyData($id) {
		$query = DB::table('users')->where('id', '=', $id)->first();

		return $query;
	}

    public static function getList() {
		$query = DB::table('users')
			->where('role', '!=', 1)
			->orderBy('first_name', 'ASC')			
			->get();
		
		return $query;
	}

	public static function getListCtr() {
		$query = DB::table('users')
			->where('role', '!=', 1)			
			->count();
		
		return $query;
	}

	public static function insertData($data = array()) {
		DB::table('users')->insertGetId($data);		
	}

	public static function updateData($id, $data = array()) {
		DB::table('users')
	            ->where('id', $id)
	            ->update($data);
    }

    public static function deleteData($data = array()) {
		DB::table('users')->whereIn('id', $data)->delete();
	}
}
