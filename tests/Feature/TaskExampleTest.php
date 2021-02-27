<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskExampleTest extends TestCase
{
    protected $model = User::class;

    public function test_taskCreate()
    {
        $task = Task::factory()->create();
        //$user = $task->user;
        $task->description = "Hello IS373";
        $task -> save();
        //$user->save();
        $user = User::find(1); //find user where id = 1
        $user->name="Andy Marmolejos"; //finds user at id = 1 and change name
        $user->save(); //saves any changes made before this line of code
        $tasks = $user->task; //joins the user to task table and retrieves data from $user

        //$posts = $user->posts;
        dd($task);
        //dd($posts);

    }
}
