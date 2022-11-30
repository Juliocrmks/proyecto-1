<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $id;
    protected $casts =[
        'invoice_rows'
    ];
    protected $fillable = ['client_id','total','delivery_address'];
    protected $attributes = [
        'status_id' => 1,
        'invoice_rows' => 0,
        'transport' => null,
        'delivery' => null
    ];
}
