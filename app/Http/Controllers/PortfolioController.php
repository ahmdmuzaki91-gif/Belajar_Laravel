<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('porotfolio.index');
    }

    public function store(Request $request)
    {
        // nanti upload portfolio disini
    }
}