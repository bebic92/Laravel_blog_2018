<?php

namespace App;

use App\Tag;
use Carbon\Carbon;


class Post extends Model
{
 	public function comments(){

 		return $this->hasMany(Comment::class);

 	}

 	public function user(){

 		Return $this->belongsTo(User::class);

 	}
 	
 	public function addComment($body){

 		$this->comments()->create(['body' => $body]);
 	
 	}

 	public function scopeFilter($query, $filter){

 		if($month = $filter['month']){

			$query->whereMonth('created_at', Carbon::parse($month)->month);

		}

		if($year = $filter['year']){

			$query->whereYear('created_at', $year);

		}

 	}

 	public static function getArchives(){

 		return static::selectRaw(
			'year(created_at) as year,
    		 monthname(created_at) as month,
			 count(*) as published')
		->groupBy('year', 'month')
		->orderByRaw('min(created_at) desc')
		->get()
		->toArray();

 	}


 	public function tags(){

 		return $this->belongsToMany(Tag::class);
 	
 	}

}
