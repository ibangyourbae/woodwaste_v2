<?php

namespace App\Http\Controllers;

use App\Models\Pranala;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use App\Models\Woodpedia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminWoodpediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $woodpedia = DB::table('woodpedias')->get();
        return view('/admin.woodpedia.index',[
            'title' => 'Dashboard Admin Woodpedia',
            'woodpedia' => $woodpedia,
            'woodpedias' => Woodpedia::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin.woodpedia.create',[
            'woodpedias' => Woodpedia::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'link' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|file|max:4096'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('images-woodpedia');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['slug'] = SlugService::createSlug(Woodpedia::class, 'slug', $validatedData['title']);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);

        Woodpedia::create($validatedData);
        return redirect('/admin/woodpedia')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Woodpedia  $woodpedia
     * @return \Illuminate\Http\Response
     */
    public function show(Woodpedia $woodpedia)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Woodpedia  $woodpedia
     * @return \Illuminate\Http\Response
     */
    public function edit(Woodpedia $woodpedia)
    {

        return view('admin.woodpedia.edit',[
            'woodpedia' => $woodpedia
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Woodpedia  $woodpedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Woodpedia $woodpedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Woodpedia  $woodpedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Woodpedia $woodpedia)
    {
        // DB::table('woodpedias')->where('id',$woodpedia->id)->delete();
        Woodpedia::destroy($woodpedia->id);

        return redirect('/admin/woodpedia')->with('success','Post has been deleted !');
    }
}
