@extends('layouts.master')

@section('content')
<h1>Kreiraj novu objavu</h1>
<hr>
<form method="POST" action="/posts">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="postTitle">Naslov objave</label>
		<input type="text" class="form-control" name="postTitle" id="postTitle"">
	</div>
	<div class="form-group">
		<label for="postBody">Sadrzaj objave</label>
		<textarea name ="postBody" class="form-control" id="postBody" rows="4"></textarea>
	</div>

	<div class="form-group">
		
		<button type="submit" class="btn btn-primary">Objavi</button>
		
	</div>
	
	@include('layouts.errors')
</form>

@endsection