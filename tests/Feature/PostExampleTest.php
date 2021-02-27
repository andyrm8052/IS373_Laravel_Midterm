<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_examplePost()
    {
        $post = Post::factory()->create();
        $post->title = "Hello IS373";
        $post -> save();
        $user = User::find(1); //find user where id = 1
        $user->name="Andy Marmolejos"; //finds user at id = 1 and change name
        $user->save(); //saves any changes made before this line of code
        $this->assertEquals("Andy Marmolejos", $user->name); //Make sure if name was change
        $posts = $user->$post; //joins the user to task table and retrieves data from $user
    }
}
