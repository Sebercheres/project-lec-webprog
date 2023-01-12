@extends('layouts.main')

@section('content')
    <div>
        <div style="position: relative; width:100%; text-align: center; color: white;">
            <img class="image_fit_cover2 width_max height_800px"
                src={{ url('storage/article/backgrounds/' . $article->background) }} alt=...>
            <div style="position:absolute;right:0;top:0;margin-top:-10px;">
                @if (Auth::user() && Auth::user()->role == 'admin')
                    <form action="/articles/{{ $article->id }}/delete" method="post">
                        @csrf
                        <div class="form-group mb-3 pt-2">
                            <button type="submit" class="btn form-control form-control-lg text-light"
                                style="background-color: salmon;width:150px;height:50px;">Delete</button>
                        </div>
                    </form>
                @endif
            </div>
            <div style=" black;position: absolute; bottom: 24px; left: 24px; font-size: xx-large;">
                <p class="fw-bold text_shadow">{{ $article->title }}</p>
            </div>

        </div>
        <div style="background-color: #B0CEF1; padding:2%">
            <div style="background-color:#ffffff; padding: 2%;overflow-wrap: break-word;">
                <p class="text-wrap">{{ $article->description }}</p>
            </div>
        </div>
    </div>
@endsection
