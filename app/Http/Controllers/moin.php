<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class moin extends Controller
{
    //
  function getData() {
    $fakeData= [
        "name"=>"saud moin",
        'age'=>23,
        'email'=>'moin@gmail.com'

    ];

    return response()->json($fakeData);
    
  }
}
