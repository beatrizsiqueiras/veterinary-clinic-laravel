<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetOwner extends Model
{
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
