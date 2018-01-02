<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Yang Sedang Ramai di Alis Bang Naga</h2>
        </div>
        @foreach($petisis as $petisi)
            <div class="col-md-7">
                <hr>
                <img class="img-responsive img-hover" src="{{ asset('image/petisi/'.$petisi->gambar) }}" alt="" width="800" height="300">
                <br>
            </div>
            <div class="col-md-5">
                <hr>
                <h3>{{ $petisi->judul }}</h3>
                <h4>Di Tulis Oleh : <a href="{{ route('profile.index', ['username' => $petisi->user->username]) }}">{{ $petisi->user->getNameOrUsername() }}</a></h4>
                
                <p>{!! substr($petisi->body,0,300) !!} ...</p>    
                <br>
                <a class="btn btn-primary" href="{{ route('petisi.detail', ['petisiID' => $petisi->id]) }}">Baca Selengkapnya</i></a>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12">
            {!! $petisis->render() !!}
        </div>
    </div>
</div>