<?php

use Illuminate\Database\Seeder;

class ProductSaleInvoiceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_sale_invoice')->delete();
        
        \DB::table('product_sale_invoice')->insert(array (
            0 => 
            array (
                'id' => 316,
                'qte' => 2,
                'selling_price' => 123.0,
                'product_id' => 3,
                'invoice_id' => 33,
                'created_at' => '2019-01-03 10:35:52',
                'updated_at' => '2019-01-03 10:35:52',
            ),
            1 => 
            array (
                'id' => 315,
                'qte' => 1,
                'selling_price' => 12.0,
                'product_id' => 5,
                'invoice_id' => 32,
                'created_at' => '2019-01-03 10:09:23',
                'updated_at' => '2019-01-03 10:09:23',
            ),
            2 => 
            array (
                'id' => 314,
                'qte' => 2,
                'selling_price' => 1234.0,
                'product_id' => 4,
                'invoice_id' => 32,
                'created_at' => '2019-01-03 10:09:23',
                'updated_at' => '2019-01-03 10:09:23',
            ),
        ));
        
        
    }
}