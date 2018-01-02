@extends('templates.default')

@section('konten')

<div class="container">
	<div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                </div>  
                <div class="panel-body" >
                    <form class="form-horizontal" role="form" method="post" action="{{ route('auth.daftar') }}">
                    	<div class="form-group{{ $errors->has('username') ? 'has-error' : '' }}">
                    		<label for="username" class="col-md-3 control-label">User Name</label>
                    		<div class="col-md-9">
                    			<input type="text" name="username" class="form-control" id="username" placeholder="User Name" value="{{ Request::old('username') ? : '' }}">
                    		</div>
                    		@if($errors->has('username'))
                    			<span class="help-block">{{ $errors->first('username') }}</span>
                    		@endif
                    	</div>

                    	<div class="form-group{{ $errors->has('nim') ? 'has-error' : '' }}">
                    		<label for="nim" class="col-md-3 control-label">NIM</label>
                    		<div class="col-md-9">
                    			<input type="text" name="nim" class="form-control" id="nim" placeholder="NIM" value="{{ Request::old('nim') ? : '' }}">
                    		</div>
                    		@if($errors->has('nim'))
                    			<span class="help-block">{{ $errors->first('nim') }}</span>
                    		@endif
                    	</div>

                    	<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
                    		<label for="nama" class="col-md-3 control-label">Nama</label>
                    		<div class="col-md-9">
                    			<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{ Request::old('nama') ? : '' }}">
                    		</div>
                    		@if($errors->has('nama'))
                    			<span class="help-block">{{ $errors->first('nama') }}</span>
                    		@endif
                    	</div>
                            
                        <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                    		<label for="email" class="col-md-3 control-label">Email</label>
                    		<div class="col-md-9">
                    			<input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ Request::old('email') ? : '' }}">
                    		</div>
                    		@if($errors->has('email'))
                    			<span class="help-block">{{ $errors->first('email') }}</span>
                    		@endif
                    	</div>
    					
						<div class="form-group{{ $errors->has('namaPerguruanTinggi') ? 'has-error' : '' }}">
                    		<label for="namaPerguruanTinggi" class="col-md-3 control-label">Nama Perguruan Tinggi</label>
                    		<div class="col-md-9" style="margin-top: 20px;">
                    			<input type="text" name="namaPerguruanTinggi" class="form-control" id="namaPerguruanTinggi" placeholder="Nama Perguruan Tinggi" value="{{ Request::old('username') ? : '' }}">
                    		</div>
                    		@if($errors->has('namaPerguruanTinggi'))
                    			<span class="help-block">{{ $errors->first('namaPerguruanTinggi') }}</span>
                    		@endif
                    	</div>
						
						<div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                    		<label for="password" class="col-md-3 control-label">Password</label>
                    		<div class="col-md-9">
                    			<input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{ Request::old('password') ? : '' }}">
                    		</div>
                    		@if($errors->has('password'))
                    			<span class="help-block">{{ $errors->first('password') }}</span>
                    		@endif
                    	</div>
                        
                        <div class="form-group{{ $errors->has('jabatan') ? 'has-error' : '' }}">
                            <label for="jabatan" class="col-md-3 control-label">Privileges</label>
                            <div class="col-md-9">
                                <select class="form-control" name="jabatan">
                                    {{-- <option>-- Pilih Hak Akses --</option> --}}
                                    <option value="USER">USER</option>
                                    {{-- <option value="ADMIN">ADMIN</option> --}}
                                </select>
                            </div>
                        </div>

                        <div class="form-group">                                        
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Sign Up</button>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>
                 </div>
            </div>
         </div>
	</div>

@stop