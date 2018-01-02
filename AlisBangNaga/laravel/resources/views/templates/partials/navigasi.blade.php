<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Alis Bang Naga</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    @if(Auth::user()->jabatan == 'USER')
                        <li><a href="{{ route('petisi.index') }}"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> Mulai Petisi</a></li>
                        <li><a href="{{ route('petisi.cari') }}"><i class="fa fa-search fa-lg" aria-hidden="true"></i> Cari Petisi</a></li>
                        <li><a href="{{ route('profile.cari') }}"><i class="fa fa-users fa-lg" aria-hidden="true"></i> Cari Mahasiswa</a></li>
                    @endif
                @endif

                @if (Auth::check())
                    @if(Auth::user()->jabatan == 'USER')
                        <li class="dropdwon">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-lg" aria-hidden=" true"></i> {{ Auth::user()->getNameOrUsername() }}<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}"><i class="fa fa-user-md fa-lg" aria-hidden="true"></i> Profile</a></li>
                                <li><a href="{{ route('petisi.daftar', ['username' => Auth::user()->username]) }}"><i class="fa fa-tasks fa-lg" aria-hidden="true"></i> Petisi Saya</a></li>
                                <li><a href="{{ route('auth.keluar') }}"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Keluar</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdwon">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-lg" aria-hidden=" true"></i> {{ Auth::user()->getNameOrUsername() }}<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('admin.data_petisi') }}"><i class="fa fa-tasks fa-lg" aria-hidden="true"></i> Data Petisi</a></li>
                                <li><a href="{{ route('admin.data_mahasiswa') }}"><i class="fa fa-users fa-lg" aria-hidden="true"></i> Data Mahasiswa</a></li>
                                <li><a href="{{ route('auth.keluar') }}"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Keluar</a></li>
                            </ul>
                        </li>
                    @endif
                @else
                    <li><a href="{{ route('auth.masuk') }}"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Masuk</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>