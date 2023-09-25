<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('template.home');
    }

    public function orgamento(Request $request)
    {        
        return view('orcamento.create');
    }

    public function notFound(Request $request)
    {        
        return view('template.404');
    }
}
