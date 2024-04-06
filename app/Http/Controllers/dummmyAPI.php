<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummmyAPI extends Controller
{
    //
  function getData() {
    $fakeData= [
        "name"=>"waleed Ahmed",
        'age'=>23,
        'email'=>'wa353457@gmail.com'

    ];

    return response()->json($fakeData);
    
  }
}
