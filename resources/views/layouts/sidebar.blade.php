<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            @guest
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">
                    <span data-feather="home"></span>
                    Home
                </a>
            </li>
            @else
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">
                        <span data-feather="home"></span>
                        Home
                    </a>
                </li>
                
                @if(auth()->user()->role=='student')    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('mahasiswa*') ? 'active' : '' }}" href="/mahasiswa">
                            <span data-feather="user"></span>
                            Data Mahasiswa
                        </a>
                    </li>

                    <ul class="nav-item">
                        <a class="nav-link {{ Request::is('jadwal*') ? 'active' : '' }}" href="/jadwal">
                            <span data-feather="clock"></span>
                            Jadwal Bimbingan
                        </a>
                    </ul>

                @elseif(auth()->user()->role=='lecturer')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dosen*') ? 'active' : '' }}" href="/dosen">
                            <span data-feather="user-check"></span>
                            Data Dosen
                        </a>
                    </li>

                    <ul class="nav-item">
                        <a class="nav-link {{ Request::is('jadwaldosen*') ? 'active' : '' }}" href="/jadwaldosen">
                            <span data-feather="calendar"></span>
                            Jadwal Dosen
                        </a>
                    </ul>
                @endif
            @endguest
        </ul>
    </div>
</nav>