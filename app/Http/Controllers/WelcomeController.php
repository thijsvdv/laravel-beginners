<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function home() {
        
        // Do more stuff here...

        return view('pages.welcome', [
            'name' => 'Thijs'
        ]);   
    }

    public function test() {
        return view('pages.test');   
    }
}
