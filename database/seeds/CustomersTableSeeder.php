<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new \App\Customer();
        $customer->name= 'Dung';
        $customer->phone= '0965279961';
        $customer->email= 'dungtran9@gmail.com';
        $customer->save();
        $customer = new \App\Customer();
        $customer->name= 'Thang';
        $customer->phone= '0983565898';
        $customer->email= 'thangbm@gmail.com';
        $customer->save();
    }
}
