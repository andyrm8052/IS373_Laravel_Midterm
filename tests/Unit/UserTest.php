<?php

namespace Tests\Unit;

namespace Tests\TestCase;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {



public function  test_example()
{

    //creates three random users
    $user = User::factory()->count(1)->make();

    //finds one random user
    //$user = User::find(1);

    //finds user from name
    //$user -> name = "Andy";
    //dd($user);

    //creates 3 fake users
    //$user = User::factory()->make();

    $user->save();
    $this->assertEquals(3, 3);
    }
}
