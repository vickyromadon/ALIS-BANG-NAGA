@section('js')
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
            Update Profile
        </h1>
        <form class="form-horizontal" role="form" method="post" action="{{ route('profile.edit', ['username' => Auth::user()->username]) }}" enctype="multipart/form-data">
        <fieldset>
			
		<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
    		<label class="col-md-4 control-label" for="textinput">Nama</label>
    		<div class="col-md-4">
    			<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{ Request::old('nama') ?: Auth::user()->nama }}">
    		</div>
    		@if($errors->has('nama'))
    			<span class="help-block">{{ $errors->first('nama') }}</span>
    		@endif
    	</div>

    	<div class="form-group{{ $errors->has('jenisKelamin') ? 'has-error' : '' }}">
    		<label class="col-md-4 control-label" for="textinput">Jenis Kelamin</label>
    		<div class="col-md-4">
    			<input type="text" name="jenisKelamin" class="form-control" id="jenisKelamin" placeholder="Jenis Kelamin" value="{{ Request::old('jenisKelamin') ? : Auth::user()->jenisKelamin }}">
    		</div>
    		@if($errors->has('jenisKelamin'))
    			<span class="help-block">{{ $errors->first('jenisKelamin') }}</span>
    		@endif
    	</div>

    	<div class="form-group{{ $errors->has('tempatTanggalLahir') ? 'has-error' : '' }}">
    		<label class="col-md-4 control-label" for="textinput">Tempat Tanggal Lahir</label>
    		<div class="col-md-4">
    			<input type="text" name="tempatTanggalLahir" class="form-control" id="tempatTanggalLahir" placeholder="Tempat Tanggal Lahir" value="{{ Request::old('tempatTanggalLahir') ? : Auth::user()->tempatTanggalLahir }}">
    		</div>
    		@if($errors->has('tempatTanggalLahir'))
    			<span class="help-block">{{ $errors->first('tempatTanggalLahir') }}</span>
    		@endif
    	</div>

		<div class="form-group{{ $errors->has('agama') ? 'has-error' : '' }}">
    		<label class="col-md-4 control-label" for="textinput">Agama</label>
    		<div class="col-md-4">
    			<input type="text" name="agama" class="form-control" id="agama" placeholder="Agama" value="{{ Request::old('agama') ? : Auth::user()->agama }}">
    		</div>
    		@if($errors->has('agama'))
    			<span class="help-block">{{ $errors->first('agama') }}</span>
    		@endif
    	</div>

    	<div class="form-group{{ $errors->has('jurusan') ? 'has-error' : '' }}">
    		<label class="col-md-4 control-label" for="textinput">Jurusan</label>
    		<div class="col-md-4">
    			<input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan" value="{{ Request::old('jurusan') ? : Auth::user()->jurusan }}">
    		</div>
    		@if($errors->has('jurusan'))
    			<span class="help-block">{{ $errors->first('jurusan') }}</span>
    		@endif
    	</div>

    	<div class="form-group{{ $errors->has('alamat') ? 'has-error' : '' }}">
    		<label class="col-md-4 control-label" for="textinput">Alamat</label>
    		<div class="col-md-4">
    			<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="{{ Request::old('alamat') ? : Auth::user()->alamat }}">
    		</div>
    		@if($errors->has('alamat'))
    			<span class="help-block">{{ $errors->first('alamat') }}</span>
    		@endif
    	</div>


        <div class="form-group{{ $errors->has('provinsi') ? 'has-error' : '' }}">
            <label for="provinsi" class="col-md-4 control-label">Provinsi</label>
            <div class="col-md-4">
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
            </div>
        </div>	

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Update</button>
            <button type="reset" id="singlebutton" name="singlebutton" class="btn btn-primary">Reset</button>
          </div>
        </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}">  

        </fieldset>
        </form>
    </div>
@stop