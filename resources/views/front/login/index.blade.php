@extends('front.layouts.master')
@section('title', 'Login Page')

@section('content')
    <main class="login-bg">
        <form action="{{ route('signin') }}" method="POST">
            @csrf
            <div class="login-form-area">
                <div class="login-form">

                    <div class="login-heading">
                        <span>Login</span>
                        <p>Enter Login details to get access</p>
                    </div>

                    <div class="input-box">
                        <div class="single-input-fields">
                            <label>Email Address</label>
                            <input type="text" placeholder="Email address" name="email">
                        </div>
                        <div class="single-input-fields">
                            <label>Password</label>
                            <input type="password" placeholder="Enter Password" name="password">
                        </div>
                        <div class="single-input-fields login-check">
                            <input type="checkbox" id="fruit1" name="keep-log">
                            <label for="fruit1">Keep me logged in</label>
                            <a href="#" class="f-right">Forgot Password?</a>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color: red">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="login-footer d-flex">
                        <div class="d-flex flex-row align-items-center">
                            <p>Don’t have an account? <a href="{{ route('register') }}">Sign Up</a> here</p>
                            <button type="submit" class="submit-btn3">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>

@endsection
