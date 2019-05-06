<?php

use Illuminate\Database\Seeder;

class OperatorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('operator')->delete();
        
        \DB::table('operator')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Orange',
                'archive' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Iam',
                'archive' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Inwi',
                'archive' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}