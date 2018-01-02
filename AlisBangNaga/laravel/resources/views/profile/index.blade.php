@extends('templates.default')

@section('konten')

    <style>
        th{
            text-align: left;
        }
        th, td{
            padding: 5px;
        }
        .kanan{
            text-align: right;
        }

    </style>

    <div class="container">
        <h1 class="page-header">
            {{ $user->nama }} Profile
        </h1>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4" style="margin: 0 auto;text-align: center;">
                    <img src="{{ asset('image/profile/'.$user->gambar) }}" class="img-circle" width="200" height="200" style="border: 1px solid #000;"> <br><br>
                    @if (Auth::user()->id == $user->id)
                        <a href="{{ route('profile.editfoto', ['username' => Auth::user()->username]) }}">
                            <div class="btn-group btn btn-primary">
                                Update Foto Profile
                            </div>
                        </a>
                    @endif
                </div>
                
                <div class="col-md-6 table-responsive">
                    <table class="table-hover">
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $user->nama }}</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>:</td>
                            <td>{{ $user->nim }}</td>
                        </tr>
                        <tr>
                            <th>Jurusan</th>
                            <td>:</td>
                            <td>{{ $user->jurusan }}</td>
                        </tr>
                        <tr>
                            <th>Nama Perguruan Tinggi</th>
                            <td>:</td>
                            <td>{{ $user->namaPerguruanTinggi }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>{{ $user->jenisKelamin }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Tanggal Lahir</th>
                            <td>:</td>
                            <td>{{ $user->tempatTanggalLahir }}</td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>:</td>
                            <td>{{ $user->agama }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{ $user->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Provinsi</th>
                            <td>:</td>
                            <td>{{ $user->provinsi }}</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-2">
                    @if (Auth::user()->id == $user->id)
                        <div class="col-md-12">
                            <a href="{{ route('profile.edit', ['username' => Auth::user()->username]) }}">
                                <div class="btn-group btn btn-primary">
                                    <i class="fa fa-cog" aria-hidden="true"></i> Update
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <hr>
    </div>
@stop