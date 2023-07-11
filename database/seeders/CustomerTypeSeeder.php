<?php

namespace Database\Seeders;

use App\Models\CustomerType;
use Illuminate\Database\Seeder;

class CustomerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ['name' => 'individual'],['name' => 'company'],

        ];
        foreach ($data as $key => $type) {
            CustomerType::create($type);
        }
    }
}
