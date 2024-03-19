<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//bo sung
use Faker\Factory as Faker;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Author::create([
                'ma_tgia' => $i + 1,
                'ten_tgia' => $faker->name(),
                'hinh_tgia' => $faker->imageUrl(360, 360, 'animals', true, 'cats')
            ]);
        }
    }
}
