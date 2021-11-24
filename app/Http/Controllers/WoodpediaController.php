<?php

namespace App\Http\Controllers;

use App\Models\Woodpedia;
use Illuminate\Http\Request;

class WoodpediaController extends Controller
{
    //
    
    public function index()
    {
        return view('woodpedia',[
            'title' => 'Woodpedia',
            'css' => 'Beranda',
            'active' => 'woodpedia',
            "woodpedias" => Woodpedia::all()
        ]); 
    }

    public function show(Woodpedia $woodpedia){
        return view('woodpedia-detail',[
            'title' => 'Woodpedia',
            'css' => 'Beranda',
            'active' => 'woodpedia',
            'woodpedia' => $woodpedia
        ]); 
    }
}

