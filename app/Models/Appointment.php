<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['pet_id', 'date', 'type', 'remarks'];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
