@extends('layouts.main')

@section('content')
    {{-- @foreach ($events as $event)
        <p>{{$event->title}}</p>
    @endforeach --}}
<!--
    {{-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item" data-bs-interval="2000">
            <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/137372907/original/6faf0a41e20afb8c76fc2eea8b45cd2a0c6f52bb/design-banner-carousel-for-facebook-ads-campaign.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://static.wingify.com/gcp/uploads/sites/3/2013/08/OG-image_How-to-Use-Image-Carousels-the-Right-Way.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.byui.edu/images/PAGE_BUILDER/Page%20Builder%20Overview/Carousel%20Components.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div> --}} -->

    <div id="carouselExampleCaptions" class="carousel slide image_fit_cover2" data-bs-ride="false"
        style="width:1020px;height:500px;margin:auto;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="/events/{{ $events[0]->id }}">
                    <img src="{{ url('storage/event/' . $events[0]->image) }}" class="d-block" alt="..."
                        style="width:1020px;height:500px;">
                    <div class="carousel-caption d-none d-md-block text-center">
                        <h5 class="text_shadow">{{ $events[0]->title }}</h5>
                        <div class="hidden_over">
                            {{-- <p>{{$events[0]->description}}</p> --}}
                        </div>

                        {{-- <button type="button" class="btn btn-primary">Know More</button> --}}

                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="/events/{{ $events[1]->id }}">
                    <img src="{{ url('storage/event/' . $events[1]->image) }}" class="d-block w-100" alt="..."
                        style="width:1020px;height:500px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text_shadow">{{ $events[1]->title }}</h5>
                        <div class="hidden_over">
                            {{-- <p>{{$events[1]->description}}</p> --}}
                        </div>

                        {{-- <button type="button" class="btn btn-primary">Know More</button> --}}

                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="/events/{{ $events[2]->id }}">
                    <img src="{{ url('storage/event/' . $events[2]->image) }}" class="d-block w-100" alt="..."
                        style="width:1020px;height:500px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text_shadow">{{ $events[2]->title }}</h5>
                        <div class="hidden_over">
                            {{-- <p>{{$events[2]->description}}</p> --}}
                        </div>
                        {{-- <a href="/events/{{$events[2]->id}}">
                        <button type="button" class="btn btn-primary">Know More</button>
                        </a> --}}
                    </div>
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="" style="text-align:center">
        <h1 style="color:#97BC59; font-family:aria; font-size:8vw">Donations</h1>
    </div>
    {{--
    <a href={{ route('donations.create') }}>
        <h1>add donations</h1>
    </a> --}}
    @if (Auth::user() && Auth::user()->role == 'admin')
        <div class=" d-flex justify-content-center mb-3">
            <a href={{ route('donations.create') }}>
                <button type="button" style="width:1020px;background-color:#99e763;" class=" btn text-light fw-bold">+Add
                    Donations</button>
            </a>
        </div>
    @endif

    {{-- <div class = "d-flex justify-content-center"> --}}
    {{-- <div class="margin_x-axis_200px row row-cols-1 row-cols-md-2 g-4">
            @foreach ($donations as $item)
                <a href="/donations/{{$item->id}}">
                    <div class="col width_500px_2">
                        <div class="card padding_min">
                            <img style ="margin-top:-1px;margin-left:-1px;"class = "height_200px image_fit_cover2" src="{{ url('storage/donation/images/' . $item->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h1>{{ $item->title }}</h1>
                                <p>Collected Rp.{{$item->current_sum}},- out of Rp.{{$item->total_sum}},-</p>
                                <progress style = "width:400px ;display:block" id="file" value="{{$item->current_sum}}" max="{{$item->total_sum}}"></progress>
                                <a href="/donations/{{$item->id}}">Show donation</a>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div> --}}
    {{-- </div> --}}


    <div class="margin_x-axis_200px row row-cols-1 row-cols-md-2 g-4 pb-3">
        @foreach ($donations as $item)
            <a class="text-decoration-none text-dark" href="/donations/{{ $item->id }}">
                <div class="col" style="width:500px;margin:auto;">
                    <div class="card ">
                        <img style="margin-top:-1px;margin-left:-1px;"
                            class="height_200px w_donation_cov image_fit_cover2 card-img-top"
                            src="{{ url('storage/donation/images/' . $item->image) }}" alt="...">
                        <div class="card-body">
                            <h1>{{ $item->title }}</h1>
                            <p>Collected <span style="color:blue;">Rp.{{ $item->current_sum }},-</span> out of
                                Rp.{{ $item->total_sum }},-</p>
                            <progress style="width:400px ;display:block" id="file" value="{{ $item->current_sum }}"
                                max="{{ $item->total_sum }}"></progress>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="d-flex justify-content-center pb-3 pt-1" style="">
        {!! $donations->links() !!}
    </div>
@endsection
