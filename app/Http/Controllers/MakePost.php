<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MakePost extends Controller
{
    public function NewPosts($Text) {
    
        $user = auth()->user();

        DB::insert('insert into post (text, UserEmail) values (?, ?)', [$Text,  $user->email]);

  

        return redirect('view-records');
        
 
    }
}

/*

       $receive = DB::selct('select text from post');

        $data2 = [
    
            'text' => $receive,


    
        ];
    


        return redirect ("blog",compact($data2));

        return redirect ("blog");
        */