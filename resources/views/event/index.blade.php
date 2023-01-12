@extends('layouts.main')

@section('content')
    <div class="container" style="text-align:center">
        <h1 style="color:#ECB942; font-family:aria; font-size:8vw">Events</h1>
    </div>

    <!-- @foreach ($events as $event)
    {{ $event->title }}
                    <br>
    @endforeach -->

    @foreach ($events as $event)
        <div class="mb-3 row d-flex justify-content-center">
            <div class="card" style="width: 52rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <!-- image -->
                <img class="card-img-top margin_left_min_13-5px width_883-5px margin_top_min_2px height_200px image_fit_cover2"
                    src="{{ url('storage/event/' . $event->image) }}" alt="">
                <!-- <img class="card-img-top margin_left_min_13-5px width_883-5px margin_top_min_2px height_200px image_fit_cover2" src=" https://thumbs.dreamstime.com/z/environment-day-banner-social-green-community-world-illustration-people-building-eco-friendly-together-holiday-event-concept-190724714.jpg" alt="..."> -->
                <a href="/events/{{ $event->id }}">show more</a>
                <div class="d-flex card-body ">
                    <div>
                        <span class="">{{ $event->title }}</span>
                    </div>
                    @if (Auth::user() && Auth::user()->role == 'admin')
                        <div class="relative_right d-flex">
                            <a href="/events/{{ $event->id }}/edit" class="width_100px btn btn-primary"
                                style="background-color:#FB7373; border-color:#FB7373">Edit</a>
                            <form action="/events/{{ $event->id }}/delete" method="post">
                                @csrf
                                <button class="ms-2 width_100px btn btn-primary"
                                    style="background-color:#FB7373; border-color:#FB7373" type="submit">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach

    @if (Auth::user() && Auth::user()->role == 'admin')
        <div class="row d-flex justify-content-center">
            <a href="/events/create" class="fw-bold text-light btn btn-warning" style="width: 52rem">
                + Add New Event
            </a>
        </div>
    @endif
@endsection
