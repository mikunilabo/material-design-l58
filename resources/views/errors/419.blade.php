@extends ('layouts.skeleton')

@section ('title', __('419 Page Expired'))

@section ('content')
    <main class="my-auto py-5">
        <div class="container animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="clearfix">
                        <h1 class="float-left display-3 mr-4">419</h1>
                        <h4 class="pt-1">@lang ('The page has expired.')</h4>
                        <p class="text-muted">
                            @lang ('Sorry to trouble you, but please refresh the page and try again.')<br>
                            <a href="{{ route('root') }}">@lang ('Return to Top')</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
