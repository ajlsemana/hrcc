<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
class Agent extends Model
{
    public static function getData($id) {
		$query = DB::table('users')->where('id', '=', $id)->first();

		return $query;
	}
}
