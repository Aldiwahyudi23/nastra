<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="/home"><span class="brand-logo">
                    {{-- <img class="img-resvonsip" src="{{asset('Assets/Backend/images/logo/nastra-logo.png')}}" alt=""> --}}
                    <h2 class="brand-text">TUNAS NUSANTARA</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>

    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="/home"><i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
                </a>
            </li>

            {{-- MENU ADMIN --}}
            @if (Auth::user()->role == 'Admin')
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#"><i data-feather="credit-card"></i>
                    <span class="menu-title text-truncate" data-i18n="Card">Website</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ (request()->is('program-studi')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('program-studi.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Program</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('backend-kegiatan')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-kegiatan.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Kegiatan</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('backend-imageslider')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-imageslider.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Gambar Slider</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('backend-about')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-about.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">About</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('backend-video')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-video.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Video</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('backend-kategori-berita')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-kategori-berita.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Kategori Artikel</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('backend-berita')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-berita.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Artikel</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('backend-event')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-event.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Event</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('backend-footer')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-footer.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Footer</span>
                        </a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">Tentang</span></a>
                        <ul class="menu-content">
                            <li class="nav-item {{ (request()->is('backend-profile-sekolah')) ? 'active' : '' }}">
                                <a class="d-flex align-items-center" href="{{route('backend-profile-sekolah.index')}}"><span class="menu-item text-truncate" data-i18n="Third Level">Profile Sekolah</span></a>
                            </li>
                            <li class="nav-item {{ (request()->is('backend-visimisi')) ? 'active' : '' }}">
                                <a class="d-flex align-items-center" href="{{route('backend-visimisi.index')}}"><span class="menu-item text-truncate" data-i18n="Third Level">Visi dan Misi</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#"><i data-feather="users"></i>
                    <span class="menu-title text-truncate" data-i18n="Card">Pengguna</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ (request()->is('backend-pengguna-pengajar')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-pengguna-pengajar.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Pengajar</span>
                        </a>
                    </li>    
                    <li class="nav-item {{ (request()->is('backend-pengguna-staf')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-pengguna-staf.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Staf</span>
                        </a>
                    </li>    
                    <li class="nav-item {{ (request()->is('backend-pengguna-murid')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-pengguna-murid.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Murid</span>
                        </a>
                    </li>  
                    <li class="nav-item {{ (request()->is('backend-pengguna-ppdb')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-pengguna-ppdb.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">PPDB</span>
                        </a>
                    </li>                   
                </ul>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#"><i data-feather="users"></i>
                    <span class="menu-title text-truncate" data-i18n="Card">Master Data</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ (request()->is('backend-master-angkatan')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href=" {{route('backend-master-angkatan.index')}} "><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Angkatan</span>
                        </a>
                    </li>    
            </li>


            {{-- MENU GURU --}}
            @elseif(Auth::user()->role == 'Guru')
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#"><i data-feather="credit-card"></i>
                    <span class="menu-title text-truncate" data-i18n="Card">Data Murid</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href=""><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Kelas X</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href=""><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Kelas XI</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href=""><i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Basic">Kelas XII</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- MENU GUEST --}}
            @elseif(Auth::user()->role == 'Guest')
            <li class="nav-item {{ (request()->is('ppdb/form-pendaftaran')) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{route('ppdb.form-pendaftaran')}}"><i data-feather="book"></i>
                    <span class="menu-title text-truncate" data-i18n="Pendaftaran">Pendaftaran</span>
                </a>
            </li>

            {{-- MENU PPDB --}}
            @elseif(Auth::user()->role == 'PPDB')
            <li class="nav-item {{ (request()->is('ppdb/data-murid')) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{route('data-murid.index')}}"><i data-feather="book"></i>
                    <span class="menu-title text-truncate" data-i18n="Data Calon Murid">Data Calon Murid</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>