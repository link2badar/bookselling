<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\factory::Create();

        for ($i=0; $i < 10; $i++) {
            Book::create([
                'name'              =>      $faker->sentence,
                'author'            =>      $faker->name,
                'publish_date'      =>      $faker->date;
            ]);
        }
    }
}
