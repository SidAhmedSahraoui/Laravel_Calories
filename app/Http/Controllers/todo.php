<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todo extends Controller
{
        public function index() 
        {
            return view('new');
        } 
}
