<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Workforce as Workforce;

class WorkforceController extends Controller
{
	private $data = array();

	public function __construct() {
        $this->middleware('auth');
    }

	public function index() {
        $this->data['workforces'] = Workforce::getList();

        return view('users.list', $this->data);
    }

    public function updateForm() {        
        return view('users.update');
    }

    public function insertForm() {        
        return view('users.insert');
    }    
}
