<?php

namespace Tests\Feature;

use App\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
            
        $first = factory(Post::class)->create();

        $second =  factory(Post::class)->create([

            'created_at' => Carbon::now()->subMonth()

        ]);


        $posts = Post::getArchives();


        $this->assertEquals([

            [
                'year' => $first->created_at->format('Y'),
                'month' => $first->created_at->format('F'),
                'published' => 1

            ],

            [
                'year' => $second->created_at->format('Y'),
                'month' => $second->created_at->format('F'),
                'published' => 1

            ]

        ], $posts);
    }
}
