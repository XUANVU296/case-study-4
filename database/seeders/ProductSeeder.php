<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();
        $product->category_id = 1;
        $product->name = 'Trứng';
        $product->description = 'Trắng đẹp không có mùi cứt';
        $product->price = 2.500;
        $product->quantity = 25;
        $product->image = 'https://tennguoidepnhat.files.wordpress.com/2012/01/bc3a1c-he1bb93-141.jpg';
        $product->status = 'Chưa bán';
        $product->save();
    }
}
