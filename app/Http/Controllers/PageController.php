<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $dati = config("data");
        $trains = Train::all();

        return view('home', compact("dati", "trains"));
    }
}
