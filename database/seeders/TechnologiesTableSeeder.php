<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'Laravel' => '#ff0000',
            'PHP' => '#6f81b6',
            'Javascript' => '#e9ca33',
            'HTML' => '#e44d27',
            'CSS' => '#0070ba',
            'Node.js' => '#84ce24',
            'React' => '#00d8fe',
            'Mysql' => '#e49000',
            'Express.js' => '#272727'
        ];


        foreach ($technologies as $key => $value) {
            $newTechnology = new Technology();

            $newTechnology->name = $key;
            $newTechnology->color = $value;

            $newTechnology->save();
        }
    }
}
