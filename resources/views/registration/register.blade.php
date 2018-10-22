@extends('layouts.master')

@section('content')
<h1>Registracija</h1>
<hr>
<form method="POST" action="/register">
	{{ csrf_field() }}
	<div class="form-group">
		<label id="name">Korisnicko ime</label>
		<input type="text" name="name" id="name" class="form-control">
	</div>
	<div class="form-group">
		<label id="email">Email</label>
		<input type="email" name="email" id="email" class="form-control">
	</div>
	<div class="form-group">
		<label id="password">Lozinka</label>
		<input type="password" name="password" id="password" class="form-control">
	</div>
	<div class="form-group">
		<label id="password_confirmation">Potvrda lozinke</label>
		<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Registracija</button>
	</div>

	@include('layouts.errors')

</form>

@endsection