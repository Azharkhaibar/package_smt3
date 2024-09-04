<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

// untuk di web.php
class postcontroller extends Controller
{
    public function index() {
        return inertia::render('postcomponent');
    }
}
