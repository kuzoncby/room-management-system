<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users = User::all();
        foreach ($users as $user) {
            $response = $this->actingAs($user)->get('/user/' . $user->username);
            $response->assertStatus(200);
        }
    }
}
