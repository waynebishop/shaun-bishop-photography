@extends('app')

@section('content')
	<div class="jumbotron col-sm-6 col-sm-push-3" style="margin-top: 5em">
		<h1>Login</h1>

		<form action="{{ url('user/do-login') }}" method="POST">
			
			<div class="form-group">
				<input type="text" name="email" id="email" placeholder="Enter your email address" class="form-control">
			</div>

			<div class="form-group">
				<input type="text" name="password" id="password" placeholder="Enter your secret password" class="form-control">
			</div>

			<div class="form-group">
				<input type="submit"  value="Login" name="login" id="login-btn" class="btn btn-primary">
			</div>				

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

		</form>

	</div>

@endsection