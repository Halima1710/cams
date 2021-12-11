<?php

namespace App\Http\Controllers\Backend;
use App\Models\Repair;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepairingController extends Controller
{
    public function create()
    {
        return view('admin.repairing.create');
    }

    public function rlist()

    {
        return view('admin.repairing.rlist');

    }

  public function store(Request $request){

     
     Repair::create([
         //field name from DB||  field name from form
         'name'=>$request->name,
         'price'=>$request->price,
     ]);

     return redirect()->back();

  }
  
  public function view()
  {
      $repairs=Repair::all();
      return view('admin.repairing.rlist',compact('repairs'));
  }




}


