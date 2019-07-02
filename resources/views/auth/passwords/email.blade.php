@extends('layouts.app')

@section('title', __('Reset Password'))

@section('content')
    <main class="py-5 my-auto">
        <div class="container animated fadeIn">
            <section class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-center pt-3">@lang ('Reset Password')</h2>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" autocomplete="off" class="p-3">
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

                        <button type="submit" class="btn btn-outline-warning btn-block my-4">
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
