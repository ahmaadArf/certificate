<?php

namespace Database\Seeders;

use App\Models\TaxSetting;
use Illuminate\Database\Seeder;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        No TAX - 0%
        20 VAT- 20%
        */
        $data =[
            ['tax_name' => 'No TAX', 'tax_amount' => 0],
            ['tax_name' => '20 VAT', 'tax_amount' => 20]
        ];
        foreach ($data as $key => $name) {
            TaxSetting::create($name);
        }
    }
}
