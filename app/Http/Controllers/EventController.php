<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
        return view('event.index', [
            'events' => Event::paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage/event'), $imageName);
        $event->image = $imageName;
        $event->user_id = '1';

        $event->save();
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $event = Event::findorFail($id);
        return view('event.show',compact('event'));
    } // tau kan di event semuanya masih static !!! - awe
    //iy emg blm ada datanya kan? ud bisa kok liat diatas pake namanya $events tinggal for loop aja - awe

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        // mo ngapain di? salah narooo harusnya di show
        return view('event.edit', [
            'event' => Event::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
        $event = Event::find($id);

        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',
                'image' => 'file',
            ]
        );

        $event->title = $request->title;
        $event->description = $request->description;

        if ($request->image != null) {
            unlink(public_path('/storage/event/' . $event->image));
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/storage/event'), $imageName);
            $event->image = $imageName;
        }
        $event->user_id = '1';
        $event->save();
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
        $event = Event::findorFail($id);
        unlink(public_path('storage/event/'.$event->image));
        $event->delete();
        return redirect()->route('events.index');
    }
}
