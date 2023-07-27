<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'category_id',
        'unit_id',
        'product_code',
        'stock',
        'buying_price',
        'selling_price',
        'product_image',
    ];

    public function category() {
        return $this->belongsTo(Product::class);
    }

    public function unit() {
        return $this->belongsTo(Product::class);
    }
    
}