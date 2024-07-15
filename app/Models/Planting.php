<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planting extends Model
{
    protected $fillable = ['crops_id', 'planting_date', 'expected_harvest_date', 'quantity_planted'];

    public function crop()
    {
        return $this->belongsTo(Crop::class, 'crops_id');
    }
}
