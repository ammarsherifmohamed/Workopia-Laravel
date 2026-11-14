<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloControler extends Controller
{
    public function test(){
        return "Welcome From Test";
    }
}
