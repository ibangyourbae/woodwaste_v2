<?php

namespace App\Http\Controllers;

use App\Models\Wooddata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AdminWooddataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wooddata = DB::table('wooddatas')->get();
        return view('/admin.wooddata.index',[
            'title' => 'Dashboard Admin Wooddata',
            'wooddata' => $wooddata
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wooddata  $wooddata
     * @return \Illuminate\Http\Response
     */
    public function show(Wooddata $wooddata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wooddata  $wooddata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wooddata = Wooddata::findOrFail($id);
        return view('admin.wooddata.edit',[
            'wooddata' => $wooddata
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wooddata  $wooddata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wooddata $wooddata, $id)
    {
   


        $wooddata = Wooddata::find($id)->update($request->all());
        
         

        
        return redirect('/admin/wooddata')->with('success','Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wooddata  $wooddata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wooddata $wooddata)
    {
        //
    }
}
