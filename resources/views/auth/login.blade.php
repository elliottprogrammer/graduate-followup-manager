@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card login-card">
        <h1 class="login-card__title blue darken-4">Login</h1>
        <div class="card-content">
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="row login-row">
                    <div class="input-field col s12">
                        <label for="email">Email address</label>
                        <input type="email" class="validate{{ $errors->has('email') ? ' invalid' : ' valid' }}" name="email" id="email" value="{{ old('email') }}" required />
                        @if ($errors->has('email'))
                            <span class="helper-text" role="alert" data-error="{{ $errors->first('email') }}"></span>
                        @endif
                    </div>
                    <div class="input-field col s12">
                        <label for="password">Password </label>
                        <input type="password" class="validate{{ $errors->has('password') ? ' invalid' : ' valid' }}" name="password" id="password" required />
                        @if ($errors->has('password'))
                            <span class="helper-text" role="alert" data-error="{{ $errors->first('password') }}"></span>
                        @endif
                    </div>
                    <div class="col s12">
                    <p>
                        <label for="remember">
                            <input type="checkbox"{{ old('remember') ? ' class="filled-in"' : '' }} name="remember" id="remember" />
                            <span class="grey-text">Remember Me</span>
                        </label>
                    </p>
                    </div>
                    <div class="input-field col s12 right-align">
                        <div class="right-align">
                            <button class="btn waves-effect waves-light blue darken-3" type="submit" name="submit" id="submit">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @if (Route::has('password.request'))
            <div class="card-action">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        @endif
    </div>  
</div>
@endsection
@section('scripts')
<script>
window.addEventListener('load', function() {
    M.updateTextFields();
});
</script>
@endsection