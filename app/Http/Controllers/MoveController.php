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
            
        }
        for($i = 2; $i < count($array); $i++){
            
            Storage::copy($array[$i], 'Moved/'.$array[$i]);
            echo nl2br($array[$i] . "\n");
        }
    }
}