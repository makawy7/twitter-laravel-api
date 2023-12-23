<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Tweet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Abdallah',
            'username' => 'mekki',
            'email' => 'abdallah@gmail.com',
            'password' => '7894561230'
        ]);

        User::factory(99)
            ->sequence(fn ($seq) => ['name' => 'Person ' . $seq->index + 2])
            ->create();

        foreach (range(1, 20) as $user1_id) {
            Tweet::factory()->create(['user_id' => $user1_id]);
            foreach (range(1, 20) as $user2_id) {
                User::find($user1_id)->follows()->attach(User::find($user2_id));
            }
        }
        foreach (range(21, 40) as $user1_id) {
            Tweet::factory()->create(['user_id' => $user1_id]);
            foreach (range(1, 20) as $user2_id) {
                User::find($user1_id)->follows()->attach(User::find($user2_id));
            }
        }
        foreach (range(41, 60) as $user1_id) {
            Tweet::factory()->create(['user_id' => $user1_id]);
            foreach (range(1, 20) as $user2_id) {
                User::find($user1_id)->follows()->attach(User::find($user2_id));
            }
        }
        foreach (range(61, 80) as $user1_id) {
            Tweet::factory()->create(['user_id' => $user1_id]);
            foreach (range(1, 20) as $user2_id) {
                User::find($user1_id)->follows()->attach(User::find($user2_id));
            }
        }
        foreach (range(81, 100) as $user1_id) {
            Tweet::factory()->create(['user_id' => $user1_id]);
            foreach (range(1, 20) as $user2_id) {
                User::find($user1_id)->follows()->attach(User::find($user2_id));
            }
        }
    }
}
