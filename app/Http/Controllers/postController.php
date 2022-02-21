<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    function getallfunctions(){
      $posts= DB::table('product')->get();
      return view('product',compact('posts'));
    }

}
