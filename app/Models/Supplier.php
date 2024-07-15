<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['stock_type', 'supplier_id', 'purchase_date', 'quantity', 'total_cost'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

}
