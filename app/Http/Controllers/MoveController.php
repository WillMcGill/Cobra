<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class MoveController extends Controller
{

    function test(){

        $array = array();
        Storage::disk('local')->put('blahblahblah.txt', "blah blah");
        $files =  Storage::disk('local')->files();
        foreach($files as $file){

            array_push($array, $file);
            echo var_dump($array);
        }
    }
}