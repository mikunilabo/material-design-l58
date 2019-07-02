@extends('layouts.app')

@section('title', __('You must verify Your E-mail address'))

@section('content')
    <main class="py-5 my-auto">
        <div class="container animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            @lang ('A new authentication email has been sent to your registered email address.')
                        </div>
                    @endif

                    <div class="card bg-warning">
                        <div class="card-header">@lang ('You must verify Your E-mail address')</div>

                        <div class="card-body">
                            <p>
                                @lang ('Since the authentication email has been sent to the registered email address, please validate from the link URL in the received email.')
                            </p>
                            <p>
                                <a href="{{ route('verification.resend') }}">
                                    @lang ('Click here to resend confirmation email.')
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
