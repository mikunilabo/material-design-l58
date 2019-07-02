@extends('layouts.app')

@section('title', __('Use registration'))

@section('content')
    <main class="py-5 my-auto">
        <div class="container animated fadeIn">
            <section class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-center pt-3">@lang ('Use registration')</h2>

                    <form method="POST" action="{{ route('register') }}" autocomplete="off" class="p-3">
                        @csrf

                        <div class="md-form">
                            @set ($attribute, 'name')
                            <input id="{{ $attribute }}" type="text" class="form-control @error($attribute) is-invalid @enderror" name="{{ $attribute }}" value="{{ old($attribute) }}" required autofocus />
                            <label for="{{ $attribute }}" class="">@lang ('Name')</label>

                            @error($attribute)
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            @set ($attribute, 'email')
                            <input id="{{ $attribute }}" type="email" class="form-control @error($attribute) is-invalid @enderror" name="{{ $attribute }}" value="{{ old($attribute) }}" required />
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

                        <button type="submit" class="btn btn-outline-success btn-block my-4">
                            @lang ('Submit')
                        </button>

                        <div class="text-center">
                            @lang ('Click here if you have an account')
                            <a href="{{ route('login') }}">
                                @lang ('Login')
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
