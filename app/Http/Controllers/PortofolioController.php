<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
   public function index()
{
    return view('portofolio.index');
}

public function create()
{
    return view('portofolio.create');
}
    public function store(Request $request)
    {
        
    }
}