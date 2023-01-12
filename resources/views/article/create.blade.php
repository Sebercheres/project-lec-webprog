@extends('layouts.main')

@section('content')

    {{-- <form action="/articles/create" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="content" placeholder="content">
        <input type="file" name="image">
        <button type="submit">submit</button>
    </form>

@endsection --}}

<p class = "font_size_80 text-warning pt-4 padding_bottom_min_40px text-center">Articles</p>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row justify-content-center" style="padding: 150px 0px;">
    <div class="col col-md-8 margin_top_min_70px margin_bottom_min_70px">
        <div class="login-form">
            <form action="/articles/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="form-label white_text">Title</label>
                    <input type="text" name="title" class="form-control form-control-lg" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label white_text">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control form-control-lg"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="type_id" class="form-label ">Type</label>
                    <select class="form-control form-control-lg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" name="type_id" id="type">
                        <option>-- Select Type --</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label white_text">Image Url</label>
                    <input class="form-control form-control-lg" name="image" type="file" id="image">
                </div>
                <div class="form-group mb-3">
                    <label for="background" class="form-label white_text">Background</label>
                    <input class="form-control form-control-lg" name="background" type="file" id="image">
                </div>
                <div class = "form-group mb-3 pt-2">
                    <button type="submit" class="btn form-control form-control-lg text-light" style="background-color: salmon">Create Article</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
