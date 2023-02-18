<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\tags;
use App\Models\User;
use App\Models\listings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // listings::factory(20)->create();
        $user = User::factory()->create([
            'name' => 'Phat',
            'email' => 'phat@gmail.com'
        ]);

        listings::factory(10)->create(['user_id'=>$user->id]);


        tags::create(
            ['tag' => 'travel',

            ]
        );
        tags::create(
            ['tag' => 'food',

            ]
        );
        tags::create(
            ['tag' => 'technology',

            ]
        );

        tags::create(
            ['tag' => 'health',

            ]
        );
        tags::create(
            ['tag' => 'natural',

            ]
        );
        tags::create(
            ['tag' => 'gym',

            ]
        );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
