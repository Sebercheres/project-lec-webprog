@extends('layouts.main')

@section('content')
    <div class="container" style="text-align:center">
        <h1 style="color:#97BC59; font-family:aria; font-size:8vw">Articles</h1>
    </div>
    @if (Auth::user() && Auth::user()->role == 'admin')
        <div class=" d-flex justify-content-center mb-3">
            <a href="/articles/create">
                <button type="button" class="width_500px btn btn-info text-light fw-bold">+Add article</button>
            </a>
        </div>
    @endif

    <div class="row d-flex justify-content-center">
        <div class="col-12 ">
            @foreach ($articles as $article)
                <div class="card mb-3 mx-auto" style="width: 50%">
                    <div class="row g-0">
                        <div class="col-md-4">
                            {{-- <img src="{{ Storage::url($article->image) }}" class="img-fluid rounded-start" alt="..."> --}}
                            <img src="{{ url('storage/article/images/' . $article->image) }}"
                                class="height_200px card-img-top img-fluid rounded-start image_fit_cover2" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="hidden_over card-text fw-bold">{{ $article->title }}</p>
                                <p class="hidden_over card-text pb-5">{{ $article->description }}</p>
                                <div class="d-flex relative_right">
                                    @if (Auth::user() && Auth::user()->role == 'admin')
                                        <button type="button" class="btn btn-warning">
                                            <a href={{ route('articles.edit', $article->id) }}
                                                style="color: white; text-decoration: none">+Edit article</a>
                                        </button>
                                    @endif
                                    <button type="button" class="ms-2 btn btn-warning">
                                        <a href="/articles/{{ $article->id }}"
                                            style="color: white; text-decoration: none">Read More</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center pb-3 pt-1" style="">
                {!! $articles->links() !!}
            </div>
        </div>
    </div>
@endsection
