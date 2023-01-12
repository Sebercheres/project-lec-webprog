<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name'=> 'Nature'
        ]);

        Type::create([
            'name'=> 'Humanity'
        ]);

        Type::create([
            'name'=> 'Disaster'
        ]);

        Type::create([
            'name'=> 'Education'
        ]);
    }
}
