@extends('templates.default')

@section('konten')
	<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Petisi Mahasiswa
                    <small>Terbaru</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
        	<div class="col-md-12 img-portfolio">
       			@foreach($petisis as $petisi)
		            <div class="col-md-6 img-portfolio">
		                <h3>
		                    <a href="{{ route('petisi.detail', ['petisiID' => $petisi->id]) }}">{{ $petisi->judul }}</a>
		                </h3>
		                <p><i class="fa fa-clock-o fa-lg"></i> Posted on {{ $petisi->created_at->diffForHumans() }}</p>

                        <font style="text-align: justify;">
                            <p>{!! substr($petisi->body,0,300) !!}...</p>    
                        </font>
		            </div>
		        @endforeach
            </div>
        </div>

        <div class="rom">
            <div class="col-md-12">
                {!! $petisis->render() !!}
            </div>    
        </div>
    </div>
@stop
