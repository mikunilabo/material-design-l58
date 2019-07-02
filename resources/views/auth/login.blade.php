@extends('layouts.app')

@section('title', __('Login'))

@section('content')
    <main class="py-5 my-auto">
        <div class="container animated fadeIn">
            <section class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-center pt-3">@lang ('Login')</h2>

                    <form method="POST" action="{{ route('login') }}" autocomplete="off" class="p-3">
                        @csrf

                        <div class="md-form">
                            @set ($attribute, 'email')
                            <input id="{{ $attribute }}" type="email" class="form-control @error($attribute) is-invalid @enderror" name="{{ $attribute }}" value="{{ old($attribute) }}" required autofocus />
                            <label for="{{ $attribute }}" class="">@lang ('E-Mail')</label>

                            @error($attribute)
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            @set ($attribute, 'password')
                            <input id="{{ $attribute }}" type="password" class="form-control @error($attribute) is-invalid @enderror" name="{{ $attribute }}" required />
                            <label for="{{ $attribute }}" class="">@lang ('Password')</label>

                            @error($attribute)
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                            <div class="form-check">
                                @set ($attribute, 'remember')
                                <input type="checkbox" name="{{ $attribute }}" value="1" id="{{ $attribute }}" class="form-check-input" {{ old($attribute) ? 'checked' : '' }} />
                                <label for="{{ $attribute }}" class="form-check-label cursor-pointer">@lang ('Remember Me')</label>
                            </div>

                            @if (Route::has('password.request'))
                                <div>
                                    <a href="{{ route('password.request') }}">
                                        @lang ('Forgot password?')
                                    </a>
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-block my-4">
                            @lang ('Login')
                        </button>

                        @if (Route::has('register'))
                            <div class="text-center">
                                @lang ('Do not have an account?')
                                <a href="{{ route('register') }}">
                                    @lang ('Use registration')
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
