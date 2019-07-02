@extends('layouts.app')

@section('title', __('Reset Password'))

@section('content')
    <main class="py-5 my-auto">
        <div class="container animated fadeIn">
            <section class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-center pt-3">@lang ('Reset Password')</h2>

                    <form method="POST" action="{{ route('password.update') }}" autocomplete="off" class="p-3">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="md-form">
                            @set ($attribute, 'email')
                            <input id="{{ $attribute }}" type="email" class="form-control @error($attribute) is-invalid @enderror" name="{{ $attribute }}" value="{{ $email ?? old($attribute) }}" required autofocus />
                            <label for="{{ $attribute }}" class="">@lang ('E-Mail')</label>

                            @error($attribute)
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            @set ($attribute, 'password')
                            <input id="{{ $attribute }}" type="password" class="form-control @error($attribute) is-invalid @enderror" name="{{ $attribute }}" value="" autocomplete="new-password" required />
                            <label for="{{ $attribute }}" class="">@lang ('Password')</label>

                            @error($attribute)
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            @set ($attribute, 'password_confirmation')
                            <input id="{{ $attribute }}" type="password" class="form-control @error($attribute) is-invalid @enderror" name="{{ $attribute }}" value="" autocomplete="new-password" required />
                            <label for="{{ $attribute }}" class="">@lang ('Confirm Password')</label>
                        </div>

                        <button type="submit" class="btn btn-outline-danger btn-block my-4">
                            @lang ('Submit')
                        </button>

                        <div class="text-center">
                            <a href="{{ route('login') }}">
                                @lang ('Back to sign in page.')
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
