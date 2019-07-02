@extends ('layouts.app')

@section ('title', __('500 Internal Server Error'))

@section ('content')
    <main class="py-5 my-auto">
        <div class="container animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="clearfix">
                        <h1 class="float-left display-3 mr-4">500</h1>
                        <h4 class="pt-1">@lang ('An internal server error has occurred.')</h4>
                        <p class="text-muted">
                            @lang ('Please contact the administrator.')<br>
                            <a href="{{ route('root') }}">@lang ('Return to Top')</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
