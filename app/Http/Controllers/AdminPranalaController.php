<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pranala;
use \Cviebrock\EloquentSluggable\Services\SlugService;
class AdminPranalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pranala = DB::table('pranalas')->get();
        return view('/admin.pranala.index',[
            'title' => 'Dashboard Admin Pranala',
            'pranala' => $pranala,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('/admin.pranala.create',[
            'title' => 'Dashboard Admin Pranala',
            'pranalas' => Pranala::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required',
            'map' => 'required',
        ]);


        $validatedData['slug'] = SlugService::createSlug(Pranala::class, 'slug', $validatedData['name']);

        Pranala::create($validatedData);
        return redirect('/admin/pranala')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pranala  $pranala
     * @return \Illuminate\Http\Response
     */
    public function show(Pranala $pranala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pranala  $pranala
     * @return \Illuminate\Http\Response
     */
    // public function edit(Pranala $pranala){
    //     $pranala = Pranala::FindOrFail($pranala->id);
    //     return view('admin.pranala.edit',[
    //         'pranala' => $pranala
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pranala  $pranala
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Pranala $pranala)
    // {
    //     $rules = [
    //         'name' => 'required',
    //         'map' => 'required',
    //     ];
        
    //     if($request->slug != $pranala->slug){
    //         $rules['slug'] = 'required|unique:pranalas';
    //     }
    //     $validatedData = $request->validate($rules);

    //     Pranala::where('id',$pranala->id)->update($validatedData);

    //     return redirect('/admin/pranala')->with('success', 'Data has been updated');
    // }

    public function edit($id){
        $pranala = Pranala::findOrFail($id);
        return view('admin.pranala.edit',[
            'pranala' => $pranala
        ]);
    }
    public function update(Request $request, $id, Pranala $pranala){

        $rules = [
            'name' => 'required',
            'map' => 'required'
        ];

        if($request->slug != $pranala->slug){
            $rules['slug'] = 'required|unique:pranalas';
        }

        $validatedData = $request->validate($rules);
        // $pranala = Pranala::find($id)->update($request->all());
        Pranala::where('id',$id)->update($validatedData);

        return redirect('/admin/pranala')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pranala  $pranala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pranala $pranala)
    {
        Pranala::destroy($pranala->id);
        return redirect('/admin/pranala')->with('success', 'Data has been deleted');
    }
}
