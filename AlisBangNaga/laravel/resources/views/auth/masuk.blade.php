@extends('templates.default')

@section('konten')

<div class="container">
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >
                    <form class="form-horizontal" role="form" method="post" action="{{ route('auth.masuk') }}">
                        
                        <div class="form-group{{ $errors->has('username') ? 'has-error' : '' }}">
                            <div style="margin: 0px 10px;" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="username" class="form-control" id="username" placeholder="User Name" value="{{ Request::old('username') ? : '' }}">
                            </div>
                            @if($errors->has('username'))
                                <span class="help-block">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                            <div style="margin: 0px 10px;" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{ Request::old('password') ? : '' }}">
                            </div>
                            @if($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                                
                        <div class="form-group">
                          <div class="checkbox" style="margin: 0px 10px;">
                            <label>
                              <input type="checkbox" name="remember"> Remember me
                            </label>
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 controls">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid #888; padding-top:15px; font-size:85%" >
                                    Don't have an account ! 
                                    <a href="{{ route('auth.daftar') }}">Sign Up Here</a>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">  
                    </form>
                </div>                     
            </div>  
        </div>
    </div>
@stop