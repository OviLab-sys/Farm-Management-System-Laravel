<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $fillable = ['location', 'capacity'];

    public function storedCrops()
    {
        return $this->hasMany(StoredCrop::class);
    }
}
