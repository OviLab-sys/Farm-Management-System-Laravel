<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoredCrop extends Model
{
    protected $fillable = ['crops_id', 'quantity', 'storage_date', 'storage_id', 'harvest_id'];

    public function crop()
    {
        return $this->belongsTo(Crop::class, 'crops_id');
    }

    public function storage()
    {
        return $this->belongsTo(Storage::class, 'storage_id');
    }

    public function harvest()
    {
        return $this->belongsTo(Harvest::class, 'harvest_id');
    }

    public function sales()
    {
        return $this->hasMany(Sale::class, 'stored_crops_id');
    }

}
