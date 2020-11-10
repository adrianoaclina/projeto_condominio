<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class DashboardController extends Controller
{
    public function index(){

        return view('dashboard')->with('noticias',Noticia::all());
    }
}
