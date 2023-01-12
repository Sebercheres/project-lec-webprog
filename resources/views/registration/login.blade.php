@extends('layouts.main')

@section('content')
    <div class="row justify-content-center"
        style="padding: 250px 0px;background-image: url('https://img.freepik.com/free-vector/cartoon-forest-background-nature-park-landscape_107791-2040.jpg?w=2000')">
        <div class="margin_top_min_170px col-md-5 margin_bottom_min_170px">
            <div class="container bg-light p-4">
                <div class="login-form">
                    <h1 style="color: #ff8800; text-align:center; font-weight:bold">{{__('login.welcome')}}</h1>
                    <br>
                    <form action="/login" method="POST">
                        @csrf
                        @php
                            if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
                                $email = $_COOKIE['email'];
                                $password = $_COOKIE['password'];
                                $remembered = "checked='checked'";
                            } else {
                                $email = '';
                                $password = '';
                                $remembered = '';
                            }
                        @endphp
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
                            <input class="form-control form-control-lg" type="email" class="form-control" name="email"
                                id="email" placeholder="Email" value="{{ $email }}">
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg"type="password" class="form-control" name="password"
                                id="password" placeholder="Password" value="{{ $password }}">
                        </div>
                        <div>
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">{{__('login.remember')}}</label>
                        </div>
                        <br>
                        <div class="form-group d-flex justify-content-center m-auto">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn bg-warning">{{__('login.login')}}</button>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center m-auto pt-4">
                            <p>{{__('login.acc')}}<a href="/register"
                                    class="fw-bold text-primary text-decoration-none">{{__('login.register')}}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
