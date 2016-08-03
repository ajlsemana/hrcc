<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Workforce extends Model
{
    public static function getList() {
		$query = DB::table('users')
			->where('user_type', '=', 3)
			->orderBy('first_name', 'ASC')
			->get();
		
		return $query;
	}

	public static function getListCtr() {
		$query = DB::table('users')
			->where('user_type', '=', 3)
			->orderBy('first_name', 'ASC')
			->count();
		
		return $query;
	}
}
