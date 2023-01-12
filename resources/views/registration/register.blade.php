@extends('layouts.main')

@section('content')
    <div class="row justify-content-center" style="background-repeat:no-repeat;padding: 150px 0px; background-image: url('https://img.freepik.com/free-vector/early-morning-cartoon-nature-landscape-sunrise_107791-10161.jpg?w=2000')">
        <div class="col col-md-5 margin_top_min_70px margin_bottom_min_70px">
            <div class="container bg-light p-4">
                <div class="login-form">
                    <h1 style="color: #ff8800; text-align:center; font-weight:bold">{{ __('register.Register')}}</h1>
                    <br>
                    <form action="/register" method="POST">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-lg" name="username" id="username"
                                placeholder="{{__('register.user')}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control form-control-lg" name="email" id="email"
                                placeholder="Email">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control form-control-lg" name="password" id="password"
                                placeholder="Password">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control form-control-lg" name="password_confirmation"
                                id="password_confirmation" placeholder="Confirm Password">
                        </div>
                        <br>
                        <div class="form-group d-flex justify-content-center m-auto">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn bg-warning">{{__('register.Register')}}</button>
                            </div>

                        </div>
                        <br>
                        <div class="form-group d-flex justify-content-center m-auto">
                            <p>{{__('register.alrd')}}<a href="/login" class = "fw-bold text-primary text-decoration-none">{{__('register.here')}}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
