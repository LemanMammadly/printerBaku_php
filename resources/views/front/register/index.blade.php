@extends('front.layouts.master')
@section('title', 'Register Page')

@section('content')
    <main class="login-bg">
        <form action="{{ route('registerStore') }}" method="POST">
            @csrf
            <div class="register-form-area">
                @csrf
                <div class="register-form text-center">

                    <div class="register-heading">
                        <span>Sign Up</span>
                        <p>Create your account to get full access</p>
                    </div>

                    <div class="input-box">
                        <div class="single-input-fields">
                            <label>Full name</label>
                            <input value="{{ old('name') }}" type="text" placeholder="Enter full name" name="name">
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->get('name') as $message)
                                            <li style="color: red">{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="single-input-fields">
                            <label>Email Address</label>
                            <input value="{{ old('email') }}" type="email" placeholder="Enter email address" name="email">
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->get('email') as $message)
                                            <li style="color: red">{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="single-input-fields">
                            <label>Password</label>
                            <input value="{{ old('password') }}"  type="password" placeholder="Enter Password" name="password">
                            @if ($errors->has('password'))
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->get('password') as $message)
                                            <li style="color: red">{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="single-input-fields">
                            <label>Confirm Password</label>
                            <input value="{{ old('password_confirmation') }}" type="password" placeholder="Confirm Password" name="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->get('password_confirmation') as $message)
                                            <li style="color: red">{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="register-footer">
                        <p> Already have an account? <a href="{{ route('login') }}"> Login</a> here</p>
                        <button type="submit" class="submit-btn3">Sign Up</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
