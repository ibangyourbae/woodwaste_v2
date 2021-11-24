<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class Profile2Controller extends Controller
{
    //
    public function edit(User $user)
    {
        $user = User::findOrFail($user);

        return view('/edit',[
            'user' => $user,
            'title' => 'Profile',
            'active' => 'profile',
            'css' => 'Profile',
        ]);
    }

    public function update(Request $request, User $user)
    {
        
        $userDetails = Auth::user();  // To get the logged-in user details
        $user = User::find($userDetails ->id);  // Find the user using model and hold its reference
        if($request->file('image')){
            $user->image = $request->file('image')->store('images-profile');
        }
        $user->name=$request->input('name');
        $user->alamat=$request->input('alamat');
        $user->no_hp=$request->input('no_hp');
        
        $user->save();  // Update the data
        return redirect('/profile')->with('success', 'Profile Berhasil di ubah !');
        
    }

}
