<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\Person;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_examplePerson()
    {
        $person = Person::factory()->create();
        $person->title = "Computer Science";
        $person->save();
        $user = User::find(1); //find user where id = 1
        $user->name = "Andy Marmolejos"; //finds user at id = 1 and change name
        $user->save(); //saves any changes made before this line of code
        $this->assertEquals("Andy Marmolejos", $user->name); //Make sure if name was change
        $persons = $user->$person; //joins the user to task table and retrieves data from $use
    }
}
