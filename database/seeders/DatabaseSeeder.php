<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobilecompanies')->insert([
            ['name' => 'LG','service_id' => '19'],
            ['name' => 'ZTE','service_id' => '24'],
            ['name' => 'SONY','service_id' => '5'],
            ['name' => 'ACER','service_id' => '23'],
            ['name' => 'ASUS','service_id' => '34'],
            ['name' => 'OPPO','service_id' => '39'],
            ['name' => 'ITEL','service_id' => '45'],
            ['name' => 'NOKIA','service_id' => '2'],
            ['name' => 'SONIM','service_id' => '44'],
            ['name' => 'TECNO','service_id' => '45'],
            ['name' => 'HONOR','service_id' => '15'],
            ['name' => 'HUAWEI','service_id' => '15'],
            ['name' => 'LENOVO','service_id' => '22'],
            ['name' => 'SAMSUNG','service_id' => '1'],
            ['name' => 'DOOGEE','service_id' => '56'],

            
            ['name' => 'ALCATEL','service_id' => '17'],
            ['name' => 'ONEPLUS','service_id' => '36'],
            ['name' => 'KYOCERA','service_id' => '43'],
            ['name' => 'INFINIX','service_id' => '45'],
            ['name' => 'MOTOROLA','service_id' => '13'],
            ['name' => 'BLACKBERRY','service_id' => '14'],
            ['name' => 'GOOGLEPIXEL','service_id' => '42'],
            ['name' => 'XIAOMI','service_id' => '58'],
            

        ]);
    }
}
