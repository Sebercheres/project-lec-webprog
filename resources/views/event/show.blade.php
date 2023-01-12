@extends('layouts.main')

@section('content')

    <div class="container p-0 mt-5" style="width: 1100px;position: relative; border:1px solid lightgray;border-radius:20px">
        <img src="{{ url('storage/event/' . $event->image) }}" alt=... class ="image_fit_cover2 rounded-top rounded-2" style="width:1100px;height:500px;margin-top:-2px;margin-left:-1px;">
        <div class="container" style="text-align:left;background-color:#ffffff;">
            <h1>{{ $event->title }}</h1>
            <p> {{ $event->description }}</p>
        </div>
    </div>



@endsection
