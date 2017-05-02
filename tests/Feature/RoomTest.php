<?php

namespace Tests\Feature;

use App\Room;
use App\User;
use Tests\TestCase;

class RoomTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users = User::all();
        $rooms = Room::all();
        foreach ($users as $user) {
            foreach ($rooms as $room) {
                $response = $this->actingAs($user)->get('/room/' . $room->room);
                $response->assertStatus(200);
            }
        }
    }
}
