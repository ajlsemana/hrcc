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
		$id = DB::table('users')->insertGetId($data);
		
		//Create Skills if Role is an AGENT
		if($data['role'] == 5) {
			DB::table('skills')->insert(['uid' => $id]);		
		}		
	}

	public static function updateData($id, $data = array()) {
		DB::table('users')
	            ->where('id', $id)
	            ->update($data);

	    //Create Skills if Role is an AGENT
	    //To be continued...        
		if($data['role'] == 5) {
			#DB::table('skills')->insert(['uid' => $id]);		
		}	           
    }

    public static function deleteData($data = array()) {
		DB::table('users')->whereIn('id', $data)->delete();		
		DB::table('skills')->whereIn('uid', $data)->delete();
	}
}
