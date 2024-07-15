<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['name', 'quantity', 'stock_type', 'price', 'supplier_id'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function fertilizerApplications()
    {
        return $this->hasMany(FertilizerApplication::class);
    }

    public function pesticideApplications()
    {
        return $this->hasMany(PesticideApplication::class);
    }
}
