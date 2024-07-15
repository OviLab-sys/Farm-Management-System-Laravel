<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesticideApplication extends Model
{
    protected $fillable = ['stock_id', 'application_date', 'quantity'];
}
