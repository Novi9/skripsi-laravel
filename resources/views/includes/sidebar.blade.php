<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard') }}">
                    <div class="brand-logo">
                        <img style="width: 45px;margin-left:-4px;" src="{{ url('logo_mahaddd.png')}}"> <span style="font-size: 18px">&nbsp;&nbsp;Abu Ubaidah</span>
                    </div>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>Menu</span>
            </li>
            @if(auth()->user()->jabatan == 'pelamar' || auth()->user()->jabatan == 'admin' || auth()->user()->jabatan == 'direktur')
                <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i><span class="menu-title">Beranda</span></a>
                </li>
            @endif
            @if( auth()->user()->jabatan == 'admin')
                <li class="nav-item {{ (request()->is('kriteria*')) ? 'active' : '' }}"><a href="{{ route('kriteria-index') }}"><i class="feather icon-file-text"></i><span class="menu-title">Data Kriteria</span></a>
                </li>
                <li class="nav-item {{ (request()->is('alternatif*')) ? 'active' : '' }}"><a href="{{ route('alternatif-index') }}"><i class="feather icon-users"></i><span class="menu-title">Data Alternatif</span></a>
                </li>
                <li class="nav-item {{ (request()->is('seleksi')) ? 'active' : '' }}"><a href="{{ route('seleksi-index') }}"><i class="feather icon-file-text"></i><span class="menu-title">Perhitungan Dan Seleksi</span></a>
                </li>
            @endif
            @if(auth()->user()->jabatan == 'pelamar')
                <li class="nav-item {{ (request()->is('alternatif-biodata*')) ? 'active' : '' }}"><a href="{{ route('alternatif-biodata') }}"><i class="feather icon-user"></i><span class="menu-title">Biodata</span></a>
                </li>
            @endif
            @if(auth()->user()->jabatan == 'pelamar' || auth()->user()->jabatan == 'admin')
                <li class="nav-item {{ auth()->user()->jabatan == 'pelamar' ? 'mb-1' : '' }} {{ (request()->is('informasi')) ? 'active' : '' }}"><a href="{{ route('informasi-index') }}"><i class="feather icon-file-text"></i><span class="menu-title">Informasi</span></a>
                </li>
            @endif
            @if(auth()->user()->jabatan == 'direktur' || auth()->user()->jabatan == 'admin')
                <li class="nav-item mb-1 {{ (request()->is('laporan')) ? 'active' : '' }}"><a href="{{ route('laporan-index') }}"><i class="feather icon-file-text"></i><span class="menu-title">Laporan</span></a>
                </li>
            @endif

            {{-- @if(auth()->user()->role == 'pic' || auth()->user()->role == 'mr' || auth()->user()->role == 'pp')
                <li class=" nav-item {{ (request()->is('permintaan*')) ? 'active' : '' }}"><a href="/permintaan"><i class="feather icon-file-text"></i><span class="menu-title">Permintaan</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('pengembalian*')) ? 'active' : '' }}"><a href="/pengembalian"><i class="feather icon-external-link"></i><span class="menu-title">Pengembalian</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('laporan*')) ? 'active' : '' }} mb-1"><a href="/laporan"><i class="feather icon-file-minus"></i><span class="menu-title">Laporan Rekap</span></a>
                </li>
            @endif
            @if(auth()->user()->role == 'spg')
                <li class=" nav-item {{ (request()->is('mr-spg')) ? 'active' : '' }}"><a href="/input-pengajuan"><i class="feather icon-user"></i><span class="menu-title">Input Pengajuan</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('permintaan*')) ? 'active' : '' }}"><a href="/permintaan"><i class="feather icon-file-text"></i><span class="menu-title">Permintaan</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('pengembalian*')) ? 'active' : '' }}"><a href="/pengembalian"><i class="feather icon-external-link"></i><span class="menu-title">Pengembalian</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('laporan*')) ? 'active' : '' }} mb-1"><a href="/laporan"><i class="feather icon-file-minus"></i><span class="menu-title">Laporan Rekap</span></a>
                </li>
            @endif
            @if(auth()->user()->role == 'admin')
                <li class=" nav-item {{ (request()->is('master')) ? 'active' : '' }}"><a href="/master"><i class="feather icon-package"></i><span class="menu-title">Master Barang</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('mr-spg')) ? 'active' : '' }}"><a href="/mr-spg"><i class="feather icon-user"></i><span class="menu-title">User</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('permintaan*')) ? 'active' : '' }}"><a href="/permintaan"><i class="feather icon-file-text"></i><span class="menu-title">Permintaan</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('pengembalian*')) ? 'active' : '' }}"><a href="/pengembalian"><i class="feather icon-external-link"></i><span class="menu-title">Pengembalian</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('laporan*')) ? 'active' : '' }} mb-1"><a href="/laporan"><i class="feather icon-file-minus"></i><span class="menu-title">Laporan Rekap</span></a>
                </li>
            @endif --}}
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
