<?php

namespace App\Http\Controllers;

use App\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors=Sponsor::all();
        return view('backend.sponsor.index',compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sponsor.create');
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
            
            'photo'=>'required|min:4',
        ]);
        $sponsor=new Sponsor();
        
        

         $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/sponsor'),$imageName);
            $path = 'backend/sponsor/'.$imageName;

              //Data insert
            
            
            $sponsor->photo = $path;
            $sponsor->save();

        
        return redirect()->route('sponsors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.sponsor.edit',compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'photo'=>'required',
        ]);
        
        
       
        if ($request->hasFile('photo')) {

             $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/sponsor'),$imageName);
            $path = 'backend/sponsor/'.$imageName;


            
         }else{

            $path = $request->oldphoto;
         }

        //data update
     
            $sponsor->photo = $path;
          
            


        $sponsor->save();
        return redirect()->route('sponsors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $sponsor->delete();
        return redirect()->route('sponsors.index');
    }
}
