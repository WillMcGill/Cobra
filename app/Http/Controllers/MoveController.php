<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class MoveController extends Controller
{

    function test(){
        Storage::disk('local')->put('blahblahblah.txt', "blah blah");
        $files =  Storage::disk('local')->files();
        echo var_dump($files);
    }
}