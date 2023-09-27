<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order_item;

class Order_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order_item = new Order_item();
        $order_item->order_id = 2;
        $order_item->product_id = 1;
        $order_item->quantity = 10;
        $order_item->unit_price = '20.560';
    }
}
