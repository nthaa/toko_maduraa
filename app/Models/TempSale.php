<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempSale extends Model
{
    /** @use HasFactory<\Database\Factories\TempSaleFactory> */
    use HasFactory;
    protected $fillable = ['nama', 'jumlah', 'harga', 'total'];
}
