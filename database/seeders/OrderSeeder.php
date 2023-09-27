<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = new Order();
        $order->customer_id = 1;
        $order->order_date = date('Y-m-d', strtotime('27/03/2012'));
        $order->total_amount = '27.000';
        $order->save();
    }
}
