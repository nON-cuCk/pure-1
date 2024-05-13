<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LocationList;
            // Add more sample data as needed php artisan db:seed --class=LocationSeed

class LocationSeed extends Seeder 
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocationList::create([
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => 'OFFICE OF THE CAS DEAN'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '106'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '105'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '104'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '107'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => 'MASS COM'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '108'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '109'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '110'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '103'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => 'OFFICE OF THE GOVERNOR CAS'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '102'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '111'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '112'],
            ['building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '101'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => '101'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '101'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => '101']
        ]);
        
    }
}
