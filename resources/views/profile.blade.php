@extends('layouts.main')

@section('content')

<div class = "display_flex prof_div_geser">
    <div class= "prof_kiri">
        <h1 class = "white_text">My Profile</h1>

        @if ($user->avatar)
            <img class ="prof_pic geser_dikit" src="{{ url('storage/avatar/' . $user->avatar) }}" alt="">
        @else
            <img class ="prof_pic geser_dikit" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/1200px-Default_pfp.svg.png" alt="kocak">
        @endif

        <p class = "white_text bwh_pic_prof">{{ $user->username }}</p>
        <p class = "white_text">{{ $user->email }}</p>
    </div>

    <div class = "display_block prof_kanan">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <h1 class = "white_text">Update Profile</h1>
        <form class = "" action="/profile/{{ $user->id }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="username" class="form-label white_text">Username</label>
                <input type="text" value="{{ $user->username }}" name="username" class="form-control panjang_form_prof height_50 bgr_clr white_text" placeholder="" id="">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label white_text">Email</label>
                <input type="email" value="{{ $user->email }}" name="email" class="form-control panjang_form_prof height_50 bgr_clr white_text" placeholder="" id="">
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label white_text">DOB</label>
                <input type="date" id="" name="dob"
                    class="form-control panjang_form_prof height_50 bgr_clr white_text"
                    value="{{ $user->date_of_birth }}">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label white_text">Phone</label>
                <input type="text" value="{{ $user->phone }}" name="phone" class="form-control panjang_form_prof height_50 bgr_clr white_text">
            </div>

            <div class = "login_char down_reg_but2" >
                <button type="submit" class="btn panjang_form_prof pp2 white_text login_margin_bot" style="background-color: salmon">Update</button>
            </div>

        </form>
    </div>
</div>

@endsection
