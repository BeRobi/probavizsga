<?php

namespace App\Http\Controllers;

use App\Models\Tevekenyseg;

class TevekenysegController extends Controller
{
    public function index()
    {
        return Tevekenyseg::all();
        
    }
}
