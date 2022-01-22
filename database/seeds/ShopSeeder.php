<?php

use Illuminate\Database\Seeder;

use App\Shop;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Shop::class)->create(['user_id'=>4]);
        factory(Shop::class)->create(['user_id'=>5]);
    }
}
