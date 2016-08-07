<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
class Agent extends Model
{
    public static function getData($id) {
		$query = DB::table('users')
			->select(DB::raw('users.*, skills.*'))
			->join('skills', 'skills.uid', '=', 'users.id')
			->where('users.id', '=', $id)
			->first();

		return $query;
	}
}
