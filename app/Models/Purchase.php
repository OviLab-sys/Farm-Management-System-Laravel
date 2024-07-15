<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['stock_type', 'supplier_id', 'purchase_date', 'quantity', 'total_cost'];
}
