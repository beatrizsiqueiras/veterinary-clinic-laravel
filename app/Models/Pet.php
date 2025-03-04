<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function breed()
    {
        return $this->hasOne(Breed::class);
    }
}
