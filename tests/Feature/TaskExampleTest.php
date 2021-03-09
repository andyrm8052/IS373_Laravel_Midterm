<?php

namespace Tests\Feature;

use App\Models\Post;
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
        $task->description = "Hello IS373";
        $task -> save();
        $user = User::find(1); //find user where id = 1
        $user->name="Andy Marmolejos"; //finds user at id = 1 and change name
        $user->save(); //saves any changes made before this line of code

        //Retrieve the task by the given description if not found create a new task
        $task = Task::firstOrCreate([
            'description' => 'Hello IS373'
        ]);

        //Retrieves everything from the table task and echos the title
         foreach(Task::all() as $task){
             echo $task->description;
         }

        $user -> save();
        $tasks = $user->task; //joins the user to task table and retrieves data from $user
        dd($task);
    }
}
