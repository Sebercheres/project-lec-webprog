@extends('layouts.main')

@section('content')
    <div class="container" style="text-align:center">
        <h1 style="color:#B0CEF1; font-family:aria; font-size:8vw">History</h1>
    </div>

    <div class="justify-content-center d-flex">
        @foreach ($donationHistories as $item)
        <div class="">
            <h1>{{ $item->donation->title }}</h1>
            <p>{{ $item->donation_sum }}</p>
            <p>{{  substr($item->donation_date,0,10) }}</p>
        </div>
        @endforeach
    </div>

    <div class="pb-3 pt-2" style="">
        {{-- {!! $articles->links() !!} --}}
    </div>
@endsection
