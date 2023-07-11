<?php

namespace Database\Seeders;

use App\Models\BusinessType as ModelsBusinessType;
use Illuminate\Database\Seeder;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        Type of business
            Gas Engineer
            Electrician
            Plumber
            Other
        */

        
        $data = [
            ['name' => 'Gas Engineer'],
            ['name' => 'Electrician'],
            ['name' => 'Plumber'],
            ['name' => 'Other'],
        ];
        foreach ($data as $key => $name) {
            ModelsBusinessType::create($name);
        }
    }
}
