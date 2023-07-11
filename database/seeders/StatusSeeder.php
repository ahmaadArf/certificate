<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //To-do/In Progress/Completed/Failed/Part Complete
        $statuses = [
            ['name' => 'Pending'],
            ['name' => 'In Progress'],
            ['name' => 'Completed'],
            ['name' => 'Failed'],
            ['name' => 'Canceled'],
        ];
        foreach ($statuses as $key => $status) {
            Status::updateOrCreate(['name' => $status], $status);
        }

        //  Status::create([$status]);

    }
}
