@extends('layouts.app')

@section('content')
    <main class="py-5">
        <div class="container animated fadeIn">
            <section class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="h1-responsive font-weight-bold text-center pt-3 clearfix">@lang ('Login')</h1>

                    <form class="p-4" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="md-form">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            <label for="email">@lang ('E-Mail Address')</label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form mt-5">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                            <label for="password">@lang ('Password')</label>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }} />
                                <label class="form-check-label" for="remember">@lang ('Remember Me')</label>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="">
                                    <a href="{{ route('password.request') }}">
                                        @lang ('Forgot Your Password?')
                                    </a>
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary btn-block my-4">
                            @lang ('Login')
                        </button>

                        @if (Route::has('register'))
                            <div class="text-center my-1">
                                Not a member?
                                <a href="{{ route('register') }}">
                                    @lang ('Register')
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
