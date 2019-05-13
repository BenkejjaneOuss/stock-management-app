<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        //$this->call(CategoryTableSeeder::class);
        //$this->call(ClientsTableSeeder::class);
        //$this->call(NumPhoneTableSeeder::class);
        //$this->call(OperatorTableSeeder::class);
        //$this->call(ProductsTableSeeder::class);
        //$this->call(ProductPurchaseTableSeeder::class);
        //$this->call(ProductSaleTableSeeder::class);
        //$this->call(RechargePurchaseTableSeeder::class);
        //$this->call(RechargeSaleTableSeeder::class);
        //$this->call(SuppliersTableSeeder::class);
        //$this->call(InvoiceTableSeeder::class);
        //$this->call(ProductSaleInvoiceTableSeeder::class);
    }
}
