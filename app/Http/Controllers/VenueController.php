<?php

namespace App\Http\Controllers;

use App\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $venues=Venue::all();
        return view('backend.venue.index',compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.venue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:4',
            'address'=>'required',
            'photo'=>'required',
        ]);
        $venue=new Venue();
        $venue->name=$request->name;
        $venue->address=$request->address;
        

         $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/venue'),$imageName);
            $path = 'backend/venue/'.$imageName;

              //Data insert
            
            
            $venue->photo = $path;
            $venue->save();

        
        return redirect()->route('venues.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function show(Venue $venue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function edit(Venue $venue)
    {
        return view('backend.venue.edit',compact('venue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venue $venue)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
           // 'photo'=>'required',
        ]);
        //dd($request->oldphoto);
        
        if ($request->hasFile('photo')) {

             $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/venue/'),$imageName);
            $path = 'backend/venue/'.$imageName;


            
         }else{

            $path = $request->oldphoto;
         }

        //data update
         $venue->name=$request->name;
        $venue->address=$request->address;
       
     
            $venue->photo = $path;
          
            


        $venue->save();
        return redirect()->route('venues.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venue $venue)
    {
        $venue->delete();
        return redirect()->route('venues.index');
    }
}
