<?php

namespace App\Http\Controllers;

use App\Models\AllWood;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

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

        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('images-wood');
        }

        $validatedData['store_id'] = auth()->user()->id;
        $validatedData['slug'] = SlugService::createSlug(AllWood::class, 'slug', $validatedData['wood_name']);
        AllWood::create($validatedData);
        return redirect('/allwood')->with('success', 'Kerajinan Berhasil di buat !');
    }

    public function edit($id){
        $allwood = AllWood::findOrFail($id);
        return view('allwood-edit-wood',[
            'title' => 'All Wood',
            'css' => 'Allwood',
            'active' => 'allwood',
            'allwood' => $allwood,
        ]);
    }

    public function update(Request $request, $id, AllWood $allwood){
        $rules = [
            'wood_name' => 'required',
            'image' => 'image',
            'stock' => 'required',
            'price' => 'required'
        ];
        if($request->slug != $allwood->slug){
            $rules['slug'] = 'required|unique:woodpedias';
        }

        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('images-wood');
        }
        $validatedData['store_id'] = auth()->user()->id;
        $validatedData['slug'] = SlugService::createSlug(AllWood::class, 'slug', $validatedData['wood_name']);
  

        AllWood::where('id',$id)->update($validatedData);
        // $woodpedia = Woodpedia::find($id)->update($request->all());
        return redirect('/allwood')->with('success', 'Kerajinan berhasil diubah');

    }
    public function destroy($id){
        $allwood = AllWood::find($id);
        $allwood->delete();
        return redirect('/allwood')->with('success', 'Kerajinan berhasil dihapus');
    }



}
