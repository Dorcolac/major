<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create(['name' => 'Severno-Bački']);
        Area::create(['name' => 'Srednje-Banatski']);
        Area::create(['name' => 'Severno-Banatski']);
        Area::create(['name' => 'Južno-Banatski']);
        Area::create(['name' => 'Zapadno-Bački']);
        Area::create(['name' => 'Južno-Bački']);
        Area::create(['name' => 'Sremski']);
        Area::create(['name' => 'Mačvanski']);
        Area::create(['name' => 'Kolubarski']);
        Area::create(['name' => 'Podunavski']);
        Area::create(['name' => 'Braničevski']);
        Area::create(['name' => 'Šumadijski']);
        Area::create(['name' => 'Pomoravski']);
        Area::create(['name' => 'Borski']);
        Area::create(['name' => 'Zaječarski']);
        Area::create(['name' => 'Zlatiborski']);
        Area::create(['name' => 'Moravički']);
        Area::create(['name' => 'Raški']);
        Area::create(['name' => 'Rasinski']);
        Area::create(['name' => 'Nišavski']);
        Area::create(['name' => 'Toplički']);
        Area::create(['name' => 'Pirotski']);
        Area::create(['name' => 'Jablanički']);
        Area::create(['name' => 'Pčinjski']);
        Area::create(['name' => 'Kosovski']);
        Area::create(['name' => 'Pećki']);
        Area::create(['name' => 'Prizrenski']);
        Area::create(['name' => 'Kosovsko-Mitrovački']);
        Area::create(['name' => 'Kosovsko-Pomoravski']);
    }
}
