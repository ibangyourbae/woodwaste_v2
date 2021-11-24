<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pranala;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminPranalaController extends Controller
{
    //
    public function index(){
        $pranala = DB::table('pranalas')->get();
        return view('/admin.pranala.index',[
            'title' => 'Dashboard Admin Pranala',
            'pranala' => $pranala,
        ]);
    }

    public function create(){
        return view('/admin.pranala.create',[
            'title' => 'Dashboard Admin Pranala',
            'pranalas' => Pranala::all()
        ]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required',
            'map' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['slug'] = SlugService::createSlug(Pranala::class, 'slug', $validatedData['name']);

        Pranala::create($validatedData);
        return redirect('/admin/pranala')->with('success', 'Data has been added');
    }

    public function edit(Pranala $pranala){
        return view('admin.pranala.edit',[
            'pranala' => $pranala
        ]);
    }
}
