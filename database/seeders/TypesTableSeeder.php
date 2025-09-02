<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Graphic Design',
            'Front-end Development',
            'Back-end Development',
            'Full-stack Development',
            'Wordpress',
        ];
        foreach ($types as $type) {
            $newType = new Type();

            $newType->name = $type;

            $newType->save();
        };
    }
}
