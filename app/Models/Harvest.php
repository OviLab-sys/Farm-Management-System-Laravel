<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harvest extends Model
{
    protected $fillable = ['crop_id', 'harvest_date', 'quantity', 'quality'];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }
}
