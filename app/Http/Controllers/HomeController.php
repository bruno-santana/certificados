<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $lojas = Loja::all()->sortBy('loja_cod');
        return view('home', compact('lojas'));
    }
}
