@extends('templates.default')

@section('konten')
    <style>
        th, td {
            text-align: center;
        }
    </style>

	<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Mahasiswa
                </h1>
            </div>
        </div>

        <div class="row">
        	<div class="col-lg-12 table-responsive">
        		@if (!$users->count())
                    <h1>Maaf, Data Mahasiswa masih kosong.</h1>
				@else
                    <table class="table table-hover table-condensed">
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th>Nama Perguruan Tinggi</th>
                        <th>Email</th>
                        <th>Waktu Daftar</th>
                        <th>Action</th>
                        @foreach($users as $user)
                            @if($user->jabatan != "ADMIN")
                                <tr>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->nim }}</td>
                                    <td>{{ $user->jurusan }}</td>
                                    <td>{{ $user->namaPerguruanTinggi }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <form>                                    
                                            <a href="{{ route('profile.index', ['username' => $user->username]) }}" target="_blank" style="text-decoration: none;">
                                                <button type="button" class="btn btn-info"><i class="fa fa-file fa-lg" aria-hidden="true"></i> Lihat</button>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
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