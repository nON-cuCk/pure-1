<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FireList;
use App\Models\LocationList;

class Insert extends Component
{
    public $fireId, $type, $firename, $serial_number, $building, $floor, $room, $installation_date, $expiration_date, $description, $status;

    public function updateFire($fields)
{
    $this->validateOnly($fields, [
        'type' => 'required',
        'firename' => 'required',
        'serial_number' => 'required|digits:7',
        'building' => 'required',
        'floor' => 'nullable',
        'room' => 'required',
        'installation_date' => 'required',
        'expiration_date' => 'required',
        'description' => 'nullable',
        'status' => 'nullable',
    ]);

}   
 public function createFire()
    {
        $fire = FireList::create([
            'type' => $this->type,
            'firename' => $this->firename,
            'serial_number' => $this->serial_number,
            'building' => $this->building,
            'floor' => $this->floor,
            'room' => $this->room,
            'installation_date' => $this->installation_date,
            'expiration_date' => $this->expiration_date,
            'description' => $this->description,
            'status' => $this->status,
        ]);

        $action = 'store';
        $message = 'Successfully Created';
    }


    public function render()
    {
        $fire = FireList::all();
        $locations = LocationList::all();

        return view('livewire.insert', [
            'fire' => $fire,
            'locations' => $locations,
        ]);
    }
}
