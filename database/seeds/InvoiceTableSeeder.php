<?php

use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('invoice')->delete();
        
        \DB::table('invoice')->insert(array (
            0 => 
            array (
                'id' => 33,
                'client_id' => 1,
                'created_at' => '2019-01-03 10:35:52',
                'updated_at' => '2019-01-03 10:35:52',
            ),
            1 => 
            array (
                'id' => 32,
                'client_id' => 1,
                'created_at' => '2019-01-03 10:09:23',
                'updated_at' => '2019-01-03 10:09:23',
            ),
        ));
        
        
    }
}