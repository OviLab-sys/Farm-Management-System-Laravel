<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $fillable = ['name', 'crop_categories_id', 'planting_date', 'harvesting_date'];

    public function category()
    {
        return $this->belongsTo(CropCategory::class, 'crop_categories_id');
    }

    public function plantings()
    {
        return $this->hasMany(Planting::class);
    }

    public function storedCrops()
    {
        return $this->hasMany(StoredCrop::class);
    }
}
