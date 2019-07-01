@extends ('layouts.skeleton')

@section ('title', __('403 Forbidden'))

@section ('content')
    <main class="my-auto py-5">
        <div class="container animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="clearfix">
                        <h1 class="float-left display-3 mr-4">403</h1>
                        <h4 class="pt-3">@lang ('You do not have access.')</h4>
                        <p class="text-muted">
                            <a href="{{ route('home') }}">@lang ('Return to home')</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
