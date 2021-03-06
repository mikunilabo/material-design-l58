
<footer class="page-footer font-small special-color-dark pt-4 shadow-sm">
    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <h5 class="text-uppercase text-muted">Footer Content</h5>
                <p>Here you can use rows and columns to organize your footer content.</p>
            </div>

            <hr class="clearfix w-100 d-md-none pb-3">

            @if (false)
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                    </ul>
                </div>
            @endif

        </div>
    </div>
    <div class="footer-copyright text-center py-3">
        &copy;{{ now()->year !== 2019 ? '2019 - ' : '' }}{{ now()->year }} {{ config('app.name') }}
    </div>
</footer>
