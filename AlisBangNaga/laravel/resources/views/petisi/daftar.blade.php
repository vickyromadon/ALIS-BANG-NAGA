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
                <h1 class="page-header">Daftar Petisi {{ $user->nama }}
                </h1>
            </div>
        </div>

        <div class="row">
        	<div class="col-lg-12 table-resposive">                
        		@if (!$petisis->count())
                    <h1>No results found, sorry.</h1>
				@else
                    <table class="table table-hover table-condensed">
                        <th>Judul Petisi</th>
                        <th>Waktu Publikasi</th>
                        <th>Waktu Edit</th>
                        <th>Kelola</th>
    					@foreach($petisis as $petisi)
                            @if($petisi->user_id == Auth::user()->id)
        						<tr>
        							<td>{{ $petisi->judul }}</td>
                                    <td>{{ $petisi->created_at->diffForHumans() }}</td>
                                    <td>{{ $petisi->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <form action="/detail/{{ $petisi->id }}" method="post">                                  
                                            <a href="{{ route('petisi.detail', ['petisiID' => $petisi->id]) }}" target="_blank" style="text-decoration: none;">
                                                <button type="button" class="btn btn-info"><i class="fa fa-file fa-lg" aria-hidden="true"></i> Lihat</button>
                                            </a>
                                                <a href="{{ route('petisi.edit', ['id' => $petisi->id]) }}" style="text-decoration: none;">
                                                    <div class="btn btn-warning">
                                                        <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> Ubah
                                                    </div>
                                                </a>

                                            <button class="btn btn-danger" type="submit" name="submit"><i class="fa fa-trash fa-lg" aria-hidden="true"></i> Hapus</button>
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            {{ csrf_field() }}
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
                {!! $petisis->render() !!}
            </div>
        </div>
    </div>
@stop