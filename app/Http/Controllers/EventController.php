<?php

namespace App\Http\Controllers;

use App\Event;
use App\Venue;
use DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $events=Event::all();
       $venues=Venue::all();
        return view('backend.event.index',compact('events','venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venues=Venue::all();
       
        return view('backend.event.create',compact('venues'));
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
            'name'=>'required',
            
            'date'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'photo'=>'required',
            'venue'=>'required',
            
        ]);
        $event=new Event();
        $event->name=$request->name;
        
        $event->date=$request->date;
        $event->start_time=$request->start_time;
        $event->end_time=$request->end_time;
       
        $event->venues_id=$request->venue;

        $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/event'),$imageName);
            $path = 'backend/event/'.$imageName;

              //Data insert
            
            
            $event->photo = $path;
            $event->save();

        // $date = DB::table('events')->get('Date');
        // $start_time = DB::table('events')->get('start_time');
        // $end_time = DB::table('events')->get('end_time');
        // $count = $date->count();
        // var_dump($start_time);
        // die();
    
       
        $event->save();
        return redirect()->route('events.index');
              
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)

    {
        $venues=Venue::all();
        return view('backend.event.edit',compact('event','venues'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
         $request->validate([
            'name'=>'required',
            'date'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            
            
            'venue'=>'required'
            
        ]);
        //$event=new Event();
        
         if ($request->hasFile('photo')) {

             $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/event'),$imageName);
            $path = 'backend/event/'.$imageName;


            
         }else{

            $path = $request->oldphoto;
         }

        //data update
     
     $event->name=$request->name;
        $event->date=$request->date;
        $event->start_time=$request->start_time;
        $event->end_time=$request->end_time;
        
        $event->venues_id=$request->venue;

            
            $event->photo = $path;
          
            

        
        $event->save();
        return redirect()->route('events.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }
}
