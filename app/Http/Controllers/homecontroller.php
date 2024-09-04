<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class homecontroller extends Controller
{
    public function index() {
        return inertia::render('Homepage/homepage');
    }
    // membuat controller untuk page baru
    public function new()
    {
        return Inertia::render('Homepage/newhomepage'); 
    }
    public function extra()
    {
        return inertia::render('Homepage/extrahomepage');
    }
}
