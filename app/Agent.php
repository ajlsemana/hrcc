<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
class Agent extends Model
{
    public static function getData($id) {
		$query = DB::table('users')
			->select(DB::raw('users.id as uid, users.joining_date, users.photo, users.first_name, users.last_name, skills.*'))
			->join('skills', 'skills.uid', '=', 'users.id')
			->where('users.id', '=', $id)
			->first();

		return $query;
	}

	public static function getSkillRates($id, $skillName = '', $date, $report = 'yearly') {		
		$result = FALSE;
		$query = DB::table('skills_history')
			->select(DB::raw('skills_history.rate, SUBSTRING(skills_history.created_at, 1, 10) AS cat'))
			->join('users', 'skills_history.uid', '=', 'users.id')
			->where('users.id', '=', $id)
			->where('skills_history.skill_name', '=', $skillName);

		
		if($report == 'yearly') {				
			$query->where('skills_history.created_at', 'LIKE', $date.'%');						
			$query->orderBy('skills_history.created_at', 'ASC');

			$result = $query->first();
		} elseif($report == 'quarterly') {					
			$query->whereIn('skills_history.date_added', $date);

			$result = $query->get();						
		}
		$query->orderBy('skills_history.created_at', 'ASC');

		return $result;
	}

	public static function insertData($data = array()) {
		$id = DB::table('skills_history')->insertGetId($data);	
	}

	public static function updateData($id, $data = array()) {
		DB::table('skills')
	            ->where('id', $id)
	            ->update($data);          
    }
}
