<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                <a class="nav-link {{ ($title === "about") ? 'active' : '' }}" href="/about">about</a>
                <a class="nav-link {{ ($title === "blog") ? 'active' : '' }}" href="/blog">blog</a>
            </div>
        </div>
    </div>
</nav>