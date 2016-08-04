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

    public function updateForm($id) {      
       	$this->data['data'] = Workforce::getMyData($id); 

        return view('workforce.update', $this->data);
    }

    public function insertForm() {        
        return view('workforce.insert');
    }

    public function insertData(WorkforceRequest $request) {
        $plain_password = $this->generateCode(8);
        $encrypted_password = bcrypt($plain_password);

        $arrParam = array(
                'username'      => $request->input('email'),
                'password'      => $encrypted_password,
                'first_name'    => $request->input('first_name'),
                'last_name'     => $request->input('last_name'),
                'email'         => $request->input('email'),
                'gender'        => $request->input('gender'),
                'role'          => $request->input('role'),
                'contact_no'    => $request->input('contact_no'),
                'birthdate'     => $request->input('birthdate'),
                'joining_date'  => $request->input('joining_date')
            );        
        Workforce::insertData($arrParam);   

        return redirect('admin/workforce')
                    ->with('success', 'Successfully saved.');
    } 

    public function updateData(WorkforceRequest $request) {
        $arrParam = array(
                'username'      => $request->input('email'),
                'first_name'    => $request->input('first_name'),
                'last_name'     => $request->input('last_name'),
                'email'         => $request->input('email'),
                'gender'        => $request->input('gender'),
                'role'          => $request->input('role'),
                'contact_no'    => $request->input('contact_no'),
                'birthdate'     => $request->input('birthdate'),
                'joining_date'  => $request->input('joining_date')
            );        
        Workforce::updateData($request->input('id'), $arrParam);   

        return redirect('admin/workforce')
                    ->with('success', 'Successfully saved.');
    }

    public function deleteData(Request $request) {
        Workforce::deleteData($request->input('selected'));   

        return redirect('admin/workforce')
                    ->with('success', 'Successfully deleted.');
    }

    private function generateCode($length = 8, $symbols = TRUE) {
        $alphabets_lowercase = range('a', 'z');
        $alphabets_uppercase = range('A', 'Z');
        $numbers = range('0', '9');

        $additional_characters = array();
        if ($symbols) {
            $additional_characters = array('!','@','#','$','%','^','&','*','.');
        }

        $final_array = array_merge($alphabets_lowercase, $alphabets_uppercase, $numbers, $additional_characters);
             
        $code = '';
      
        while($length--) {
          $key = array_rand($final_array);
          $code .= $final_array[$key];
        }
      
        return $code;
    }   
}
