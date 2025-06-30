

<nav class="navbar navbar-expand-lg p-2">
    <div class="container-fluid">
        <span class="nav-color fs-2 fw-bold mx-2">PEPPEB&b</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link fw-bold text-gray" aria-current="page" href="{{route('homepage')}}">Home</a>
                <a class="nav-link fw-bold text-gray" href="{{route('B&b')}}">B&b</a>
                <a class="nav-link fw-bold text-gray" href="#">Offerte</a>
                <a class="nav-link fw-bold text-gray" href="">Chi siamo</a>
            </div>
            <button class="rounded-2 p-2 d-flex align-items-center button_cart mx-2 text-center">
                <i class="fa-solid fa-cart-shopping"></i>
            </button>
        </div>
    </div>
</nav>
