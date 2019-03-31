<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::inRandomOrder()->first();
        //dd($user);
        $this->assertInternalType('int',$user->id);
        $this->assertInternalType('string' ,$user->email);
        $this->assertInstanceOf('App\User' ,$user);
        $this->assertInternalType('string' ,$user->name);
        $this->assertnotNull('string' ,$user->name);




    }
}
