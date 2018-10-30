<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class MainController extends Controller
{
    //
    function index()
    {
        return view('wellcome');
    }
}
