<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
  // * [GET]
  public function Index()
  {
    $events = Event::all();

    return view("Event/index", ['events' => $events]);
  }

  // * [GET]
  public function Create()
  {
    return view("Event/create");
  }

  // * [POST]
  public function store(Request $request)
  {
    $event = new Event;
    $event->title = $request->title;
    $event->city = $request->city;
    $event->description = $request->description;
    $event->private = $request->private;

    $event->save();

    return redirect("/")->with('message','Evento criado com sucesso!');
  }
}
