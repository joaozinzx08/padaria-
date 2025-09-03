<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principalcontroller extends Controller
{
    public function bakery(){
        return view('bakery');
    }

    public function sobrenos()
    {
        return view('sobrenos');        
    }

    public function contato('contato')
    {
        return view('contato');
    }

    public function enviarContato(Request $request){
        dd($request ->post());
    }
}

