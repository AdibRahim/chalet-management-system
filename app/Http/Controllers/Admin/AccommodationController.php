<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accommodation;

class AccommodationController extends Controller
{
    // public Accommodation $accommodation;

    public function index(){
        return view('admin.accommodation.index')->with('accommodations',Accommodation::all());
    }

    public function create(){
        return view('admin.accommodation.create');
    }

    public function store(Request $request){
        $this->validate(request(),[
            'name' => 'required',
            'type' => 'required',
        ]);

        Accommodation::create($request->only(['name','type']));

        return redirect(route('admin.accommodation.create'));
    }

     public function edit(Accommodation $accommodation){
        return view('admin.accommodation.edit')->with('accommodation',$accommodation);
     }

     public function update(Request $request,Accommodation $accommodation){

         $this->validate(request(),[
            'name' => 'required',
            'type' => 'required',
         ]);

         $accommodation->update($request->only(['name','type']));

         return redirect()->route('admin.accommodation.index');
     }

    public function destroy($accommodation){
        $accommodation->delete();

        return redirect(route('admin.accommodation.index'));
        
    }

    
}
