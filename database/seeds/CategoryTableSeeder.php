<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '-',
                'archive' => 0,
                'created_at' => '2018-10-25 00:16:08',
                'updated_at' => '2018-10-25 00:16:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Téléphones',
                'archive' => 0,
                'created_at' => '2018-10-25 00:25:36',
                'updated_at' => '2018-10-25 00:25:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Cable V8',
                'archive' => 0,
                'created_at' => '2018-10-25 00:25:57',
                'updated_at' => '2018-10-25 00:25:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Cable Iphone',
                'archive' => 0,
                'created_at' => '2018-10-25 00:26:18',
                'updated_at' => '2018-10-25 00:26:18',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Cable Type-C',
                'archive' => 0,
                'created_at' => '2018-10-25 00:26:41',
                'updated_at' => '2018-10-25 00:26:41',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Cable VGA',
                'archive' => 0,
                'created_at' => '2018-10-25 00:29:39',
                'updated_at' => '2018-10-25 00:29:39',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Cable HDMI',
                'archive' => 0,
                'created_at' => '2018-10-25 00:30:13',
                'updated_at' => '2018-10-25 00:30:13',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Cable Modem',
                'archive' => 0,
                'created_at' => '2018-10-25 00:30:53',
                'updated_at' => '2018-10-25 00:30:53',
            ),
            8 => 
            array (
                'id' => 9,
            'name' => 'Cable RG45 (6)',
                'archive' => 0,
                'created_at' => '2018-10-25 00:31:17',
                'updated_at' => '2018-10-25 00:31:17',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Hofr',
                'archive' => 0,
                'created_at' => '2018-10-25 10:05:20',
                'updated_at' => '2018-10-25 10:05:20',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Chargeur Pc',
                'archive' => 0,
                'created_at' => '2018-10-25 10:06:32',
                'updated_at' => '2018-10-25 10:06:32',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'هاتف قديم',
                'archive' => 0,
                'created_at' => '2018-10-25 20:12:33',
                'updated_at' => '2018-10-25 20:12:33',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Clavier',
                'archive' => 1,
                'created_at' => '2018-10-29 17:15:06',
                'updated_at' => '2018-10-29 17:17:36',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Clavier',
                'archive' => 0,
                'created_at' => '2018-10-29 17:15:08',
                'updated_at' => '2018-10-29 17:15:08',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Incassable Telephone',
                'archive' => 0,
                'created_at' => '2018-10-30 13:24:21',
                'updated_at' => '2018-10-30 13:24:21',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'BOCHIT',
                'archive' => 0,
                'created_at' => '2018-10-30 17:26:56',
                'updated_at' => '2018-10-30 17:26:56',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Carte Mémoire',
                'archive' => 0,
                'created_at' => '2018-11-05 11:50:20',
                'updated_at' => '2018-11-05 11:50:20',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Clé Usb',
                'archive' => 0,
                'created_at' => '2018-11-05 16:23:30',
                'updated_at' => '2018-11-05 16:23:30',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Récepteur',
                'archive' => 0,
                'created_at' => '2018-11-06 16:52:44',
                'updated_at' => '2018-11-06 16:52:44',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'latifi arfod',
                'archive' => 1,
                'created_at' => '2018-11-06 17:13:31',
                'updated_at' => '2018-11-06 17:14:45',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'MANETTE',
                'archive' => 0,
                'created_at' => '2018-11-07 15:51:08',
                'updated_at' => '2018-11-07 15:51:08',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Cable',
                'archive' => 0,
                'created_at' => '2018-11-08 10:25:56',
                'updated_at' => '2018-11-08 10:25:56',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Chargeur Téléphone',
                'archive' => 0,
                'created_at' => '2018-11-08 19:04:51',
                'updated_at' => '2018-11-08 19:04:51',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'ROUTER 9DIM',
                'archive' => 0,
                'created_at' => '2018-11-11 11:15:51',
                'updated_at' => '2018-11-11 11:16:06',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'DISQUE DUR 9DIM',
                'archive' => 0,
                'created_at' => '2018-11-11 11:16:20',
                'updated_at' => '2018-11-11 11:16:20',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'ROUTER',
                'archive' => 1,
                'created_at' => '2018-11-11 11:16:26',
                'updated_at' => '2018-11-14 16:41:10',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'PANEL TV',
                'archive' => 0,
                'created_at' => '2018-11-11 12:18:14',
                'updated_at' => '2018-11-11 12:18:14',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Casque',
                'archive' => 0,
                'created_at' => '2018-11-13 12:45:45',
                'updated_at' => '2018-11-13 12:45:45',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'MINI SPEAKER',
                'archive' => 0,
                'created_at' => '2018-11-13 12:51:56',
                'updated_at' => '2018-11-13 12:51:56',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'KIT',
                'archive' => 0,
                'created_at' => '2018-11-13 12:56:34',
                'updated_at' => '2018-11-13 12:56:34',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Point D\'acces',
                'archive' => 0,
                'created_at' => '2018-11-14 16:32:07',
                'updated_at' => '2018-11-14 16:32:07',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Router',
                'archive' => 0,
                'created_at' => '2018-11-14 16:32:17',
                'updated_at' => '2018-11-14 16:32:17',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Switch',
                'archive' => 0,
                'created_at' => '2018-11-14 16:43:22',
                'updated_at' => '2018-11-14 16:43:22',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'MODIM 9DIM',
                'archive' => 0,
                'created_at' => '2018-11-14 18:44:29',
                'updated_at' => '2018-11-14 18:44:29',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Power Bank',
                'archive' => 0,
                'created_at' => '2018-11-17 10:37:14',
                'updated_at' => '2018-11-17 10:37:14',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Camera',
                'archive' => 0,
                'created_at' => '2018-11-17 10:43:50',
                'updated_at' => '2018-11-17 10:43:50',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Cable Récepteur',
                'archive' => 0,
                'created_at' => '2018-11-26 18:06:49',
                'updated_at' => '2018-11-26 18:06:49',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'RADIO',
                'archive' => 0,
                'created_at' => '2018-11-26 18:11:52',
                'updated_at' => '2018-11-26 18:11:52',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'BATTERY',
                'archive' => 0,
                'created_at' => '2018-11-28 16:25:20',
                'updated_at' => '2018-11-28 16:25:20',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'CARTABEL',
                'archive' => 0,
                'created_at' => '2018-12-05 15:13:14',
                'updated_at' => '2018-12-05 15:13:14',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'CABLE CONX',
                'archive' => 0,
                'created_at' => '2018-12-05 15:16:59',
                'updated_at' => '2018-12-05 15:16:59',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'IMPRIMENT',
                'archive' => 0,
                'created_at' => '2018-12-05 15:17:18',
                'updated_at' => '2018-12-05 15:17:18',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'LA SOURIS',
                'archive' => 0,
                'created_at' => '2018-12-20 18:23:22',
                'updated_at' => '2018-12-20 18:23:22',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'BAF PC',
                'archive' => 0,
                'created_at' => '2018-12-20 18:45:00',
                'updated_at' => '2018-12-20 18:45:00',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'POWER BANK',
                'archive' => 1,
                'created_at' => '2018-12-20 18:49:57',
                'updated_at' => '2018-12-20 18:53:12',
            ),
        ));
        
        
    }
}