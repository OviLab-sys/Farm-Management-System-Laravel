<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropCategory extends Model
{
    protected $fillable = ['name'];

    public function crops()
    {
        return $this->hasMany(Crop::class);
    }
}
