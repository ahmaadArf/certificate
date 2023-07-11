<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Electrical Certificates',
                'stripe_plan' => 'price_1NK6xvIenO4vNmXthEtye3YW',
                'price' => 6.99,
                'interval'=>'monthly',

            ],
            [
                'name' => 'Electrical Certificates',
                'stripe_plan' => 'price_1NK6ptIenO4vNmXtvOYiObL7',
                'price' => 69.99,
                'interval'=>'yearly',

            ],
            [
                'name' => 'Gas',
                'stripe_plan' => 'price_1NKdKiIenO4vNmXtvVs2PsOC',
                'price' => 6.99,
                'interval'=>'monthly',

            ],
            [
                'name' => 'Gas',
                'stripe_plan' => 'price_1NKdLaIenO4vNmXtVIAf10qR',
                'price' =>69.99,
                'interval'=>'yearly',

            ],
            [
                'name' => 'Gas & Electric',
                'stripe_plan' => 'price_1NKdNmIenO4vNmXtqB7vHjsO',
                'price' =>10.49,
                'interval'=>'monthly',

            ],
            [
                'name' => 'Gas & Electric',
                'stripe_plan' => 'price_1NKdOTIenO4vNmXtZdqhH353',
                'price' =>125.88,
                'interval'=>'yearly',

            ],



        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
    }

