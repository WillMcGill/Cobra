<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Mail;
use App\Mail\SendEmail;

class MoveController extends Controller
{

    function test(){

        $array = array();
        $moveArr = array();
        // Storage::disk('local')->put('blahblahblah.txt', "blah blah");
        $files =  Storage::disk('local')->files();
        foreach($files as $file){

            array_push($array, $file);
            
        }
        for($i = 2; $i < count($array); $i++){
            
            Storage::move($array[$i], 'Moved/'.$array[$i]);
            // echo nl2br($array[$i] . "\n");
            array_push($moveArr, $array[$i]);

        }
        return view('move', ['moveData'=>$moveArr]);

        
    }

    function sendEmail(){

        $email = "mcgill.will@yahoo.com";
        Mail::to('mcgill.will@yahoo.com')->send(new SendEmail());
        // dd('it worked');

    }
}