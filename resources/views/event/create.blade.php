@extends('layouts.main')

@section('content')
<p class = "font_size_80 text-warning pt-4 padding_bottom_min_40px text-center">Events</p>
<div class="row justify-content-center" style="padding: 150px 0px;">
    <div class="col col-md-8 margin_top_min_70px margin_bottom_min_70px">
        <div class="login-form">
            <form action="/events/create" method="post" enctype="multipart/form-data">
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
                    <label for="image" class="form-label white_text">Image Url</label>
                    <input class="form-control form-control-lg" name="image" type="file" id="image">
                </div>
                <div class = "form-group mb-3 pt-2">
                    <button type="submit" class="btn form-control form-control-lg text-light" style="background-color: salmon">Add Event</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
