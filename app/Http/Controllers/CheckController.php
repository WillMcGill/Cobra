<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class CheckController extends Controller{

        function checkFiles(){
            return view('check');
        }



}