<?php

namespace App\Http\Controllers;

use App\Models\AllWood;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class WoodController extends Controller
{

    public function create(){
        $allwood = DB::table('all_wood')->get();
        return view('allwood-create-wood',[
            'title' => 'All Wood',
            'css' => 'Allwood',
            'active' => 'allwood',
            'allwood' => $allwood,
        ]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'wood_name' => ['required','max:25'],
            'stock' => ['required'],
            'price' => ['required'],
            'image' => 'image|file|max:4096',
            'body' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('images-wood');
        }

        $validatedData['store_id'] = auth()->user()->id;
        $validatedData['slug'] = SlugService::createSlug(AllWood::class, 'slug', $validatedData['wood_name']);
        AllWood::create($validatedData);
        return redirect('/allwood')->with('success', 'Kerajinan Berhasil di buat !');
    }



}
