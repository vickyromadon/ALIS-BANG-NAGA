@extends('templates.default')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Daftar Petisi
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                @if (!$petisis->count())
                    <h1>Maaf, judul yang anda cari tidak di temukan !</h1>
                @else
                    @foreach($petisis as $petisi)
                        <h2>{{ $petisi->judul }}</h2>
                        <p class="lead">
                            Di Tulis Oleh : <a href="{{ route('profile.index', ['username' => $petisi->user->username]) }}">{{ $petisi->user->getNameOrUsername() }}</a>
                        </p>
                        <p><i class="fa fa-clock-o fa-lg"></i> Posted on {{ $petisi->created_at->diffForHumans() }}</p>
                        
                        <img class="img-responsive img-hover" src="{{ asset('image/petisi/'.$petisi->gambar) }}" alt="" width="600" height="300">
                        
                        <font style="text-align: justify;">
                            <p>{!! substr($petisi->body,0,300) !!}...</p>
                        </font>

                        <a class="btn btn-primary" href="{{ route('petisi.detail', ['petisiID' => $petisi->id]) }}">Baca Selengkapnya</a>
                    @endforeach
                @endif
            </div>

            <div class="col-md-4">
                <div class="well">
                    <h4>Cari Petisi</h4>
                    <form class="input-group" role="search" action="{{ route('petisi.hasilcari') }}">
                        <input type="text" name="query" class="form-control" placeholder="Judul petisi">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                        </span>
                    </form>
                </div>
            </div>

            {{-- <div class="col-md-4">
                <div class="well">
                    <h3>Petisi Terbaru</h3>
                    @foreach($petisis as $petisi)    
                        <div class="list-group">
                            <a href="{{ route('petisi.detail', ['petisiID' => $petisi->id]) }}" class="list-group-item">{{ $petisi->judul }}</a>
                        </div>
                    @endforeach
                </div>
            </div> --}}

            {{-- <div class="col-md-4">
                <div class="well">
                    <h3>Petisi Terpopuler</h3>
                    @foreach($petisis as $petisi)    
                        <div class="list-group">
                            <a href="{{ route('petisi.detail', ['petisiID' => $petisi->id]) }}" class="list-group-item">{{ $petisi->judul }}</a>
                        </div>
                    @endforeach
                </div>
            </div> --}}
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            {!! $petisis->render() !!}
        </div>
    </div>
@stop