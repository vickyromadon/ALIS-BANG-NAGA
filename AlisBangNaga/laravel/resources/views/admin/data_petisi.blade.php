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
                <h1 class="page-header">Data Petisi
                </h1>
            </div>
        </div>

        <div class="row">
        	<div class="col-lg-12 table-responsive">
        		@if (!$petisis->count())
                    <h1>Maaf, Data Petisi masih kosong.</h1>
				@else
                    <table class="table table-hover table-condensed">
                        <th>Judul Petisi</th>
                        <th>Nama Penulis</th>
                        <th>Waktu Publikasi</th>
                        <th>Waktu Edit</th>
                        <th>Kelola</th>
    					@foreach($petisis as $petisi)
    						<tr>
    							<td>{{ $petisi->judul }}</td>
                                <td>{{ $petisi->user->getNameOrUsername() }}</td>
                                <td>{{ $petisi->created_at->diffForHumans() }}</td>
                                <td>{{ $petisi->updated_at->diffForHumans() }}</td>
                                <td>
                                    <form action="/detail/{{ $petisi->id }}" method="post">                                  
                                        <a href="{{ route('petisi.detail', ['petisiID' => $petisi->id]) }}" target="_blank" style="text-decoration: none;">
                                            <button type="button" class="btn btn-info"><i class="fa fa-file fa-lg" aria-hidden="true"></i> Lihat</button>
                                        </a>
                                        <button class="btn btn-danger" type="submit" name="submit"><i class="fa fa-trash fa-lg" aria-hidden="true"></i> Delete</button>
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE"> 
                                    </form>
                                </td>
    						</tr>
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