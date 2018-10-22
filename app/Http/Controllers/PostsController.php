<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

	public function __construct(){

		$this->middleware('auth')->except(['index','show']);

	}
    
	public function index(){

		$posts = Post::latest()
		->filter(request(['month','year']))
		->get();

	
		return view('posts.index', compact('posts'));
	}

	public function create(){

		return view('posts.create');

	}

	public function store(){

		$this->validate(request(), [

			'postTitle' => 'required',
			
			'postBody' => 'required'

		]);

		Post::create([

			'user_id' => Auth::user()->id,

			'title'=> request('postTitle'), 

			'body'=>request('postBody')
		
		]);

		return redirect('/');

	}	

	public function show($id){

		$post = Post::find($id);
		
		return view('posts.show', compact('post'));
	}

	public function createComment(Post $post){


		$this->validate(request(), ['commentBody' => 'required|min:2']);

		$post->addComment(request('commentBody'));

		return redirect()->back();
	}
}
