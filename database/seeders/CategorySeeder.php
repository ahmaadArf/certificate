<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name' => 'Electrical Certificate'],
            ['name' => 'Gas Certificate'],
           
        ];
        foreach ($data as $key => $name) {
            Category::create($name);
        }
    }
}
