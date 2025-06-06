@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Login') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            @foreach ([
              'email' => 'E-Mail Address',
              'password' => 'Password'
            ] as $field => $label)
              <div class="form-group row">
                <label for="{{ $field }}" class="col-md-4 col-form-label text-md-right">{{ __($label) }}</label>
                <div class="col-md-6">
                  <input
                    id="{{ $field }}"
                    type="{{ $field === 'password' ? 'password' : 'email' }}"
                    class="form-control @error($field) is-invalid @enderror"
                    name="{{ $field }}"
                    value="{{ old($field) }}"
                    required
                    autocomplete="{{ $field === 'password' ? 'current-password' : 'email' }}"
                    {{ $loop->first ? 'autofocus' : '' }}
                  >
                  @error($field)
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
              </div>
            @endforeach

            <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="remember"
                    id="remember"
                    {{ old('remember') ? 'checked' : '' }}
                  >
                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                  </a>
                @endif
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
