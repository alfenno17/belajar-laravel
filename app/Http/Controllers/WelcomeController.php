<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function web()
    {
        return view('hello')
            ->with('name', 'Andi')
            ->with('occupation', 'Astronaut');
    }
}
