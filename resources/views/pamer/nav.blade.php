<nav class="navbar navbar-expand-lg">
    <img src="/img/Ellipse 29.png" alt="" width="60px" height="60px" class="ms-5">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand me-2 fst-italic" href="/user">FlavourOfPamer</a>
        <div class="d-flex">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pesanan">Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/history">Histori</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Menu
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/menu1">Menu 1 Rasa</a></li>
                      <li><a class="dropdown-item" href="/menu2">Menu 2 Rasa</a></li>
                      <li><a class="dropdown-item" href="/menu3">Menu 3 Rasa</a></li>
                    </ul>
                  </li>
            </ul>
        </div>
        <div class="person-content d-flex justify-content-between">
            @auth
            <p class="m-auto me-2">{{auth()->user()->name}}</p>
            <div class="person bi bi-person-circle" id="personIcon">
                <div class="side">
                    <form action="/user/logout" method="POST">
                        @csrf
                        <button type="submit" class="logout">
                            <i class="bi bi-box-arrow-left"></i>
                            <p class="out">Logout</p>
                        </button>
                    </form>
                </div>
            </div>
            @endauth
            @guest
            <div class="person bi bi-person-circle" id="personIcon">
                    <div class="side">
                        <div class="kiri">
                            <a href="/register" id="registerLink">Register</a>
                        </div>
                        <div class="kanan">
                            <a href="/login" id="loginLink">Login</a>
                        </div>
                        <div class="admin">
                            <a href="/lomin" id="lominLink">Admin</a>
                        </div>
                    </div>
                </div>
            @endguest
            <a class="bi bi-bell-fill fs-2 m-auto text-black position-relative" href="{{ route('notifications.index') }}">
                @isset($unreadNotificationCount)
                    @if($unreadNotificationCount > 0)
                        <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">{{ $unreadNotificationCount }}</span>
                    @endif
                @endisset
            </a>
        </div>
    </div>
</nav>

<!-- Skrip Bootstrap 5 -->
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
