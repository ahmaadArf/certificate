<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //    StatusSeeder::class,
        //    CountrySeeder::class,
        //    BusinessTypeSeeder::class,
        //    CustomerTypeSeeder::class,
        //    PaymentTermsSeeder::class,
        //    FormSeeder::class,
        //     TaxSeeder::class,
        //     PlanSeeder::class,
        //     CategorySeeder::class,
        //     ElectricBoardSeeder::class,
        //    ]);

        Customer::create([

          'name'=>'ahmed',
          'user_id'=>20
        ]);
    }
}
