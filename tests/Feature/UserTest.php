<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserRegi()
    {
        $user = new User;
        $user->name = 'テスト用DB2';
        $user->email = 'testdb2@example.com';
        $user->password = 'password';
        $usersave = $user->save();
        $this->assertTrue($usersave);
    }
}
