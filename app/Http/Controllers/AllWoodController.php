<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\AllWood;
use App\Models\Store;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class AllWoodController extends Controller
{
    public function index()
    {
        return view('allwood',[
            'title' => 'All Wood',
            'css' => 'Allwood',
            'active' => 'allwood'
        ]);
    }

    public function showStore(Store $store, AllWood $allwood){
        return view('allwood-detail',[
            'title' => 'All Wood Detail',
            'css' => 'AllwoodDetail',
            'active' => 'allwood',
            'store' => $store,
            'allwood' => $allwood
        ]);
    }
    

    public function create(){
        $allwood = DB::table('all_wood')->get();
        return view('allwood-create',[
            'title' => 'All Wood',
            'css' => 'Allwood',
            'active' => 'allwood',
            'allwood' => $allwood,
        ]);
    }


    public function store(Request $request){

    
        $validatedData = $request->validate([
            'store_name' => ['required','max:26'],
            'store_address' => ['required','max:255'],
            'store_phone' => ['required','min:11','max:12'],
            'image' => 'image|file|max:4096',
 
        ]); 

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('images-store');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['slug'] = SlugService::createSlug(Store::class, 'slug', $validatedData['store_name']);
        Store::create($validatedData);
        return redirect('/allwood')->with('success', 'Toko Berhasil di buat !');
    }
    public function editStore(Store $store){
        
        return view('/allwood-edit',[
            'store' => $store,
            'title' => 'All Wood',
            'css' => 'Allwood',
            'active' => 'allwood'
        ]);
    }
    public function updateStore(Request $request, Store $store){
        
        $rules = [
            'store_name' => 'required|max:255',
            'store_address' => 'required|max:255',
            'store_phone' => 'required|max:25',
            'image' => 'image'
            
        ];

        if($request->slug != $store->slug){
            $rules['slug'] = 'required|unique:stores';
        }
        
        
        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('image-store');
        }

        $validatedData['user_id'] = auth()->user()->id;
   

        Store::where('id',$store->id)->update($validatedData);
        
        
        return redirect('/allwood')->with('success', 'Toko Berhasil di update !');
    }

    

    // public function storeWood(Request $request){
    //     return $request;
    //     $validatedData = $request->validate([
    //         'wood_name' => ['required','max:255'],
    //         'stock' => ['required'],
    //         'price' => ['required'],
    //         'image' => 'image|file|max:4096'
    //     ]);

    //     if($request->file('image')){
    //         $validatedData['image'] = $request->file('image')->store('images-wood');
    //     }
    // }

    // public function storeWood(Request $request){
    //     return $request;
    // }

    public function showMyStore(Store $store, AllWood $allwood){
        return view('allwood-my-store',[
            'title' => 'All Wood Detail',
            'css' => 'Allwood',
            'active' => 'AllwoodDetail',
            'store' => $store,
            'allwood' => $allwood
        ]);
    }

    public function createWood(){
        $allwood = DB::table('all_wood')->get();
        return view('allwood-create-wood',[
            'title' => 'All Wood',
            'css' => 'Allwood',
            'active' => 'allwood',
            'allwood' => $allwood,
        ]);
    }

    
}
