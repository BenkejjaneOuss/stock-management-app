<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('suppliers')->delete();
        
        \DB::table('suppliers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '-',
                'email' => NULL,
                'phone' => NULL,
                'address' => NULL,
                'archive' => 0,
                'created_at' => '2018-10-25 00:15:39',
                'updated_at' => '2018-10-25 00:15:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mohamed Najib',
                'email' => NULL,
                'phone' => '06 66 66 66 66',
                'address' => 'meknes',
                'archive' => 0,
                'created_at' => '2018-10-25 01:22:51',
                'updated_at' => '2018-12-22 09:18:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Oussama Hamdani',
                'email' => NULL,
                'phone' => NULL,
                'address' => 'Rissani',
                'archive' => 0,
                'created_at' => '2018-10-25 01:43:59',
                'updated_at' => '2018-12-22 09:18:04',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mostapha Haji',
                'email' => NULL,
                'phone' => NULL,
                'address' => 'Meknès',
                'archive' => 0,
                'created_at' => '2018-10-25 01:44:24',
                'updated_at' => '2018-12-22 09:18:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Lahcen Haji',
                'email' => NULL,
                'phone' => NULL,
                'address' => 'Casablanca',
                'archive' => 0,
                'created_at' => '2018-10-25 01:44:52',
                'updated_at' => '2018-12-22 09:19:19',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Imane chdadi',
                'email' => NULL,
                'phone' => NULL,
                'address' => 'Rissani',
                'archive' => 0,
                'created_at' => '2018-10-25 01:45:39',
                'updated_at' => '2018-12-22 09:19:06',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Abderahim Faqir',
                'email' => NULL,
                'phone' => NULL,
                'address' => 'RISSANI',
                'archive' => 0,
                'created_at' => '2018-11-06 17:07:21',
                'updated_at' => '2018-12-22 09:19:33',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Amine Latifi',
                'email' => NULL,
                'phone' => '06 66 66 66 66',
                'address' => NULL,
                'archive' => 0,
                'created_at' => '2018-11-06 17:16:56',
                'updated_at' => '2018-12-22 09:19:57',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'JAAIDI',
                'email' => NULL,
                'phone' => NULL,
                'address' => NULL,
                'archive' => 0,
                'created_at' => '2018-11-13 12:48:14',
                'updated_at' => '2018-11-13 12:48:14',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'MOHAMED WELD LAAICH',
                'email' => NULL,
                'phone' => NULL,
                'address' => NULL,
                'archive' => 0,
                'created_at' => '2018-11-26 18:14:49',
                'updated_at' => '2018-11-26 18:14:49',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'MOSTAPHA',
                'email' => NULL,
                'phone' => NULL,
                'address' => NULL,
                'archive' => 1,
                'created_at' => '2018-11-28 16:12:48',
                'updated_at' => '2018-12-22 09:20:11',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'CASA',
                'email' => NULL,
                'phone' => NULL,
                'address' => NULL,
                'archive' => 1,
                'created_at' => '2018-12-20 18:25:28',
                'updated_at' => '2018-12-22 09:20:16',
            ),
        ));
        
        
    }
}