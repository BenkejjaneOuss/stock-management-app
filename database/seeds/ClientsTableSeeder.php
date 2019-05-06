<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '-',
                'email' => NULL,
                'phone' => NULL,
                'address' => 'a',
                'archive' => 0,
                'created_at' => '2018-10-25 00:15:58',
                'updated_at' => '2018-10-25 00:15:58',
            ),
        ));
        
        
    }
}