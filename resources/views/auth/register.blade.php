@extends('layouts.app')

@section('content')
<div class="form">
  <div class="title">{{ __('Register') }}</div>
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <p class="form__enclosure">
        <input class="form__text form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" size="40" name="name" placeholder="please enter your name" value="{{ old('name') }}" required autofocus>
      </p>

        @if ($errors->has('name'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
          @endif

          <p class="form__enclosure">
  					<input class="form__text form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" size="40" name="email" placeholder="please enter your e-mail address" value="{{ old('email') }}" required>
  				</p>

          @if ($errors->has('email'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif

          <p class="form__enclosure">
  					<input id="password" class="form__text form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" size="40" name="password" placeholder="please enter your password" required maxlength="10">
  				</p>

              @if ($errors->has('password'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif

              <p class="form__enclosure">
      					<input id="password-confirm" class="form__text form-control" type="password" size="40" name="password_confirmation" placeholder="please enter your password" required maxlength="10">
      				</p>

              <p class="form__enclosure">
      					<button class="form__button" type="submit">{{ __('Register') }}</button>
      				</p>
    </form>
</div>
@endsection
