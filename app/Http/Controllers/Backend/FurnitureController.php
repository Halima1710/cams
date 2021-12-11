<?php

namespace App\Http\Controllers\Backend;
use App\Models\Furniture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
  
    public function list()
    {
        return view('admin.furniture.furniture-list');
    }
   
   
    public function furniturecreate()
    {
        $categories=Furniture::orderBy('id','desc')->get();
        return view('admin.furniture.furniture-create',compact('categories'));

    }
    

    public function store(Request $request){
       
        // dd($request->all());
        Furniture::create([
            // field name from DB ||  field name from form
            'name'=>$request->name,
            'height'=>$request->height,
            'length'=>$request->lenght,
            'width'=>$request->weigth,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
          
        ]);
        return redirect()->back();

    }
    public function view()
    {
        $furnitures=Furniture::all();
        return view('admin.furniture.furniture-list',compact('furnitures'));

    }


}
