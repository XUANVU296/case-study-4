<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'quantity',
        'image',
        'status',
    ];
    public $timestamps = true;
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
