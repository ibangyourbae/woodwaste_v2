<?php

namespace App\Http\Controllers;

use App\Models\Woodpedia;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index(){

        return view('home',[
            'title' => 'Home',
            'css' => 'Beranda',
            'active' => 'home'
        ]);
    }
    public function home(){
        return view('dashboard.index',[
            'title' => 'Dashboard',
            'active' => 'home',
            'css' => 'Beranda'
        ]);
    }

    public function showWoodpedia(Woodpedia $woodpedia){
        return [
            'title' => 'Woodpedia',
            'css' => 'Beranda',
            'active' => 'woodpedia',
            'woodpedia' => $woodpedia
        ];
    }
}
