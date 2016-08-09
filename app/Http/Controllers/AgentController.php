<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;

//Call my MODEL function
use App\Agent as Agent;
class AgentController extends Controller
{   
    private $globalData = array();

    public function getData($id, $report, $skill_name, $date_joined) {    	
        $this->data['data'] = Agent::getData($id);                
        $data = $this->getSkillReport($id, $report, $skill_name, $date_joined);
        $this->data['skills'] = $data;

        return view('agent.profile', $this->data);
    }

    public function getSkillReport($id, $report, $skill_name, $date_joined) {
    	$data = NULL;       	

    	if($report == 'yearly') {            
    		$now = date('Y');        	
    		for($i = substr($date_joined, 0, 4); $i <= $now; $i++):    
                $val = $i.substr($date_joined, 4);                        
                $result = Agent::getSkillRates($id, $skill_name, $val, 'yearly');
                if($result) {
    				$data[] = $result;
    			}
    		endfor;               
        } elseif($report == 'quarterly') {        	
    	  	$now = date('Y').substr($date_joined, 4);	    	  	
            $this->globalData['dates'][0] = $date_joined;
			$dates = $this->computeDate($date_joined, $now, '3 months');
            $count = count($this->globalData['dates']);	
            $this->globalData['dates'][$count] = $now;
            $result = Agent::getSkillRates($id, $skill_name, $this->globalData['dates'], 'quarterly');

            if($result) {
                $data = $result;
            }
        } elseif($report == 'monthly') {            
            $now = date('Y').substr($date_joined, 4);               
            $this->globalData['dates'][0] = $date_joined;
            $dates = $this->computeDate($date_joined, $now, '1 months');
            $count = count($this->globalData['dates']); 
            $this->globalData['dates'][$count] = $now;
            $result = Agent::getSkillRates($id, $skill_name, $this->globalData['dates'], 'monthly');

            if($result) {
                $data = $result;
            }
        } elseif($report == 'weekly') {            
            $now = date('Y').substr($date_joined, 4);               
            $this->globalData['dates'][0] = $date_joined;
            $dates = $this->computeWeekly($date_joined, $now);
            $count = count($this->globalData['dates']); 
            $this->globalData['dates'][$count] = $now;
            $result = Agent::getSkillRates($id, $skill_name, $this->globalData['dates'], 'weekly');
           
            if($result) {
                $data = $result;
            }
        } elseif($report == 'all') {            
            $result = Agent::getSkillRates($id, $skill_name, NULL, 'all');
         
            if($result) {
                $data = $result;
            }
        }

        return $data;    	
    }

    public function computeWeekly($start_date, $end_date) {                 
        $date = strtotime($start_date);
        $date = strtotime("+1 week", $date);
        $date = date('Y-m-d', $date);
        
        if(strtotime($date) <= strtotime($end_date)) {            
           $this->globalData['dates'][] = $date;
           return  $this->computeWeekly($date, $end_date);
        } 
    }   

    public function computeDate($start_date, $end_date, $days_months) {             	
        $date = date_create($start_date);
        date_add($date, date_interval_create_from_date_string($days_months));
        $start_date = date_format($date, 'Y-m-d');        
                
        if($start_date != $end_date) {
            $this->globalData['dates'][] = $start_date;
            return  $this->computeDate($start_date, $end_date, $days_months);
        } 
    }    

    public function updateData(Request $request) {
    	/*
        $arrParam = array(
                'uid'      						=> $request->input('uid'),
				'telephonic'    				=> $request->input('telephonic'),
				'typing'     					=> $request->input('typing'),
				'efective_communication'        => $request->input('efective_communication'),
				'attentive_listening'        	=> $request->input('attentive_listening'),
				'time_management'          		=> $request->input('time_management'),
				'multilingual'    				=> $request->input('multilingual'),
				'conflict_resolution'     		=> $request->input('conflict_resolution'),
				'decision_making'  				=> $request->input('decision_making'),
				'handling_irate_customers'  	=> $request->input('handling_irate_customers'),
				'rapport_building'  			=> $request->input('rapport_building'),
				'persuasion'  					=> $request->input('persuasion'),
				'adaptability'  				=> $request->input('adaptability'),
				'empathy'  						=> $request->input('empathy'),
				'quick_learner' 				=> $request->input('quick_learner'),
				'flexible'  					=> $request->input('flexible'),
				'creativity'  					=> $request->input('creativity'),
				'software_exposure' 			=> $request->input('software_exposure'),
				'knowledge_retention'  			=> $request->input('knowledge_retention'),
				'updated_at'  					=> date('Y-m-d H:i:s')               
            );   
        */  
		//number_format($votc_average->analysis_avg, 2);
        $sum = 0; 
        $eval = $request->input('evaluator');  
		foreach($eval as $value) {
			$sum += (int) $value;
		}
		$rate = $sum / count($eval);
		$rate = number_format($rate, 2);
		$arrParam = array($request->input('skill_name') => $rate);

        Agent::updateData($request->input('id'), $arrParam);  
        Agent::insertData(array('uid' => $request->input('uid'),'skill_name' => $request->input('skill_name'), 'rate' => $rate, 'date_added' => date('Y-m-d'))); 

        return redirect('admin/agent-eval/'.$request->input('uid').'/all/'.$request->input('skill_name').'/'.$request->input('date_joined'))
                    ->with('success', 'Successfully saved.');
    }
}
