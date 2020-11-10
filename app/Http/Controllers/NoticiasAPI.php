<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiasAPI extends Controller
{
    public function index(){

        $noticias = Noticia::all();
        return response()->json($noticias);
    }

    public function store(Request $request){
        $noticia = Noticia::create($request->all());
        return response()->json($noticia);
    }
}
