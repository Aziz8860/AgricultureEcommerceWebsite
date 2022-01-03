<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Insectigone 1L',
                'price'=>'370.000',
                'category'=>'Insektisida',
                'description'=>'Insectigone adalah insektisida tahan lama yang digunakan untuk mengendalikan berbagai hama pada permukaan interior dan eksterior. Hama termasuk kecoa, kutu, laba-laba, semut, nyamuk, dan berbagai penggerek kayu dan hama karantina.',
                'gallery'=>'https://agrishop.com.au/wp-content/uploads/2021/05/insectigone1l.png',
            ],
        ]);
    }
}
