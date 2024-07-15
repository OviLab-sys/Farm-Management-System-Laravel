<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['stored_crops_id', 'sales_date', 'quantity', 'price_per_unit', 'total_price', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function storedCrop()
    {
        return $this->belongsTo(StoredCrop::class, 'stored_crops_id');
    }
}
