@extends('layouts.app')

@section('content')
    <main class="py-5">
        <div class="container animated fadeIn">
            <!--Section-->
            <section class="pb-4 text-center text-lg-left">

              <!--Section heading-->
              <h1 class="h1-responsive font-weight-bold text-center mb-5 pt-2">Recent posts</h1>
              <!--Section description-->
              <p class="text-center mb-5 pb-3">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-5 col-xl-5 pb-3">
                  <!--Featured image-->
                  <div class="view overlay rounded z-depth-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt="Sample image for first version of blog listing"
                      class="img-fluid">
                    <a>
                      <div class="mask"></div>
                    </a>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7 col-xl-7">
                  <!--Excerpt-->
                  <a href="" class="green-text">
                    <h6 class="font-weight-bold pb-1">
                      <i class="fas fa-utensils"></i> Food
                    </h6>
                  </a>
                  <h3 class="mb-4 font-weight-bold dark-grey-text">
                    <strong>This is title of the news</strong>
                  </h3>
                  <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                    aut rerum.</p>
                  <p>by
                    <a>
                      <strong>Carine Fox</strong>
                    </a>, 19/08/2018
                  </p>
                  <a class="btn btn-indigo btn-md mb-3">Read more</a>
                  <a class="btn btn-success btn-md mb-3">Read more</a>
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

          </section>
          <!--/Section: -->
        </div>
    </main>
@endsection
