<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-5">
                <li>
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li>
                    <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">about</a>
                </li>
                <li>
                    <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">blog</a>
                </li>
                <li>
                    <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">categories   </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Log in</a>
                </li>
            </ul>
        </div>
    </div>
</nav>