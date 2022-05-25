<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/event" style="letter-spacing: 5px"><img
                src="{{ url('/img/tiger1.png') }}" alt="Tiger" width="58px">&nbsp;&nbsp;&nbsp;STKD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ Request::is('home')?'orange':'active' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ Request::is('event')?'orange':'active' }}" href="/event">Event</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ Request::is('about')?'orange':'active' }}" href="/about">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
