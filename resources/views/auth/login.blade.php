@extends('layouts.app')

@section('content')
<div class="form">
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <p class="form__enclosure"><input class="form__text form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="IDかメールアドレスを入力してください" value="{{ old('email') }}" size="40" required autofocus></p>
    @if ($errors->has('email'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    <p class="form__enclosure"><input class="form__text form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="○文字以上のパスワードを入力してください" size="40" required maxlength="10" required></p>
    @if ($errors->has('password'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif

    <div class="form__checkbox">
        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
        </label>
    </div>

    <p class="form__enclosure"><button class="form__button" type="submit">{{ __('Login') }}</button></p>

    <a class="form__link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>

  </form>
</div>
@endsection
