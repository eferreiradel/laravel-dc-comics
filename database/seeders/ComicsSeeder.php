<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/dc-comics.json'));
        $data = json_decode($json);

        foreach ($data as $comic) {
            DB::table('comics')->insert([
                'thumb' => $comic->thumb,
                'price' => $comic->price,
                'series' => $comic->series,
                'type' => $comic->type,
            ]);
        }

    }
}