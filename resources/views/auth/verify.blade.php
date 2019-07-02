@extends('layouts.app')

@section('title', __('Verify Your Email Address'))

@section('content')
    <main class="py-5 my-auto">
        <div class="container animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">@lang ('Verify Your Email Address')</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    @lang ('A fresh verification link has been sent to your email address.')
                                </div>
                            @endif

                            @lang ('Before proceeding, please check your email for a verification link.')
                            @lang ('If you did not receive the email')
                            , <a href="{{ route('verification.resend') }}">@lang ('click here to request another')</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
