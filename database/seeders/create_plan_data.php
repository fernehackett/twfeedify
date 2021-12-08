<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Osiset\ShopifyApp\Storage\Models\Plan;

class create_plan_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Plan::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Plan::create([
           "type" => "ONETIME",
            "name" => "Lifetime",
            "price" => 9.99,
            "test" => true,
            "on_install" => 1,
            "created_at" => null,
            "updated_at" => null
        ]);
    }
}
