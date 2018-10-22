@extends('layouts.master')

@section('content')
	
	@include('posts.post')
	<hr>
	<h1>Komentari</h1>
	<hr>
	<form method="POST" action="/posts/{{$post->id}}/comments">
		{{ csrf_field() }}
		<div class="form-group">
			<textarea name="commentBody" placeholder="Napiši komentar" rows="3" class="form-control"></textarea>		
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Objavi komentar</button>
		</div>
	</form>	
	@include('layouts.errors')
	<hr>
	@foreach($post->comments as $comment)
	<div class="alert alert-info">
		{{$comment->body}}
	<hr>		
		{{$comment->created_at->diffForHumans()}}
	</div>
	@endforeach

@endsection