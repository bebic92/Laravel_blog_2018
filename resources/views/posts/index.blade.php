@extends('layouts.master');

@section('content')
      @foreach($posts as $post)
        <div class="col-md-8 blog-main">
         
          @include('posts.post')

        </div>
      @endforeach
@endsection