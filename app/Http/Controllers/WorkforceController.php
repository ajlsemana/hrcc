<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;

//Call my VALIDATION Rules
use App\Http\Requests\WorkforceRequest;

//Call my MODEL function
use App\Workforce as Workforce;

class WorkforceController extends Controller
{
	private $data = array();

	public function __construct() {
        $this->middleware('auth');
    }

	public function index() {
        $this->data['workforces'] = Workforce::getList();
        $this->data['total_workforce'] = Workforce::getListCtr();

        return view('workforce.list', $this->data);
    }

    public function updateForm() {       
    	#$this->data['data'] = Workforce::find(Request::input('id')); 

        return view('workforce.update', $this->data);
    }

    public function insertForm() {        
        return view('workforce.insert');
    }

    public function insertData(WorkforceRequest $request) {
        $arrParam = array(
                'first_name'    => $request->input('first_name')
            );        
        Workforce::insertData($arrParam);                 
        return redirect('admin/workforce/add')
                        ->with('success', 'Successfully saved.');
    }    
}
