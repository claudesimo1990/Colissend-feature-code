<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\TransportedObject;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $users = \App\Models\User::factory(10)->create([
            'password' => Hash::make('password')
        ]);

        $objects = TransportedObject::factory(4)->create();

        $users->each( function (User $user) use($objects) {
            Post::factory(4)->create([
                'user_id' => $user->id,
                'objects' => json_encode($objects)
            ]);
        });
    }
}
