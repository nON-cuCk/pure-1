<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireList extends Model
{
    protected $table = 'fire_lists';
    use HasFactory;
    protected $fillable = [
        'type', 'firename', 'serial_number', 'building', 'floor', 'room', 'installation_date', 'expiration_date', 'description', 'status',
    ];
    //this is for feching of data in the database "fire_list"
    public function firebuilding()
    {
        return $this->belongsTo(LocationList::class, 'building', 'id');
    }
    public function firefloor()
    {
        return $this->belongsTo(LocationList::class, 'floor', 'id');
    }
    public function fireroom()
    {
        return $this->belongsTo(LocationList::class, 'room', 'id');
    }



    // this is for other purposes
    public function fireLocation()
    {
        return $this->belongsTo(LocationList::class, 'building', 'floor', 'room', 'id');
    }

    public static function getFireNames()
    {
        return self::pluck('firename');
    }
    public function syncFire(array $fireCheck)
    {
        // Implement synchronization logic here
        // For example, you can update related records based on the provided $fireCheck array
    }
}
