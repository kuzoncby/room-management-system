<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 5) as $floor) {
            foreach (range(1, 10) as $room) {
                DB::table('rooms')->insert([
                    'room' => 100 * $floor + $room,
                    'current_power' => random_int(10, 1000),
                    'total_power' => random_int(100, 1000),
                    'current_quota' => 999.99,
                    'total_quota' => 999.99,
                    'start_shift' => '04:00:00',
                    'end_shift' => '23:00:00'
                ]);
            }
        }
    }
}
