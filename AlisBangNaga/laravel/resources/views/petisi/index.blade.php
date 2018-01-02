@section('js')
    <script>tinymce.init({ selector:'textarea' });</script>
    <script type="text/javascript">
          function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#showgambar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#inputgambar").change(function () {
            readURL(this);
        });
    </script>
@stop

@extends('templates.default')
@section('konten')

<div class="container">
    <h1 class="page-header">
        Tulis Petisi
    </h1>
    
    <form class="form-horizontal" role="form" method="post" action="{{ route('petisi.index') }}" enctype="multipart/form-data">
        <fieldset>
            <div class="form-group{{ $errors->has('judul') ? 'has-error' : '' }}">
                <div class="col-md-12">
                    <input type="textinput" name="judul" class="form-control" id="judul" placeholder="Judul Petisi" value="{{ Request::old('judul') ? : '' }}">
                </div>
                @if($errors->has('judul'))
                    <span class="help-block">{{ $errors->first('judul') }}</span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('body') ? 'has-error' : '' }}">
                <div class="col-md-12">
                    <textarea name="body" id="body" rows="10" value="{{ Request::old('body') ? : '' }}"></textarea>
                </div>
                @if($errors->has('body'))
                    <span class="help-block">{{ $errors->first('body') }}</span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('body') ? 'has-error' : '' }}">
                <div class="col-md-12">
                    <input type="file" name="gambar" class="input-file" id="inputgambar">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Publikasi Petisi</button>
                    <button type="reset" id="singlebutton" name="singlebutton" class="btn btn-primary">Reset</button>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </fieldset>
    </form>
</div>

@stop