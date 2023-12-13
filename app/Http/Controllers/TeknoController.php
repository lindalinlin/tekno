<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeknoController extends Controller
{
    public function index()
    {
        return view('tekno.index');
    }
}
