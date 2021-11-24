<?php

namespace App\Http\Controllers;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use App\Models\Woodpedia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
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
            'woodpedia' => $woodpedia
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Woodpedia  $woodpedia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $woodpedia = Woodpedia::findOrFail($id);
        return view('admin.woodpedia.edit',[
            'woodpedia' => $woodpedia,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Woodpedia  $woodpedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id, Woodpedia $woodpedia)
    {
        $rules = [
            'title' => 'required|max:255',
            'link' => 'required',
            'image' => 'image',
            'body' => 'required'
        ];

        if($request->slug != $woodpedia->slug){
            $rules['slug'] = 'required|unique:woodpedias';
        }

        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('images-woodpedia');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);

        Woodpedia::where('id',$id)->update($validatedData);
        // $woodpedia = Woodpedia::find($id)->update($request->all());
        return redirect('/admin/woodpedia')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Woodpedia  $woodpedia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $woodpedia = Woodpedia::find($id);
        $woodpedia->delete();
        return redirect('/admin/woodpedia')->with('success', 'Data has been deleted');
    }
}
