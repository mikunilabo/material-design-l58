@extends('layouts.app')

@section('title', __('Top page'))

@section('content')
    <main class="py-5 my-auto">
        <div class="container animated fadeIn">
            <section class="pb-4 text-center text-lg-left">
                <h1 class="h1-responsive font-weight-bold text-center mb-5 pt-2">Recent posts</h1>
                <p class="text-center mb-5 pb-3">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <div class="row">
                    <div class="col-lg-5 col-xl-5 pb-3">
                        <div class="view overlay rounded z-depth-2">
                            <a>
                                <img src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt="Sample image for first version of blog listing" class="img-fluid">
                                <div class="mask"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-7 col-xl-7">
                        <a href="" class="green-text">
                            <h6 class="font-weight-bold pb-1">
                                <i class="fas fa-utensils"></i> Food
                            </h6>
                        </a>
                        <h3 class="mb-4 font-weight-bold dark-grey-text">
                            <strong>This is title of the news</strong>
                        </h3>
                        <p>
                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                            aut rerum.
                        </p>
                        <p>by
                            <a>
                                <strong>Carine Fox</strong>
                            </a>, 19/08/2018
                        </p>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg mb-3">
                            @lang ('Login')
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-success btn-lg mb-3">
                            @lang ('Use registration')
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
