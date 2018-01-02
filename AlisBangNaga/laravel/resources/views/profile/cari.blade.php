@extends('templates.default')

@section('konten')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Daftar Mahasiswa
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
            <div class="well">
                <h4>Cari Provinsi</h4>
                <form class="input-group" role="search" action="{{ route('profile.hasilcariprovinsi') }}">
                  <select class="form-control" name="provinsi">
                    <option value="-">-</option>
                    <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
                    <option value="Sumatra Utara">Sumatra Utara</option>
                    <option value="Sumatra Selatan">Sumatra Selatan</option>
                    <option value="Sumatra Barat">Sumatra Barat</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Riau">Riau</option>
                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                    <option value="Jambi">Jambi</option>
                    <option value="ampung">Lampung</option>
                    <option value="Bangka Belitung">Bangka Belitung</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                    <option value="Banten">Banten</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="DI Yogyakarta">Di Yogyakarta</option>
                    <option value="Bali">Bali</option>
                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                    <option value="Maluku">Maluku</option>
                    <option value="Maluku Utara">Maluku Utara</option>
                    <option value="Papua">Papua</option>
                    <option value="Papua Barat">Papuan Barat</option>
                  </select>
                
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                  </span>
                </form>
            </div>
        </div>

        <div class="col-md-6">
        <div class="well">
            <h4>Cari Mahasiswa</h4>
            <form class="input-group" role="search" action="{{ route('profile.hasilcari') }}">
                <input type="text" name="query" class="form-control" placeholder="Nama Mahasiswa">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                </span>
            </form>
        </div>
      </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 img-portfolio">
            @if (!$users->count())
              <h1>Maaf, Nama yang anda cari tidak di temukan !</h1>
            @else
              @foreach($users as $user)
                @if($user->jabatan != "ADMIN")
                  <div class="col-md-3 img-portfolio">
                      <a href="{{ route('profile.index', ['username' => $user->username]) }}">
                          <img  class="img-hover" src="{{ asset('image/profile/'.$user->gambar) }}" alt="" width="200" height="250" style="border: 1px solid #000;">
                      </a>
                      <h4>
                          <a href="{{ route('profile.index', ['username' => $user->username]) }}">{{ $user->nama }}</a><br>
                          <small>{{ $user->nim }}</small>
                      </h4>
                      <h4>{{ $user->jurusan }}</h4>
                      <h5>{{ $user->namaPerguruanTinggi }}</h5>
                  </div>
                @endif
              @endforeach
            @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        {!! $users->render() !!}
      </div>
    </div>
  </div>
@stop
