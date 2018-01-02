@extends('templates.default')

@section('konten')
	@if(!Auth::check())
		@include('templates.partials.header')
		@include('templates.partials.content')
		@include('templates.partials.sections')
	@else
		@if(Auth::user()->jabatan == 'ADMIN')
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h1 style="border-bottom: 2px solid #9d9d9d;">Dasboard</h1>
								<div class="panel-body">
									<h3 style="margin: 0;">Selamat Datang di Halaman Admin !</h3>
									<h4>Anda dapat melakukan manajemen data disini.</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		@else
			@include('templates.partials.header')
			@include('templates.partials.content')
			@include('templates.partials.sections')
		@endif
	@endif
@stop