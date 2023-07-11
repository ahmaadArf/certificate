<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ElectricBoard;

class ElectricBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name' => 'ELECSA'],
            ['name' => 'STROMA'],
            ['name' => 'IET(Instituion of Engineering and Technology'],
            ['name' => 'JIB(Joint Industry Board)'],
            ['name' => 'SELECT(Scotland)'],
            ['name' => 'NAPIT'],
            ['name' => 'NICEIC'],
           
        ];
        foreach ($data as $key => $name) {
            ElectricBoard::create($name);
        }
    }
}
