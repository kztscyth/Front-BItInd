<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">BIT IND</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-4 fw-bold">
                    <a class="nav-link {{ $title === 'Landing Page' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item mx-4 fw-bold">
                    <a class="nav-link {{ $title === 'Order Page' ? 'active' : '' }}"
                        href="{{ url('/#packages') }}">Order</a>
                </li>
                <li class="nav-item mx-4 fw-bold">
                    <a class="nav-link {{ $title === 'Examples' ? 'active' : '' }}" href="/examples">Examples</a>
                </li>
                <li class="nav-item mx-4 fw-bold">
                    <a class="nav-link {{ $title === 'About Us' ? 'active' : '' }}" href="/about">About Us</a>
                </li>
            </ul>
            <a class="navbar-brand me-2" href="/login">
                <i class='bx bx-tada-hover bx-log-in '></i>
            </a>
        </div>
    </div>
</nav>
