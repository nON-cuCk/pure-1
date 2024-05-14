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
        $data = [
            //this is for CAS building Section
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
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Faculty Computing and Research Center'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Reading Area'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Internal Audit Office'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Information Technology Office'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'ITO Directors Office'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Library Storage Room'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Office of the Librarian'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Library Reading Area'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'reference and Periodicals Section'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Law Section'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Graduate School Section'],
            ['building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Library Books Section'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => 'CSIT Faculty Room'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '306'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '307 & 308'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '309'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '305'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '304'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '303'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '310'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '311'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => 'CAS English Faculty Room'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '301'],
            ['building' => 'CAS', 'floor' => 'Third Floor', 'room' => '302'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Library Multipurpose Reading Hall'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'TR1'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'TR2'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'TR3'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'CAS Multipurpose Reading Hall'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Computer Lab 1'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Computer Lab 2'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Conference Room'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Internet Research Center'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Control Room'],
            ['building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Media Center']
        ];
        foreach ($data as $item) {
            LocationList::create($item);
        }
    }
}
