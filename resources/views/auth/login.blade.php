@extends('layouts.app')

@section('content')
<h3>Iniciar Sesion</h3>
<div class="d-flex justify-content-center">
    <form class="text-center border-light p-2" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <!-- Email -->
        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="">E-Mail</label>
            <input id="email" type="email" class="form-control mb-4" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        

        <!-- Password -->
        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="">Password</label>
            <input id="password" type="password" class="form-control mb-4" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="justify-content-around">
            <div>
                <!-- Remember me -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" id="defaultLoginFormRemember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="defaultLoginFormRemember">
                        Remember me
                    </label>
                </div>
            </div>
            <div>
                <!-- Forgot password -->
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
        </div>

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Login</button>
    </form>
</div>
@endsection