<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;

//Call my MODEL function
use App\Agent as Agent;
class AgentController extends Controller
{
    public function getData($id, $report, $skill_name, $date_joined) {    	
        $this->data['data'] = Agent::getData($id);                
        $data = $this->getSkillReport($id, $report, $skill_name, $date_joined);
        $this->data['skills'] = $data;

        return view('agent.profile', $this->data);
    }

    public function getSkillReport($id, $report, $skill_name, $date_joined) {
    	$data = array();       	

    	if($report == 'yearly') {
    		$now = date('Y');        	
    		for($i = substr($date_joined, 0, 4); $i <= $now; $i++):    			
    			$val = $i.substr($date_joined, 4);       		
    			if(Agent::getSkillRates($id, $skill_name, $val)) {							
    				$data[] = Agent::getSkillRates($id, $skill_name, $val);
    			}
    		endfor;   
        }

        return $data;    	
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
        Agent::insertData(array('uid' => $request->input('uid'),'skill_name' => $request->input('skill_name'), 'rate' => $rate)); 

        return redirect('admin/agent-eval/'.$request->input('uid').'/yearly/'.$request->input('skill_name').'/'.$request->input('date_joined'))
                    ->with('success', 'Successfully saved.');
    }
}
