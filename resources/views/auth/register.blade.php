@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            @foreach ([
              'name' => 'Name',
              'email' => 'E-Mail Address',
              'username' => 'Username'
            ] as $field => $label)
              <div class="form-group row">
                <label for="{{ $field }}" class="col-md-4 col-form-label text-md-right">{{ __($label) }}</label>
                <div class="col-md-6">
                  <input
                    id="{{ $field }}"
                    type="{{ $field === 'email' ? 'email' : 'text' }}"
                    class="form-control @error($field) is-invalid @enderror"
                    name="{{ $field }}"
                    value="{{ old($field) }}"
                    required autocomplete="{{ $field }}"
                    {{ $loop->first ? 'autofocus' : '' }}
                  >

                  @error($field)
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
              </div>
            @endforeach

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
              <div class="col-md-6">
                <input
                  id="password"
                  type="password"
                  class="form-control @error('password') is-invalid @enderror"
                  name="password"
                  required autocomplete="new-password"
                >
                @error('password')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
              <div class="col-md-6">
                <input
                  id="password-confirm"
                  type="password"
                  class="form-control"
                  name="password_confirmation"
                  required autocomplete="new-password"
                >
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
                </button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
