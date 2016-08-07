<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;

//Call my MODEL function
use App\Agent as Agent;
class AgentController extends Controller
{
    public function getData($id) {
        $this->data['data'] = Agent::getData($id);

        return view('agent.profile', $this->data);
    }

}
