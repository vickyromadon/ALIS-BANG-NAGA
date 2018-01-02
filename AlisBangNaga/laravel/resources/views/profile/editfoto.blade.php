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
            Update Foto Profile
        </h1>
        <form class="form-horizontal" role="form" method="post" action="{{ route('profile.editfoto', ['username' => Auth::user()->username]) }}" enctype="multipart/form-data">
	        <fieldset>
	         	<div class="form-group">
		    		<label class="col-md-4 control-label" for="filebutton">Masukkan Foto</label>
		    		<div class="col-md-4">
		    			<input type="file" name="gambar" class="input-file" id="inputgambar">
		    		</div>
		    	</div>	

		    	<div class="form-group">
		          	<label class="col-md-4 control-label" for="singlebutton"></label>
		          	<div class="col-md-4">
		            	<button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Update</button>
		         	</div>
		        </div>

		        <input type="hidden" name="_token" value="{{ Session::token() }}">
	        </fieldset>
        </form>
    </div>
@stop