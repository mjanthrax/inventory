<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct(){
    	$this->middleware('staffcheck');
    }

    public function main(){
    	return 'welcome to staff';
    }
}
