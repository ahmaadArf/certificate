<?php

namespace Database\Seeders;

use App\Models\PaymentTerm;
use Illuminate\Database\Seeder;

class PaymentTermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ['name' => 'Due On Receipt' , 'days' => 0 ],
            ['name' => 'Net 7 Days' , 'days' =>7 ],
            ['name' => 'Net 14 Days' , 'days' => 14 ],
            ['name' => ' Net 30 Days' , 'days' => 30],
            ['name' => 'Net 45 Days' , 'days' => 45 ],
            ['name' => 'Net 60 Days' , 'days' => 60],

        ];
        foreach ($data as $key => $type) {
            PaymentTerm::create($type);
        }
    }
}
