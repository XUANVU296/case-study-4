<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customer();
        $customer->name = 'Phú';
        $customer->email = 'phu123@gmail.com';
        $customer->phone = '0123456789';
        $customer->address = 'Cửa Tùng- Qủuảng Trị';
        $customer->save();
    }
}
