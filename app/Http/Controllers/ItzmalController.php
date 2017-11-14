<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use DB;
class ItzmalController extends Controller
{
public function __construct()
    {
       
    }
    public function index(Request $request)
    {
        
            return view('inicio.home');
    }
    
}