<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Autoelektrika']);
        Category::create(['name' => 'Automehanika']);
        Category::create(['name' => 'Vodoinstalacije']);
        Category::create(['name' => 'Elektrika']);
        Category::create(['name' => 'Keramičarski radovi']);
        Category::create(['name' => 'Moleraj']);
        Category::create(['name' => 'Parketarstvo']);
        Category::create(['name' => 'Popravka bele tehnike']);
        Category::create(['name' => 'Popravka računara']);
        Category::create(['name' => 'Popravka telefona']);
        Category::create(['name' => 'Stolarija']);
        Category::create(['name' => 'Zidarsvo']);
    }
}
