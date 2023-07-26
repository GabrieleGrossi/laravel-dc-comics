<header class="mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="https://m.media-amazon.com/images/I/712pj+kPziL._AC_UF1000,1000_QL80_.jpg" style="width:8rem;" alt="Logo" class="d-inline-block align-text-top brand-logo me-5">
            <a class="navbar-brand me-5 {{ (Route::currentRouteName() == 'home') ? 'active': ''}}" aria-current="page" href="{{ route('home') }}">
                Laravel Comic
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav w-100">
                <a class="nav-link {{ (Route::currentRouteName() == 'home') ? 'active': ''}}" aria-current="page" href="{{ route('home') }}" >
                    Homepage
                </a>
                <a class="nav-link ms-auto" href="{{ route('admin.comics.create') }}">
                    Create a new comic
                </a>
            </div>
            </div>
        </div>
    </nav>
</header>