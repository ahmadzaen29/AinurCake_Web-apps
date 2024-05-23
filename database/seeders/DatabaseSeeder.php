<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seeding for cake_shop_admin_registrations table
        DB::table('cake_shop_admin_registrations')->insert([
            'admin_username' => 'admin2',
            'admin_email' => 'ciocia0730@gmail.com',
            'admin_password' => Hash::make('12345'),
            'code' => 0,
            'profile_image' => ''
        ]);

        // Seeding for cake_shop_category table
        DB::table('cake_shop_category')->insert([

        ]);

        // Seeding for cake_shop_orders table
        DB::table('cake_shop_orders')->insert([
            // Add your orders data here
            // Example:
            // ['users_id' => 1, 'order_date' => '2024-05-01', 'delivery_date' => '2024-05-03', 'payment_method' => 'credit card', 'total_amount' => '100000', 'status' => 'pending']
        ]);

        // Seeding for cake_shop_orders_detail table
        DB::table('cake_shop_orders_detail')->insert([
            // Add your orders detail data here
            // Example:
            // ['orders_id' => 1, 'product_name' => 'Kue Basah', 'quantity' => 2]
        ]);

        // Seeding for cake_shop_product table
        DB::table('cake_shop_product')->insert([
            // Add your product data here
            // Example:
            // ['product_name' => 'Kue Basah', 'product_category' => 1, 'product_price' => '50000', 'unit' => 'pcs', 'product_description' => 'Delicious traditional cake', 'product_image' => 'kue_basah.jpg']
        ]);

        // Seeding for cake_shop_users_registrations table
        DB::table('cake_shop_users_registrations')->insert([
            // Add your users registrations data here
            // Example:
            // ['users_username' => 'user1', 'users_email' => 'user1@example.com', 'users_password' => Hash::make('password'), 'hint' => 'first pet', 'users_mobile' => '08123456789', 'users_address' => 'Jl. Sudirman No.1', 'code' => 12345]
        ]);

        // Seeding for catatan table
        DB::table('catatan')->insert([
            // Add your catatan data here
            // Example:
            // ['catatan' => 'First note']
        ]);

        // Seeding for pengeluaran table
        DB::table('pengeluaran')->insert([
            // Add your pengeluaran data here
            // Example:
            // ['tgl_pengeluaran' => '2024-05-01', 'jumlah' => 100000, 'id_sumber' => 1, 'deskripsi' => 'Operational cost']
        ]);

        // Seeding for sumber table
        DB::table('sumber')->insert([
            // Add your sumber data here
            // Example:
            // ['nama' => 'Bank']
        ]);
    }
}
