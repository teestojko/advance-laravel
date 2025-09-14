<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ❶
        // $this->call(AuthorsTableSeeder::class);

        // ❷
        Author::factory(10)->create();
    }
}
