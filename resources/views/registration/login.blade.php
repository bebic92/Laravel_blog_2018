@extends('layouts.master')

@section('content')
<h1>Prijava</h1>
<hr>
<form method="POST" action="/login">
	{{ csrf_field() }}
	<div class="form-group">
		<label id="email">Email</label>
		<input type="email" name="email" id="email" class="form-control">
	</div>
	<div class="form-group">
		<label id="password">Lozinka</label>
		<input type="password" name="password" id="password" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Prijava</button>
	</div>

	@include('layouts.errors')

</form>

@endsection