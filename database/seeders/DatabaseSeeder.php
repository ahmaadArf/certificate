<?php

namespace Database\Seeders;

use App\Models\Certificate;
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
        $this->call([
           StatusSeeder::class,
           CountrySeeder::class,
           BusinessTypeSeeder::class,
           CustomerTypeSeeder::class,
           PaymentTermsSeeder::class,
           FormSeeder::class,
            TaxSeeder::class,
            PlanSeeder::class,
            CategorySeeder::class,
            ElectricBoardSeeder::class,
           ]);

    //     Certificate::create([
    //       'id'=>1,
    //       'site_id'=>1,
    //       'data'=>'taif',
    //     ]);
    }
}
