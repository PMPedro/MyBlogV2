<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetData extends Controller
{
    //

    public function getData(){

        $asdasd = DB::select('select text from post');
        $UserEmail = DB::select('select UserEmail from post');
        
        $users = [

            'text' => $asdasd,
            'UserEmail' => $UserEmail,
            
        ];

     //   return redirect('blog')->with(array($users));;
       // return view('blog')->with(['ASD'=>"$asdasd"]); 
     return view('blog',compact('asdasd','UserEmail'));
      // return $asdasd;
    }
}
