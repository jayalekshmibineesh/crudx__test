<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appartment;

class AppartmentController extends Controller
{
    public function index1()
    {
        return view('index1');
    }
public function add_appartment()
{
    return view('add_appartment');
}
public function add_apmt(Request $request)
{
    $request->validate([
        'appartment_name'=>'required',
        'location'=>'required',
        'no_of_flats'=>'required',
    ]);
 $data=$request->all();
 Appartment::create($data);
 return redirect()->route('add_appartment')->with('success','registered successfully');

}
public function view_appartment()
{
    $view=Appartment::all();
    return view('view_appartment',compact('view'));
}
public function edit($id)
{ $data=Appartment::find($id);
  return view('edit_appartment',compact('data'));
}
public function add_flat()
{ 
    return view('add_flat');
}

public function delete($id)

{
    Appartment::find($id)->delete();
    return redirect()->route('view_appartment');

}


}
