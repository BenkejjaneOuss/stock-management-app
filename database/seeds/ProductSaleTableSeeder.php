<?php

use Illuminate\Database\Seeder;

class ProductSaleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_sale')->delete();
        
        \DB::table('product_sale')->insert(array (
            0 => 
            array (
                'id' => 1,
                'qte' => 1,
                'selling_price' => 1950.0,
                'client_id' => 1,
                'product_id' => 27,
                'created_at' => '2018-10-26 16:11:23',
                'updated_at' => '2018-10-26 16:11:23',
            ),
            1 => 
            array (
                'id' => 2,
                'qte' => 1,
                'selling_price' => 1650.0,
                'client_id' => 1,
                'product_id' => 14,
                'created_at' => '2018-10-26 17:14:13',
                'updated_at' => '2018-10-26 17:14:13',
            ),
            2 => 
            array (
                'id' => 3,
                'qte' => 1,
                'selling_price' => 200.0,
                'client_id' => 1,
                'product_id' => 17,
                'created_at' => '2018-10-26 17:14:27',
                'updated_at' => '2018-10-26 17:14:27',
            ),
            3 => 
            array (
                'id' => 4,
                'qte' => 1,
                'selling_price' => 1050.0,
                'client_id' => 1,
                'product_id' => 23,
                'created_at' => '2018-10-26 19:55:39',
                'updated_at' => '2018-10-26 19:55:39',
            ),
            4 => 
            array (
                'id' => 8,
                'qte' => 1,
                'selling_price' => 265.0,
                'client_id' => 1,
                'product_id' => 18,
                'created_at' => '2018-11-01 11:21:10',
                'updated_at' => '2018-11-01 11:21:10',
            ),
            5 => 
            array (
                'id' => 7,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 50,
                'created_at' => '2018-10-30 19:03:06',
                'updated_at' => '2018-10-30 19:03:06',
            ),
            6 => 
            array (
                'id' => 9,
                'qte' => 1,
                'selling_price' => 1500.0,
                'client_id' => 1,
                'product_id' => 7,
                'created_at' => '2018-11-01 11:22:48',
                'updated_at' => '2018-11-01 11:22:48',
            ),
            7 => 
            array (
                'id' => 10,
                'qte' => 1,
                'selling_price' => 1145.0,
                'client_id' => 1,
                'product_id' => 9,
                'created_at' => '2018-11-01 11:25:45',
                'updated_at' => '2018-11-01 11:25:45',
            ),
            8 => 
            array (
                'id' => 11,
                'qte' => 1,
                'selling_price' => 1100.0,
                'client_id' => 1,
                'product_id' => 36,
                'created_at' => '2018-11-01 11:32:46',
                'updated_at' => '2018-11-01 11:32:46',
            ),
            9 => 
            array (
                'id' => 12,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 50,
                'created_at' => '2018-11-01 11:38:41',
                'updated_at' => '2018-11-01 11:38:41',
            ),
            10 => 
            array (
                'id' => 13,
                'qte' => 1,
                'selling_price' => 260.0,
                'client_id' => 1,
                'product_id' => 16,
                'created_at' => '2018-11-01 11:44:09',
                'updated_at' => '2018-11-01 11:44:09',
            ),
            11 => 
            array (
                'id' => 14,
                'qte' => 1,
                'selling_price' => 15.0,
                'client_id' => 1,
                'product_id' => 48,
                'created_at' => '2018-11-02 17:42:14',
                'updated_at' => '2018-11-02 17:42:14',
            ),
            12 => 
            array (
                'id' => 15,
                'qte' => 1,
                'selling_price' => 15.0,
                'client_id' => 1,
                'product_id' => 48,
                'created_at' => '2018-11-02 20:29:28',
                'updated_at' => '2018-11-02 20:29:28',
            ),
            13 => 
            array (
                'id' => 16,
                'qte' => 2,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-11-02 20:31:42',
                'updated_at' => '2018-11-02 20:31:42',
            ),
            14 => 
            array (
                'id' => 17,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 46,
                'created_at' => '2018-11-02 20:33:43',
                'updated_at' => '2018-11-02 20:33:43',
            ),
            15 => 
            array (
                'id' => 18,
                'qte' => 1,
                'selling_price' => 1060.0,
                'client_id' => 1,
                'product_id' => 49,
                'created_at' => '2018-11-02 20:38:21',
                'updated_at' => '2018-11-02 20:38:21',
            ),
            16 => 
            array (
                'id' => 19,
                'qte' => 1,
                'selling_price' => 50.0,
                'client_id' => 1,
                'product_id' => 35,
                'created_at' => '2018-11-04 15:39:36',
                'updated_at' => '2018-11-04 15:39:36',
            ),
            17 => 
            array (
                'id' => 20,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 46,
                'created_at' => '2018-11-06 19:23:17',
                'updated_at' => '2018-11-06 19:23:17',
            ),
            18 => 
            array (
                'id' => 21,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-11-06 19:30:02',
                'updated_at' => '2018-11-06 19:30:02',
            ),
            19 => 
            array (
                'id' => 22,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-11-06 19:33:27',
                'updated_at' => '2018-11-06 19:33:27',
            ),
            20 => 
            array (
                'id' => 23,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 83,
                'created_at' => '2018-11-06 19:34:07',
                'updated_at' => '2018-11-06 19:34:07',
            ),
            21 => 
            array (
                'id' => 24,
                'qte' => 1,
                'selling_price' => 1055.0,
                'client_id' => 1,
                'product_id' => 112,
                'created_at' => '2018-11-07 11:36:40',
                'updated_at' => '2018-11-07 11:36:40',
            ),
            22 => 
            array (
                'id' => 25,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 85,
                'created_at' => '2018-11-07 11:36:59',
                'updated_at' => '2018-11-07 11:36:59',
            ),
            23 => 
            array (
                'id' => 26,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-11-07 11:37:23',
                'updated_at' => '2018-11-07 11:37:23',
            ),
            24 => 
            array (
                'id' => 27,
                'qte' => 1,
                'selling_price' => 820.0,
                'client_id' => 1,
                'product_id' => 52,
                'created_at' => '2018-11-07 11:38:45',
                'updated_at' => '2018-11-07 11:38:45',
            ),
            25 => 
            array (
                'id' => 28,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 42,
                'created_at' => '2018-11-07 11:39:43',
                'updated_at' => '2018-11-07 11:39:43',
            ),
            26 => 
            array (
                'id' => 29,
                'qte' => 1,
                'selling_price' => 40.0,
                'client_id' => 1,
                'product_id' => 69,
                'created_at' => '2018-11-07 11:40:26',
                'updated_at' => '2018-11-07 11:40:26',
            ),
            27 => 
            array (
                'id' => 30,
                'qte' => 1,
                'selling_price' => 750.0,
                'client_id' => 1,
                'product_id' => 8,
                'created_at' => '2018-11-07 11:41:27',
                'updated_at' => '2018-11-07 11:41:27',
            ),
            28 => 
            array (
                'id' => 31,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-07 11:42:08',
                'updated_at' => '2018-11-07 11:42:08',
            ),
            29 => 
            array (
                'id' => 32,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 95,
                'created_at' => '2018-11-07 11:42:21',
                'updated_at' => '2018-11-07 11:42:21',
            ),
            30 => 
            array (
                'id' => 33,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 93,
                'created_at' => '2018-11-07 11:43:23',
                'updated_at' => '2018-11-07 11:43:23',
            ),
            31 => 
            array (
                'id' => 34,
                'qte' => 1,
                'selling_price' => 1120.0,
                'client_id' => 1,
                'product_id' => 9,
                'created_at' => '2018-11-07 15:30:06',
                'updated_at' => '2018-11-07 15:30:06',
            ),
            32 => 
            array (
                'id' => 35,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 46,
                'created_at' => '2018-11-07 15:31:34',
                'updated_at' => '2018-11-07 15:31:34',
            ),
            33 => 
            array (
                'id' => 36,
                'qte' => 1,
                'selling_price' => 15.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-07 15:32:12',
                'updated_at' => '2018-11-07 15:32:12',
            ),
            34 => 
            array (
                'id' => 37,
                'qte' => 1,
                'selling_price' => 920.0,
                'client_id' => 1,
                'product_id' => 56,
                'created_at' => '2018-11-07 15:35:48',
                'updated_at' => '2018-11-07 15:35:48',
            ),
            35 => 
            array (
                'id' => 38,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-07 15:36:18',
                'updated_at' => '2018-11-07 15:36:18',
            ),
            36 => 
            array (
                'id' => 39,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 81,
                'created_at' => '2018-11-07 15:38:02',
                'updated_at' => '2018-11-07 15:38:02',
            ),
            37 => 
            array (
                'id' => 40,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-11-08 10:48:23',
                'updated_at' => '2018-11-08 10:48:23',
            ),
            38 => 
            array (
                'id' => 41,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 98,
                'created_at' => '2018-11-08 10:48:42',
                'updated_at' => '2018-11-08 10:48:42',
            ),
            39 => 
            array (
                'id' => 42,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-08 10:48:55',
                'updated_at' => '2018-11-08 10:48:55',
            ),
            40 => 
            array (
                'id' => 43,
                'qte' => 1,
                'selling_price' => 140.0,
                'client_id' => 1,
                'product_id' => 19,
                'created_at' => '2018-11-09 16:18:59',
                'updated_at' => '2018-11-09 16:18:59',
            ),
            41 => 
            array (
                'id' => 44,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-10 10:34:48',
                'updated_at' => '2018-11-10 10:34:48',
            ),
            42 => 
            array (
                'id' => 45,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 91,
                'created_at' => '2018-11-10 10:35:25',
                'updated_at' => '2018-11-10 10:35:25',
            ),
            43 => 
            array (
                'id' => 46,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-10 10:36:18',
                'updated_at' => '2018-11-10 10:36:18',
            ),
            44 => 
            array (
                'id' => 47,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 104,
                'created_at' => '2018-11-10 10:36:38',
                'updated_at' => '2018-11-10 10:36:38',
            ),
            45 => 
            array (
                'id' => 48,
                'qte' => 1,
                'selling_price' => 130.0,
                'client_id' => 1,
                'product_id' => 107,
                'created_at' => '2018-11-10 10:38:51',
                'updated_at' => '2018-11-10 10:38:51',
            ),
            46 => 
            array (
                'id' => 49,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-11 11:35:11',
                'updated_at' => '2018-11-11 11:35:11',
            ),
            47 => 
            array (
                'id' => 50,
                'qte' => 1,
                'selling_price' => 8.0,
                'client_id' => 1,
                'product_id' => 42,
                'created_at' => '2018-11-11 11:36:14',
                'updated_at' => '2018-11-11 11:36:14',
            ),
            48 => 
            array (
                'id' => 51,
                'qte' => 1,
                'selling_price' => 17.0,
                'client_id' => 1,
                'product_id' => 46,
                'created_at' => '2018-11-11 11:36:35',
                'updated_at' => '2018-11-11 11:36:35',
            ),
            49 => 
            array (
                'id' => 52,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 38,
                'created_at' => '2018-11-11 11:38:28',
                'updated_at' => '2018-11-11 11:38:28',
            ),
            50 => 
            array (
                'id' => 53,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 98,
                'created_at' => '2018-11-11 11:39:13',
                'updated_at' => '2018-11-11 11:39:13',
            ),
            51 => 
            array (
                'id' => 54,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 90,
                'created_at' => '2018-11-11 11:39:39',
                'updated_at' => '2018-11-11 11:39:39',
            ),
            52 => 
            array (
                'id' => 55,
                'qte' => 1,
                'selling_price' => 1200.0,
                'client_id' => 1,
                'product_id' => 9,
                'created_at' => '2018-11-11 11:40:20',
                'updated_at' => '2018-11-11 11:40:20',
            ),
            53 => 
            array (
                'id' => 56,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 128,
                'created_at' => '2018-11-13 17:53:39',
                'updated_at' => '2018-11-13 17:53:39',
            ),
            54 => 
            array (
                'id' => 57,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 46,
                'created_at' => '2018-11-13 18:02:10',
                'updated_at' => '2018-11-13 18:02:10',
            ),
            55 => 
            array (
                'id' => 58,
                'qte' => 2,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-13 18:02:55',
                'updated_at' => '2018-11-13 18:02:55',
            ),
            56 => 
            array (
                'id' => 59,
                'qte' => 1,
                'selling_price' => 1195.0,
                'client_id' => 1,
                'product_id' => 1,
                'created_at' => '2018-11-13 18:03:55',
                'updated_at' => '2018-11-13 18:03:55',
            ),
            57 => 
            array (
                'id' => 60,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 38,
                'created_at' => '2018-11-13 18:05:00',
                'updated_at' => '2018-11-13 18:05:00',
            ),
            58 => 
            array (
                'id' => 61,
                'qte' => 1,
                'selling_price' => 120.0,
                'client_id' => 1,
                'product_id' => 107,
                'created_at' => '2018-11-13 18:05:43',
                'updated_at' => '2018-11-13 18:05:43',
            ),
            59 => 
            array (
                'id' => 62,
                'qte' => 1,
                'selling_price' => 170.0,
                'client_id' => 1,
                'product_id' => 150,
                'created_at' => '2018-11-13 18:07:02',
                'updated_at' => '2018-11-13 18:07:02',
            ),
            60 => 
            array (
                'id' => 63,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 105,
                'created_at' => '2018-11-13 18:08:03',
                'updated_at' => '2018-11-13 18:08:03',
            ),
            61 => 
            array (
                'id' => 64,
                'qte' => 1,
                'selling_price' => 60.0,
                'client_id' => 1,
                'product_id' => 59,
                'created_at' => '2018-11-13 18:08:53',
                'updated_at' => '2018-11-13 18:08:53',
            ),
            62 => 
            array (
                'id' => 65,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 96,
                'created_at' => '2018-11-13 18:09:44',
                'updated_at' => '2018-11-13 18:09:44',
            ),
            63 => 
            array (
                'id' => 66,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-11-13 18:10:31',
                'updated_at' => '2018-11-13 18:10:31',
            ),
            64 => 
            array (
                'id' => 67,
                'qte' => 1,
                'selling_price' => 130.0,
                'client_id' => 1,
                'product_id' => 152,
                'created_at' => '2018-11-13 18:10:53',
                'updated_at' => '2018-11-13 18:10:53',
            ),
            65 => 
            array (
                'id' => 68,
                'qte' => 1,
                'selling_price' => 2660.0,
                'client_id' => 1,
                'product_id' => 141,
                'created_at' => '2018-11-13 18:13:52',
                'updated_at' => '2018-11-13 18:13:52',
            ),
            66 => 
            array (
                'id' => 69,
                'qte' => 1,
                'selling_price' => 75.0,
                'client_id' => 1,
                'product_id' => 76,
                'created_at' => '2018-11-13 18:43:42',
                'updated_at' => '2018-11-13 18:43:42',
            ),
            67 => 
            array (
                'id' => 70,
                'qte' => 1,
                'selling_price' => 380.0,
                'client_id' => 1,
                'product_id' => 144,
                'created_at' => '2018-11-15 10:43:28',
                'updated_at' => '2018-11-15 10:43:28',
            ),
            68 => 
            array (
                'id' => 71,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-11-15 10:46:57',
                'updated_at' => '2018-11-15 10:46:57',
            ),
            69 => 
            array (
                'id' => 72,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 79,
                'created_at' => '2018-11-15 10:48:11',
                'updated_at' => '2018-11-15 10:48:11',
            ),
            70 => 
            array (
                'id' => 73,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 68,
                'created_at' => '2018-11-16 15:30:53',
                'updated_at' => '2018-11-16 15:30:53',
            ),
            71 => 
            array (
                'id' => 74,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-16 15:31:34',
                'updated_at' => '2018-11-16 15:31:34',
            ),
            72 => 
            array (
                'id' => 75,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 161,
                'created_at' => '2018-11-16 15:32:59',
                'updated_at' => '2018-11-16 15:32:59',
            ),
            73 => 
            array (
                'id' => 76,
                'qte' => 1,
                'selling_price' => 75.0,
                'client_id' => 1,
                'product_id' => 146,
                'created_at' => '2018-11-22 10:13:40',
                'updated_at' => '2018-11-22 10:13:40',
            ),
            74 => 
            array (
                'id' => 77,
                'qte' => 2,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 68,
                'created_at' => '2018-11-22 10:14:55',
                'updated_at' => '2018-11-22 10:14:55',
            ),
            75 => 
            array (
                'id' => 78,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-22 10:15:52',
                'updated_at' => '2018-11-22 10:15:52',
            ),
            76 => 
            array (
                'id' => 79,
                'qte' => 1,
                'selling_price' => 280.0,
                'client_id' => 1,
                'product_id' => 110,
                'created_at' => '2018-11-22 10:18:44',
                'updated_at' => '2018-11-22 10:18:44',
            ),
            77 => 
            array (
                'id' => 80,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 161,
                'created_at' => '2018-11-22 10:20:37',
                'updated_at' => '2018-11-22 10:20:37',
            ),
            78 => 
            array (
                'id' => 81,
                'qte' => 2,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-22 10:22:40',
                'updated_at' => '2018-11-22 10:22:40',
            ),
            79 => 
            array (
                'id' => 82,
                'qte' => 1,
                'selling_price' => 50.0,
                'client_id' => 1,
                'product_id' => 70,
                'created_at' => '2018-11-22 10:22:56',
                'updated_at' => '2018-11-22 10:22:56',
            ),
            80 => 
            array (
                'id' => 83,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-11-22 10:26:08',
                'updated_at' => '2018-11-22 10:26:08',
            ),
            81 => 
            array (
                'id' => 84,
                'qte' => 1,
                'selling_price' => 750.0,
                'client_id' => 1,
                'product_id' => 159,
                'created_at' => '2018-11-22 10:26:59',
                'updated_at' => '2018-11-22 10:26:59',
            ),
            82 => 
            array (
                'id' => 85,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 161,
                'created_at' => '2018-11-22 10:28:23',
                'updated_at' => '2018-11-22 10:28:23',
            ),
            83 => 
            array (
                'id' => 86,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-11-22 10:29:43',
                'updated_at' => '2018-11-22 10:29:43',
            ),
            84 => 
            array (
                'id' => 87,
                'qte' => 1,
                'selling_price' => 110.0,
                'client_id' => 1,
                'product_id' => 107,
                'created_at' => '2018-11-22 10:32:38',
                'updated_at' => '2018-11-22 10:32:38',
            ),
            85 => 
            array (
                'id' => 88,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-22 10:34:47',
                'updated_at' => '2018-11-22 10:34:47',
            ),
            86 => 
            array (
                'id' => 89,
                'qte' => 1,
                'selling_price' => 90.0,
                'client_id' => 1,
                'product_id' => 170,
                'created_at' => '2018-11-22 10:35:21',
                'updated_at' => '2018-11-22 10:35:21',
            ),
            87 => 
            array (
                'id' => 90,
                'qte' => 1,
                'selling_price' => 70.0,
                'client_id' => 1,
                'product_id' => 71,
                'created_at' => '2018-11-22 10:36:24',
                'updated_at' => '2018-11-22 10:36:24',
            ),
            88 => 
            array (
                'id' => 91,
                'qte' => 1,
                'selling_price' => 130.0,
                'client_id' => 1,
                'product_id' => 106,
                'created_at' => '2018-11-22 10:37:00',
                'updated_at' => '2018-11-22 10:37:00',
            ),
            89 => 
            array (
                'id' => 92,
                'qte' => 1,
                'selling_price' => 80.0,
                'client_id' => 1,
                'product_id' => 5,
                'created_at' => '2018-11-22 10:37:50',
                'updated_at' => '2018-11-22 10:37:50',
            ),
            90 => 
            array (
                'id' => 93,
                'qte' => 1,
                'selling_price' => 1075.0,
                'client_id' => 1,
                'product_id' => 132,
                'created_at' => '2018-11-22 10:39:47',
                'updated_at' => '2018-11-22 10:39:47',
            ),
            91 => 
            array (
                'id' => 94,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 147,
                'created_at' => '2018-11-22 10:41:10',
                'updated_at' => '2018-11-22 10:41:10',
            ),
            92 => 
            array (
                'id' => 95,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-11-22 10:41:25',
                'updated_at' => '2018-11-22 10:41:25',
            ),
            93 => 
            array (
                'id' => 96,
                'qte' => 1,
                'selling_price' => 1095.0,
                'client_id' => 1,
                'product_id' => 132,
                'created_at' => '2018-11-22 10:41:55',
                'updated_at' => '2018-11-22 10:41:55',
            ),
            94 => 
            array (
                'id' => 97,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 147,
                'created_at' => '2018-11-22 10:43:18',
                'updated_at' => '2018-11-22 10:43:18',
            ),
            95 => 
            array (
                'id' => 98,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-11-22 10:44:49',
                'updated_at' => '2018-11-22 10:44:49',
            ),
            96 => 
            array (
                'id' => 99,
                'qte' => 1,
                'selling_price' => 110.0,
                'client_id' => 1,
                'product_id' => 169,
                'created_at' => '2018-11-22 10:47:55',
                'updated_at' => '2018-11-22 10:47:55',
            ),
            97 => 
            array (
                'id' => 100,
                'qte' => 1,
                'selling_price' => 50.0,
                'client_id' => 1,
                'product_id' => 30,
                'created_at' => '2018-11-22 10:49:20',
                'updated_at' => '2018-11-22 10:49:20',
            ),
            98 => 
            array (
                'id' => 101,
                'qte' => 1,
                'selling_price' => 40.0,
                'client_id' => 1,
                'product_id' => 155,
                'created_at' => '2018-11-25 10:44:07',
                'updated_at' => '2018-11-25 10:44:07',
            ),
            99 => 
            array (
                'id' => 102,
                'qte' => 1,
                'selling_price' => 60.0,
                'client_id' => 1,
                'product_id' => 66,
                'created_at' => '2018-11-25 10:46:40',
                'updated_at' => '2018-11-25 10:46:40',
            ),
            100 => 
            array (
                'id' => 103,
                'qte' => 1,
                'selling_price' => 45.0,
                'client_id' => 1,
                'product_id' => 70,
                'created_at' => '2018-11-25 10:48:23',
                'updated_at' => '2018-11-25 10:48:23',
            ),
            101 => 
            array (
                'id' => 104,
                'qte' => 1,
                'selling_price' => 40.0,
                'client_id' => 1,
                'product_id' => 69,
                'created_at' => '2018-11-25 10:48:42',
                'updated_at' => '2018-11-25 10:48:42',
            ),
            102 => 
            array (
                'id' => 105,
                'qte' => 1,
                'selling_price' => 1800.0,
                'client_id' => 1,
                'product_id' => 140,
                'created_at' => '2018-11-25 10:49:50',
                'updated_at' => '2018-11-25 10:49:50',
            ),
            103 => 
            array (
                'id' => 106,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-11-25 10:51:14',
                'updated_at' => '2018-11-25 10:51:14',
            ),
            104 => 
            array (
                'id' => 107,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 39,
                'created_at' => '2018-11-25 10:52:57',
                'updated_at' => '2018-11-25 10:52:57',
            ),
            105 => 
            array (
                'id' => 108,
                'qte' => 1,
                'selling_price' => 50.0,
                'client_id' => 1,
                'product_id' => 173,
                'created_at' => '2018-11-25 10:55:07',
                'updated_at' => '2018-11-25 10:55:07',
            ),
            106 => 
            array (
                'id' => 109,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 87,
                'created_at' => '2018-11-25 10:57:00',
                'updated_at' => '2018-11-25 10:57:00',
            ),
            107 => 
            array (
                'id' => 110,
                'qte' => 1,
                'selling_price' => 1150.0,
                'client_id' => 1,
                'product_id' => 9,
                'created_at' => '2018-11-25 11:01:30',
                'updated_at' => '2018-11-25 11:01:30',
            ),
            108 => 
            array (
                'id' => 111,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 38,
                'created_at' => '2018-11-25 11:01:48',
                'updated_at' => '2018-11-25 11:01:48',
            ),
            109 => 
            array (
                'id' => 112,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 46,
                'created_at' => '2018-11-25 11:02:22',
                'updated_at' => '2018-11-25 11:02:22',
            ),
            110 => 
            array (
                'id' => 113,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 39,
                'created_at' => '2018-11-25 11:05:01',
                'updated_at' => '2018-11-25 11:05:01',
            ),
            111 => 
            array (
                'id' => 114,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-11-25 11:05:52',
                'updated_at' => '2018-11-25 11:05:52',
            ),
            112 => 
            array (
                'id' => 115,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-11-25 11:08:03',
                'updated_at' => '2018-11-25 11:08:03',
            ),
            113 => 
            array (
                'id' => 116,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 98,
                'created_at' => '2018-11-25 11:10:39',
                'updated_at' => '2018-11-25 11:10:39',
            ),
            114 => 
            array (
                'id' => 117,
                'qte' => 1,
                'selling_price' => 100.0,
                'client_id' => 1,
                'product_id' => 107,
                'created_at' => '2018-11-25 11:13:30',
                'updated_at' => '2018-11-25 11:13:30',
            ),
            115 => 
            array (
                'id' => 118,
                'qte' => 1,
                'selling_price' => 100.0,
                'client_id' => 1,
                'product_id' => 107,
                'created_at' => '2018-11-25 11:14:58',
                'updated_at' => '2018-11-25 11:14:58',
            ),
            116 => 
            array (
                'id' => 119,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 80,
                'created_at' => '2018-11-25 11:16:24',
                'updated_at' => '2018-11-25 11:16:24',
            ),
            117 => 
            array (
                'id' => 120,
                'qte' => 1,
                'selling_price' => 200.0,
                'client_id' => 1,
                'product_id' => 162,
                'created_at' => '2018-11-25 11:16:50',
                'updated_at' => '2018-11-25 11:16:50',
            ),
            118 => 
            array (
                'id' => 121,
                'qte' => 1,
                'selling_price' => 95.0,
                'client_id' => 1,
                'product_id' => 184,
                'created_at' => '2018-11-25 11:17:47',
                'updated_at' => '2018-11-25 11:17:47',
            ),
            119 => 
            array (
                'id' => 122,
                'qte' => 1,
                'selling_price' => 1420.0,
                'client_id' => 1,
                'product_id' => 157,
                'created_at' => '2018-11-25 11:18:26',
                'updated_at' => '2018-11-25 11:18:26',
            ),
            120 => 
            array (
                'id' => 123,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 38,
                'created_at' => '2018-11-25 11:19:10',
                'updated_at' => '2018-11-25 11:19:10',
            ),
            121 => 
            array (
                'id' => 124,
                'qte' => 1,
                'selling_price' => 700.0,
                'client_id' => 1,
                'product_id' => 57,
                'created_at' => '2018-11-25 11:21:06',
                'updated_at' => '2018-11-25 11:21:06',
            ),
            122 => 
            array (
                'id' => 125,
                'qte' => 1,
                'selling_price' => 22.0,
                'client_id' => 1,
                'product_id' => 95,
                'created_at' => '2018-11-25 11:21:54',
                'updated_at' => '2018-11-25 11:21:54',
            ),
            123 => 
            array (
                'id' => 126,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 92,
                'created_at' => '2018-11-25 11:22:54',
                'updated_at' => '2018-11-25 11:22:54',
            ),
            124 => 
            array (
                'id' => 127,
                'qte' => 1,
                'selling_price' => 600.0,
                'client_id' => 1,
                'product_id' => 6,
                'created_at' => '2018-11-27 11:21:02',
                'updated_at' => '2018-11-27 11:21:02',
            ),
            125 => 
            array (
                'id' => 128,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-27 11:46:03',
                'updated_at' => '2018-11-27 11:46:03',
            ),
            126 => 
            array (
                'id' => 129,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 81,
                'created_at' => '2018-11-27 11:46:49',
                'updated_at' => '2018-11-27 11:46:49',
            ),
            127 => 
            array (
                'id' => 130,
                'qte' => 1,
                'selling_price' => 95.0,
                'client_id' => 1,
                'product_id' => 5,
                'created_at' => '2018-11-27 12:15:56',
                'updated_at' => '2018-11-27 12:15:56',
            ),
            128 => 
            array (
                'id' => 131,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 93,
                'created_at' => '2018-11-27 13:00:13',
                'updated_at' => '2018-11-27 13:00:13',
            ),
            129 => 
            array (
                'id' => 132,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 42,
                'created_at' => '2018-11-27 13:00:27',
                'updated_at' => '2018-11-27 13:00:27',
            ),
            130 => 
            array (
                'id' => 133,
                'qte' => 1,
                'selling_price' => 170.0,
                'client_id' => 1,
                'product_id' => 109,
                'created_at' => '2018-11-27 13:31:20',
                'updated_at' => '2018-11-27 13:31:20',
            ),
            131 => 
            array (
                'id' => 134,
                'qte' => 1,
                'selling_price' => 150.0,
                'client_id' => 1,
                'product_id' => 29,
                'created_at' => '2018-11-27 13:32:22',
                'updated_at' => '2018-11-27 13:32:22',
            ),
            132 => 
            array (
                'id' => 135,
                'qte' => 1,
                'selling_price' => 1150.0,
                'client_id' => 1,
                'product_id' => 201,
                'created_at' => '2018-11-27 13:38:31',
                'updated_at' => '2018-11-27 13:38:31',
            ),
            133 => 
            array (
                'id' => 136,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 68,
                'created_at' => '2018-11-30 11:36:12',
                'updated_at' => '2018-11-30 11:36:12',
            ),
            134 => 
            array (
                'id' => 137,
                'qte' => 1,
                'selling_price' => 150.0,
                'client_id' => 1,
                'product_id' => 143,
                'created_at' => '2018-11-30 11:39:22',
                'updated_at' => '2018-11-30 11:39:22',
            ),
            135 => 
            array (
                'id' => 138,
                'qte' => 1,
                'selling_price' => 190.0,
                'client_id' => 1,
                'product_id' => 17,
                'created_at' => '2018-11-30 11:40:37',
                'updated_at' => '2018-11-30 11:40:37',
            ),
            136 => 
            array (
                'id' => 139,
                'qte' => 1,
                'selling_price' => 1460.0,
                'client_id' => 1,
                'product_id' => 7,
                'created_at' => '2018-11-30 11:41:20',
                'updated_at' => '2018-11-30 11:41:20',
            ),
            137 => 
            array (
                'id' => 140,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 176,
                'created_at' => '2018-11-30 11:42:01',
                'updated_at' => '2018-11-30 11:42:01',
            ),
            138 => 
            array (
                'id' => 141,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 46,
                'created_at' => '2018-11-30 15:34:40',
                'updated_at' => '2018-11-30 15:34:40',
            ),
            139 => 
            array (
                'id' => 142,
                'qte' => 3,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-30 15:36:36',
                'updated_at' => '2018-11-30 15:36:36',
            ),
            140 => 
            array (
                'id' => 143,
                'qte' => 1,
                'selling_price' => 55.0,
                'client_id' => 1,
                'product_id' => 156,
                'created_at' => '2018-11-30 15:38:35',
                'updated_at' => '2018-11-30 15:38:35',
            ),
            141 => 
            array (
                'id' => 144,
                'qte' => 1,
                'selling_price' => 8.0,
                'client_id' => 1,
                'product_id' => 176,
                'created_at' => '2018-11-30 15:41:43',
                'updated_at' => '2018-11-30 15:41:43',
            ),
            142 => 
            array (
                'id' => 145,
                'qte' => 1,
                'selling_price' => 52.0,
                'client_id' => 1,
                'product_id' => 178,
                'created_at' => '2018-11-30 15:42:59',
                'updated_at' => '2018-11-30 15:42:59',
            ),
            143 => 
            array (
                'id' => 146,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-11-30 15:43:15',
                'updated_at' => '2018-11-30 15:43:15',
            ),
            144 => 
            array (
                'id' => 147,
                'qte' => 1,
                'selling_price' => 3280.0,
                'client_id' => 1,
                'product_id' => 198,
                'created_at' => '2018-11-30 15:43:57',
                'updated_at' => '2018-11-30 15:43:57',
            ),
            145 => 
            array (
                'id' => 148,
                'qte' => 1,
                'selling_price' => 1120.0,
                'client_id' => 1,
                'product_id' => 199,
                'created_at' => '2018-11-30 15:45:07',
                'updated_at' => '2018-11-30 15:45:07',
            ),
            146 => 
            array (
                'id' => 149,
                'qte' => 1,
                'selling_price' => 150.0,
                'client_id' => 1,
                'product_id' => 167,
                'created_at' => '2018-11-30 15:46:01',
                'updated_at' => '2018-11-30 15:46:01',
            ),
            147 => 
            array (
                'id' => 150,
                'qte' => 1,
                'selling_price' => 6.0,
                'client_id' => 1,
                'product_id' => 175,
                'created_at' => '2018-11-30 15:48:19',
                'updated_at' => '2018-11-30 15:48:19',
            ),
            148 => 
            array (
                'id' => 151,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 83,
                'created_at' => '2018-11-30 15:49:14',
                'updated_at' => '2018-11-30 15:49:14',
            ),
            149 => 
            array (
                'id' => 152,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 90,
                'created_at' => '2018-11-30 15:50:05',
                'updated_at' => '2018-11-30 15:50:05',
            ),
            150 => 
            array (
                'id' => 153,
                'qte' => 1,
                'selling_price' => 35.0,
                'client_id' => 1,
                'product_id' => 208,
                'created_at' => '2018-11-30 15:52:31',
                'updated_at' => '2018-11-30 15:52:31',
            ),
            151 => 
            array (
                'id' => 154,
                'qte' => 1,
                'selling_price' => 6.0,
                'client_id' => 1,
                'product_id' => 175,
                'created_at' => '2018-11-30 15:53:12',
                'updated_at' => '2018-11-30 15:53:12',
            ),
            152 => 
            array (
                'id' => 155,
                'qte' => 1,
                'selling_price' => 40.0,
                'client_id' => 1,
                'product_id' => 208,
                'created_at' => '2018-11-30 15:54:08',
                'updated_at' => '2018-11-30 15:54:08',
            ),
            153 => 
            array (
                'id' => 156,
                'qte' => 1,
                'selling_price' => 250.0,
                'client_id' => 1,
                'product_id' => 16,
                'created_at' => '2018-11-30 15:54:32',
                'updated_at' => '2018-11-30 15:54:32',
            ),
            154 => 
            array (
                'id' => 157,
                'qte' => 1,
                'selling_price' => 280.0,
                'client_id' => 1,
                'product_id' => 18,
                'created_at' => '2018-11-30 15:55:35',
                'updated_at' => '2018-11-30 15:55:35',
            ),
            155 => 
            array (
                'id' => 158,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 161,
                'created_at' => '2018-11-30 15:56:17',
                'updated_at' => '2018-11-30 15:56:17',
            ),
            156 => 
            array (
                'id' => 159,
                'qte' => 10,
                'selling_price' => 1.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-11-30 15:58:36',
                'updated_at' => '2018-11-30 15:58:36',
            ),
            157 => 
            array (
                'id' => 160,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 42,
                'created_at' => '2018-11-30 15:59:09',
                'updated_at' => '2018-11-30 15:59:09',
            ),
            158 => 
            array (
                'id' => 161,
                'qte' => 1,
                'selling_price' => 740.0,
                'client_id' => 1,
                'product_id' => 195,
                'created_at' => '2018-11-30 16:00:02',
                'updated_at' => '2018-11-30 16:00:02',
            ),
            159 => 
            array (
                'id' => 162,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 42,
                'created_at' => '2018-11-30 16:00:15',
                'updated_at' => '2018-11-30 16:00:15',
            ),
            160 => 
            array (
                'id' => 163,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 91,
                'created_at' => '2018-11-30 16:00:29',
                'updated_at' => '2018-11-30 16:00:29',
            ),
            161 => 
            array (
                'id' => 164,
                'qte' => 1,
                'selling_price' => 1650.0,
                'client_id' => 1,
                'product_id' => 14,
                'created_at' => '2018-11-30 16:12:26',
                'updated_at' => '2018-11-30 16:12:26',
            ),
            162 => 
            array (
                'id' => 165,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 78,
                'created_at' => '2018-11-30 16:13:15',
                'updated_at' => '2018-11-30 16:13:15',
            ),
            163 => 
            array (
                'id' => 166,
                'qte' => 1,
                'selling_price' => 40.0,
                'client_id' => 1,
                'product_id' => 208,
                'created_at' => '2018-11-30 16:14:29',
                'updated_at' => '2018-11-30 16:14:29',
            ),
            164 => 
            array (
                'id' => 167,
                'qte' => 1,
                'selling_price' => 1080.0,
                'client_id' => 1,
                'product_id' => 199,
                'created_at' => '2018-12-01 12:43:02',
                'updated_at' => '2018-12-01 12:43:02',
            ),
            165 => 
            array (
                'id' => 168,
                'qte' => 1,
                'selling_price' => 85.0,
                'client_id' => 1,
                'product_id' => 204,
                'created_at' => '2018-12-02 10:46:05',
                'updated_at' => '2018-12-02 10:46:05',
            ),
            166 => 
            array (
                'id' => 169,
                'qte' => 1,
                'selling_price' => 1130.0,
                'client_id' => 1,
                'product_id' => 199,
                'created_at' => '2018-12-02 10:46:55',
                'updated_at' => '2018-12-02 10:46:55',
            ),
            167 => 
            array (
                'id' => 170,
                'qte' => 1,
                'selling_price' => 100.0,
                'client_id' => 1,
                'product_id' => 107,
                'created_at' => '2018-12-02 10:47:35',
                'updated_at' => '2018-12-02 10:47:35',
            ),
            168 => 
            array (
                'id' => 171,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-12-02 10:48:07',
                'updated_at' => '2018-12-02 10:48:07',
            ),
            169 => 
            array (
                'id' => 172,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 46,
                'created_at' => '2018-12-02 10:48:58',
                'updated_at' => '2018-12-02 10:48:58',
            ),
            170 => 
            array (
                'id' => 173,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-12-02 10:49:28',
                'updated_at' => '2018-12-02 10:49:28',
            ),
            171 => 
            array (
                'id' => 174,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 107,
                'created_at' => '2018-12-02 10:50:19',
                'updated_at' => '2018-12-02 10:50:19',
            ),
            172 => 
            array (
                'id' => 175,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 85,
                'created_at' => '2018-12-02 10:57:00',
                'updated_at' => '2018-12-02 10:57:00',
            ),
            173 => 
            array (
                'id' => 176,
                'qte' => 1,
                'selling_price' => 70.0,
                'client_id' => 1,
                'product_id' => 131,
                'created_at' => '2018-12-03 11:27:01',
                'updated_at' => '2018-12-03 11:27:01',
            ),
            174 => 
            array (
                'id' => 177,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-12-03 11:27:29',
                'updated_at' => '2018-12-03 11:27:29',
            ),
            175 => 
            array (
                'id' => 178,
                'qte' => 1,
                'selling_price' => 140.0,
                'client_id' => 1,
                'product_id' => 19,
                'created_at' => '2018-12-03 11:33:45',
                'updated_at' => '2018-12-03 11:33:45',
            ),
            176 => 
            array (
                'id' => 179,
                'qte' => 1,
                'selling_price' => 200.0,
                'client_id' => 1,
                'product_id' => 22,
                'created_at' => '2018-12-03 11:35:28',
                'updated_at' => '2018-12-03 11:35:28',
            ),
            177 => 
            array (
                'id' => 180,
                'qte' => 1,
                'selling_price' => 150.0,
                'client_id' => 1,
                'product_id' => 149,
                'created_at' => '2018-12-03 11:35:47',
                'updated_at' => '2018-12-03 11:35:47',
            ),
            178 => 
            array (
                'id' => 181,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-12-03 11:36:42',
                'updated_at' => '2018-12-03 11:36:42',
            ),
            179 => 
            array (
                'id' => 182,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 42,
                'created_at' => '2018-12-03 11:37:28',
                'updated_at' => '2018-12-03 11:37:28',
            ),
            180 => 
            array (
                'id' => 183,
                'qte' => 1,
                'selling_price' => 80.0,
                'client_id' => 1,
                'product_id' => 5,
                'created_at' => '2018-12-03 11:37:55',
                'updated_at' => '2018-12-03 11:37:55',
            ),
            181 => 
            array (
                'id' => 184,
                'qte' => 1,
                'selling_price' => 65.0,
                'client_id' => 1,
                'product_id' => 209,
                'created_at' => '2018-12-03 11:54:45',
                'updated_at' => '2018-12-03 11:54:45',
            ),
            182 => 
            array (
                'id' => 185,
                'qte' => 1,
                'selling_price' => 250.0,
                'client_id' => 1,
                'product_id' => 163,
                'created_at' => '2018-12-06 19:26:51',
                'updated_at' => '2018-12-06 19:26:51',
            ),
            183 => 
            array (
                'id' => 186,
                'qte' => 1,
                'selling_price' => 270.0,
                'client_id' => 1,
                'product_id' => 163,
                'created_at' => '2018-12-06 19:27:41',
                'updated_at' => '2018-12-06 19:27:41',
            ),
            184 => 
            array (
                'id' => 187,
                'qte' => 1,
                'selling_price' => 190.0,
                'client_id' => 1,
                'product_id' => 17,
                'created_at' => '2018-12-10 11:11:48',
                'updated_at' => '2018-12-10 11:11:48',
            ),
            185 => 
            array (
                'id' => 188,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 128,
                'created_at' => '2018-12-10 11:13:59',
                'updated_at' => '2018-12-10 11:13:59',
            ),
            186 => 
            array (
                'id' => 189,
                'qte' => 2,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-12-10 11:14:16',
                'updated_at' => '2018-12-10 11:14:16',
            ),
            187 => 
            array (
                'id' => 190,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 161,
                'created_at' => '2018-12-10 11:15:27',
                'updated_at' => '2018-12-10 11:15:27',
            ),
            188 => 
            array (
                'id' => 191,
                'qte' => 1,
                'selling_price' => 40.0,
                'client_id' => 1,
                'product_id' => 208,
                'created_at' => '2018-12-10 11:15:48',
                'updated_at' => '2018-12-10 11:15:48',
            ),
            189 => 
            array (
                'id' => 192,
                'qte' => 1,
                'selling_price' => 120.0,
                'client_id' => 1,
                'product_id' => 137,
                'created_at' => '2018-12-10 11:34:30',
                'updated_at' => '2018-12-10 11:34:30',
            ),
            190 => 
            array (
                'id' => 193,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-12-10 11:35:20',
                'updated_at' => '2018-12-10 11:35:20',
            ),
            191 => 
            array (
                'id' => 194,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-12-10 11:36:42',
                'updated_at' => '2018-12-10 11:36:42',
            ),
            192 => 
            array (
                'id' => 195,
                'qte' => 2,
                'selling_price' => 90.0,
                'client_id' => 1,
                'product_id' => 70,
                'created_at' => '2018-12-10 11:38:41',
                'updated_at' => '2018-12-10 11:38:41',
            ),
            193 => 
            array (
                'id' => 196,
                'qte' => 1,
                'selling_price' => 1420.0,
                'client_id' => 1,
                'product_id' => 210,
                'created_at' => '2018-12-10 11:41:08',
                'updated_at' => '2018-12-10 11:41:08',
            ),
            194 => 
            array (
                'id' => 197,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 142,
                'created_at' => '2018-12-10 11:41:39',
                'updated_at' => '2018-12-10 11:41:39',
            ),
            195 => 
            array (
                'id' => 198,
                'qte' => 1,
                'selling_price' => 1350.0,
                'client_id' => 1,
                'product_id' => 189,
                'created_at' => '2018-12-10 11:42:22',
                'updated_at' => '2018-12-10 11:42:22',
            ),
            196 => 
            array (
                'id' => 199,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-12-10 11:42:45',
                'updated_at' => '2018-12-10 11:42:45',
            ),
            197 => 
            array (
                'id' => 200,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-12-10 11:43:12',
                'updated_at' => '2018-12-10 11:43:12',
            ),
            198 => 
            array (
                'id' => 201,
                'qte' => 1,
                'selling_price' => 85.0,
                'client_id' => 1,
                'product_id' => 193,
                'created_at' => '2018-12-10 11:44:02',
                'updated_at' => '2018-12-10 11:44:02',
            ),
            199 => 
            array (
                'id' => 202,
                'qte' => 1,
                'selling_price' => 1620.0,
                'client_id' => 1,
                'product_id' => 211,
                'created_at' => '2018-12-10 11:44:35',
                'updated_at' => '2018-12-10 11:44:35',
            ),
            200 => 
            array (
                'id' => 203,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 38,
                'created_at' => '2018-12-10 11:45:31',
                'updated_at' => '2018-12-10 11:45:31',
            ),
            201 => 
            array (
                'id' => 204,
                'qte' => 1,
                'selling_price' => 980.0,
                'client_id' => 1,
                'product_id' => 132,
                'created_at' => '2018-12-10 11:46:14',
                'updated_at' => '2018-12-10 11:46:14',
            ),
            202 => 
            array (
                'id' => 205,
                'qte' => 1,
                'selling_price' => 60.0,
                'client_id' => 1,
                'product_id' => 154,
                'created_at' => '2018-12-10 11:47:52',
                'updated_at' => '2018-12-10 11:47:52',
            ),
            203 => 
            array (
                'id' => 206,
                'qte' => 1,
                'selling_price' => 270.0,
                'client_id' => 1,
                'product_id' => 214,
                'created_at' => '2018-12-10 12:00:18',
                'updated_at' => '2018-12-10 12:00:18',
            ),
            204 => 
            array (
                'id' => 207,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 161,
                'created_at' => '2018-12-10 12:05:21',
                'updated_at' => '2018-12-10 12:05:21',
            ),
            205 => 
            array (
                'id' => 208,
                'qte' => 1,
                'selling_price' => 150.0,
                'client_id' => 1,
                'product_id' => 149,
                'created_at' => '2018-12-10 12:07:22',
                'updated_at' => '2018-12-10 12:07:22',
            ),
            206 => 
            array (
                'id' => 209,
                'qte' => 1,
                'selling_price' => 80.0,
                'client_id' => 1,
                'product_id' => 72,
                'created_at' => '2018-12-10 12:09:09',
                'updated_at' => '2018-12-10 12:09:09',
            ),
            207 => 
            array (
                'id' => 210,
                'qte' => 1,
                'selling_price' => 1900.0,
                'client_id' => 1,
                'product_id' => 222,
                'created_at' => '2018-12-10 12:09:32',
                'updated_at' => '2018-12-10 12:09:32',
            ),
            208 => 
            array (
                'id' => 211,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 83,
                'created_at' => '2018-12-10 12:09:47',
                'updated_at' => '2018-12-10 12:09:47',
            ),
            209 => 
            array (
                'id' => 212,
                'qte' => 1,
                'selling_price' => 1330.0,
                'client_id' => 1,
                'product_id' => 157,
                'created_at' => '2018-12-11 17:09:34',
                'updated_at' => '2018-12-11 17:09:34',
            ),
            210 => 
            array (
                'id' => 213,
                'qte' => 1,
                'selling_price' => 1100.0,
                'client_id' => 1,
                'product_id' => 199,
                'created_at' => '2018-12-15 10:57:53',
                'updated_at' => '2018-12-15 10:57:53',
            ),
            211 => 
            array (
                'id' => 214,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 229,
                'created_at' => '2018-12-15 10:58:42',
                'updated_at' => '2018-12-15 10:58:42',
            ),
            212 => 
            array (
                'id' => 215,
                'qte' => 1,
                'selling_price' => 1370.0,
                'client_id' => 1,
                'product_id' => 210,
                'created_at' => '2018-12-15 11:34:12',
                'updated_at' => '2018-12-15 11:34:12',
            ),
            213 => 
            array (
                'id' => 216,
                'qte' => 1,
                'selling_price' => 1370.0,
                'client_id' => 1,
                'product_id' => 210,
                'created_at' => '2018-12-15 16:35:38',
                'updated_at' => '2018-12-15 16:35:38',
            ),
            214 => 
            array (
                'id' => 217,
                'qte' => 1,
                'selling_price' => 1600.0,
                'client_id' => 1,
                'product_id' => 233,
                'created_at' => '2018-12-15 16:36:04',
                'updated_at' => '2018-12-15 16:36:04',
            ),
            215 => 
            array (
                'id' => 218,
                'qte' => 1,
                'selling_price' => 50.0,
                'client_id' => 1,
                'product_id' => 30,
                'created_at' => '2018-12-15 16:37:34',
                'updated_at' => '2018-12-15 16:37:34',
            ),
            216 => 
            array (
                'id' => 219,
                'qte' => 2,
                'selling_price' => 120.0,
                'client_id' => 1,
                'product_id' => 60,
                'created_at' => '2018-12-15 16:41:33',
                'updated_at' => '2018-12-15 16:41:33',
            ),
            217 => 
            array (
                'id' => 220,
                'qte' => 1,
                'selling_price' => 1150.0,
                'client_id' => 1,
                'product_id' => 232,
                'created_at' => '2018-12-15 16:44:31',
                'updated_at' => '2018-12-15 16:44:31',
            ),
            218 => 
            array (
                'id' => 221,
                'qte' => 1,
                'selling_price' => 1100.0,
                'client_id' => 1,
                'product_id' => 132,
                'created_at' => '2018-12-15 16:45:25',
                'updated_at' => '2018-12-15 16:45:25',
            ),
            219 => 
            array (
                'id' => 222,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 38,
                'created_at' => '2018-12-15 16:50:11',
                'updated_at' => '2018-12-15 16:50:11',
            ),
            220 => 
            array (
                'id' => 223,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-12-15 16:51:52',
                'updated_at' => '2018-12-15 16:51:52',
            ),
            221 => 
            array (
                'id' => 224,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 46,
                'created_at' => '2018-12-15 16:53:02',
                'updated_at' => '2018-12-15 16:53:02',
            ),
            222 => 
            array (
                'id' => 225,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-12-15 16:53:47',
                'updated_at' => '2018-12-15 16:53:47',
            ),
            223 => 
            array (
                'id' => 226,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 98,
                'created_at' => '2018-12-15 16:55:01',
                'updated_at' => '2018-12-15 16:55:01',
            ),
            224 => 
            array (
                'id' => 227,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 68,
                'created_at' => '2018-12-15 16:57:30',
                'updated_at' => '2018-12-15 16:57:30',
            ),
            225 => 
            array (
                'id' => 228,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 97,
                'created_at' => '2018-12-15 16:58:01',
                'updated_at' => '2018-12-15 16:58:01',
            ),
            226 => 
            array (
                'id' => 229,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 240,
                'created_at' => '2018-12-15 16:59:23',
                'updated_at' => '2018-12-15 16:59:23',
            ),
            227 => 
            array (
                'id' => 230,
                'qte' => 1,
                'selling_price' => 750.0,
                'client_id' => 1,
                'product_id' => 8,
                'created_at' => '2018-12-15 17:03:16',
                'updated_at' => '2018-12-15 17:03:16',
            ),
            228 => 
            array (
                'id' => 231,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 58,
                'created_at' => '2018-12-15 17:03:44',
                'updated_at' => '2018-12-15 17:03:44',
            ),
            229 => 
            array (
                'id' => 232,
                'qte' => 1,
                'selling_price' => 35.0,
                'client_id' => 1,
                'product_id' => 208,
                'created_at' => '2018-12-17 17:57:26',
                'updated_at' => '2018-12-17 17:57:26',
            ),
            230 => 
            array (
                'id' => 233,
                'qte' => 1,
                'selling_price' => 175.0,
                'client_id' => 1,
                'product_id' => 220,
                'created_at' => '2018-12-18 11:15:35',
                'updated_at' => '2018-12-18 11:15:35',
            ),
            231 => 
            array (
                'id' => 234,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 42,
                'created_at' => '2018-12-19 10:31:42',
                'updated_at' => '2018-12-19 10:31:42',
            ),
            232 => 
            array (
                'id' => 235,
                'qte' => 1,
                'selling_price' => 5.0,
                'client_id' => 1,
                'product_id' => 175,
                'created_at' => '2018-12-19 10:32:21',
                'updated_at' => '2018-12-19 10:32:21',
            ),
            233 => 
            array (
                'id' => 236,
                'qte' => 1,
                'selling_price' => 15.0,
                'client_id' => 1,
                'product_id' => 176,
                'created_at' => '2018-12-19 10:33:05',
                'updated_at' => '2018-12-19 10:33:05',
            ),
            234 => 
            array (
                'id' => 237,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 78,
                'created_at' => '2018-12-19 10:34:28',
                'updated_at' => '2018-12-19 10:34:28',
            ),
            235 => 
            array (
                'id' => 238,
                'qte' => 1,
                'selling_price' => 1120.0,
                'client_id' => 1,
                'product_id' => 231,
                'created_at' => '2018-12-19 10:36:02',
                'updated_at' => '2018-12-19 10:36:02',
            ),
            236 => 
            array (
                'id' => 239,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 236,
                'created_at' => '2018-12-19 10:37:39',
                'updated_at' => '2018-12-19 10:37:39',
            ),
            237 => 
            array (
                'id' => 240,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 39,
                'created_at' => '2018-12-19 10:38:06',
                'updated_at' => '2018-12-19 10:38:06',
            ),
            238 => 
            array (
                'id' => 241,
                'qte' => 1,
                'selling_price' => 1000.0,
                'client_id' => 1,
                'product_id' => 239,
                'created_at' => '2018-12-20 11:01:08',
                'updated_at' => '2018-12-20 11:01:08',
            ),
            239 => 
            array (
                'id' => 242,
                'qte' => 1,
                'selling_price' => 30.0,
                'client_id' => 1,
                'product_id' => 234,
                'created_at' => '2018-12-20 11:02:40',
                'updated_at' => '2018-12-20 11:02:40',
            ),
            240 => 
            array (
                'id' => 243,
                'qte' => 1,
                'selling_price' => 885.0,
                'client_id' => 1,
                'product_id' => 225,
                'created_at' => '2018-12-20 11:04:48',
                'updated_at' => '2018-12-20 11:04:48',
            ),
            241 => 
            array (
                'id' => 244,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 40,
                'created_at' => '2018-12-20 11:05:47',
                'updated_at' => '2018-12-20 11:05:47',
            ),
            242 => 
            array (
                'id' => 245,
                'qte' => 1,
                'selling_price' => 25.0,
                'client_id' => 1,
                'product_id' => 161,
                'created_at' => '2018-12-20 11:07:10',
                'updated_at' => '2018-12-20 11:07:10',
            ),
            243 => 
            array (
                'id' => 246,
                'qte' => 1,
                'selling_price' => 85.0,
                'client_id' => 1,
                'product_id' => 193,
                'created_at' => '2018-12-20 11:08:39',
                'updated_at' => '2018-12-20 11:08:39',
            ),
            244 => 
            array (
                'id' => 247,
                'qte' => 1,
                'selling_price' => 65.0,
                'client_id' => 1,
                'product_id' => 178,
                'created_at' => '2018-12-20 11:09:31',
                'updated_at' => '2018-12-20 11:09:31',
            ),
            245 => 
            array (
                'id' => 248,
                'qte' => 1,
                'selling_price' => 1100.0,
                'client_id' => 1,
                'product_id' => 237,
                'created_at' => '2018-12-20 11:10:33',
                'updated_at' => '2018-12-20 11:10:33',
            ),
            246 => 
            array (
                'id' => 249,
                'qte' => 1,
                'selling_price' => 10.0,
                'client_id' => 1,
                'product_id' => 236,
                'created_at' => '2018-12-20 11:11:20',
                'updated_at' => '2018-12-20 11:11:20',
            ),
            247 => 
            array (
                'id' => 250,
                'qte' => 1,
                'selling_price' => 20.0,
                'client_id' => 1,
                'product_id' => 228,
                'created_at' => '2018-12-20 11:12:06',
                'updated_at' => '2018-12-20 11:12:06',
            ),
        ));
        
        
    }
}