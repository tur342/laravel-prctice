<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestGateController extends Controller
{   
    //
    public function index(Request $request){
        return view('test.test_page');
    }

}
