<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id','total','delivery_address','invoice_rows'];
    protected $attributes = [
        'status_id' => 1,
    ];
    
}
