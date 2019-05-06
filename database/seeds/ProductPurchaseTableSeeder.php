<?php

use Illuminate\Database\Seeder;

class ProductPurchaseTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_purchase')->delete();
        
        \DB::table('product_purchase')->insert(array (
            0 => 
            array (
                'id' => 1,
                'qte' => 1,
                'purchasing_price' => 1120.0,
                'product_id' => 1,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 01:23:31',
                'updated_at' => '2018-10-25 01:23:31',
            ),
            1 => 
            array (
                'id' => 2,
                'qte' => 1,
                'purchasing_price' => 1600.0,
                'product_id' => 2,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 01:41:24',
                'updated_at' => '2018-10-25 01:41:24',
            ),
            2 => 
            array (
                'id' => 3,
                'qte' => 4,
                'purchasing_price' => 65.0,
                'product_id' => 3,
                'supplier_id' => 4,
                'created_at' => '2018-10-25 10:08:14',
                'updated_at' => '2018-10-25 10:08:14',
            ),
            3 => 
            array (
                'id' => 4,
                'qte' => 3,
                'purchasing_price' => 65.0,
                'product_id' => 4,
                'supplier_id' => 4,
                'created_at' => '2018-10-25 10:11:55',
                'updated_at' => '2018-10-25 10:11:55',
            ),
            4 => 
            array (
                'id' => 5,
                'qte' => 5,
                'purchasing_price' => 65.0,
                'product_id' => 5,
                'supplier_id' => 4,
                'created_at' => '2018-10-25 10:13:22',
                'updated_at' => '2018-10-25 10:13:22',
            ),
            5 => 
            array (
                'id' => 6,
                'qte' => 1,
                'purchasing_price' => 425.0,
                'product_id' => 6,
                'supplier_id' => 1,
                'created_at' => '2018-10-25 20:15:02',
                'updated_at' => '2018-10-25 20:15:02',
            ),
            6 => 
            array (
                'id' => 7,
                'qte' => 1,
                'purchasing_price' => 1380.0,
                'product_id' => 7,
                'supplier_id' => 3,
                'created_at' => '2018-10-25 20:22:21',
                'updated_at' => '2018-10-25 20:22:21',
            ),
            7 => 
            array (
                'id' => 8,
                'qte' => 2,
                'purchasing_price' => 500.0,
                'product_id' => 8,
                'supplier_id' => 1,
                'created_at' => '2018-10-25 20:24:35',
                'updated_at' => '2018-10-25 20:24:35',
            ),
            8 => 
            array (
                'id' => 9,
                'qte' => 2,
                'purchasing_price' => 1045.0,
                'product_id' => 9,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 20:26:54',
                'updated_at' => '2018-10-25 20:26:54',
            ),
            9 => 
            array (
                'id' => 10,
                'qte' => 1,
                'purchasing_price' => 1690.0,
                'product_id' => 10,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 20:28:08',
                'updated_at' => '2018-10-25 20:28:08',
            ),
            10 => 
            array (
                'id' => 11,
                'qte' => 1,
                'purchasing_price' => 645.0,
                'product_id' => 11,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 20:30:43',
                'updated_at' => '2018-10-25 20:30:43',
            ),
            11 => 
            array (
                'id' => 12,
                'qte' => 1,
                'purchasing_price' => 1390.0,
                'product_id' => 12,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 20:33:58',
                'updated_at' => '2018-10-25 20:33:58',
            ),
            12 => 
            array (
                'id' => 13,
                'qte' => 1,
                'purchasing_price' => 1300.0,
                'product_id' => 13,
                'supplier_id' => 1,
                'created_at' => '2018-10-25 20:38:02',
                'updated_at' => '2018-10-25 20:38:02',
            ),
            13 => 
            array (
                'id' => 14,
                'qte' => 1,
                'purchasing_price' => 1550.0,
                'product_id' => 14,
                'supplier_id' => 1,
                'created_at' => '2018-10-25 20:41:55',
                'updated_at' => '2018-10-25 20:41:55',
            ),
            14 => 
            array (
                'id' => 15,
                'qte' => 1,
                'purchasing_price' => 1190.0,
                'product_id' => 15,
                'supplier_id' => 3,
                'created_at' => '2018-10-25 20:43:51',
                'updated_at' => '2018-10-25 20:43:51',
            ),
            15 => 
            array (
                'id' => 16,
                'qte' => 5,
                'purchasing_price' => 225.0,
                'product_id' => 16,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 20:46:46',
                'updated_at' => '2018-10-25 20:46:46',
            ),
            16 => 
            array (
                'id' => 17,
                'qte' => 9,
                'purchasing_price' => 170.0,
                'product_id' => 17,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 20:55:46',
                'updated_at' => '2018-10-25 20:55:46',
            ),
            17 => 
            array (
                'id' => 18,
                'qte' => 4,
                'purchasing_price' => 250.0,
                'product_id' => 18,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 21:04:42',
                'updated_at' => '2018-10-25 21:04:42',
            ),
            18 => 
            array (
                'id' => 19,
                'qte' => 2,
                'purchasing_price' => 105.0,
                'product_id' => 19,
                'supplier_id' => 3,
                'created_at' => '2018-10-25 21:13:39',
                'updated_at' => '2018-10-25 21:13:39',
            ),
            19 => 
            array (
                'id' => 20,
                'qte' => 4,
                'purchasing_price' => 105.0,
                'product_id' => 20,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 21:43:35',
                'updated_at' => '2018-10-25 21:43:35',
            ),
            20 => 
            array (
                'id' => 21,
                'qte' => 2,
                'purchasing_price' => 105.0,
                'product_id' => 21,
                'supplier_id' => 2,
                'created_at' => '2018-10-25 21:46:32',
                'updated_at' => '2018-10-25 21:46:32',
            ),
            21 => 
            array (
                'id' => 22,
                'qte' => 1,
                'purchasing_price' => 180.0,
                'product_id' => 22,
                'supplier_id' => 3,
                'created_at' => '2018-10-25 21:52:40',
                'updated_at' => '2018-10-25 21:52:40',
            ),
            22 => 
            array (
                'id' => 23,
                'qte' => 1,
                'purchasing_price' => 980.0,
                'product_id' => 23,
                'supplier_id' => 2,
                'created_at' => '2018-10-26 15:41:43',
                'updated_at' => '2018-10-26 15:41:43',
            ),
            23 => 
            array (
                'id' => 24,
                'qte' => 1,
                'purchasing_price' => 110.0,
                'product_id' => 24,
                'supplier_id' => 2,
                'created_at' => '2018-10-26 15:46:51',
                'updated_at' => '2018-10-26 15:46:51',
            ),
            24 => 
            array (
                'id' => 25,
                'qte' => 1,
                'purchasing_price' => 365.0,
                'product_id' => 25,
                'supplier_id' => 3,
                'created_at' => '2018-10-26 15:50:50',
                'updated_at' => '2018-10-26 15:50:50',
            ),
            25 => 
            array (
                'id' => 26,
                'qte' => 1,
                'purchasing_price' => 310.0,
                'product_id' => 26,
                'supplier_id' => 3,
                'created_at' => '2018-10-26 15:54:27',
                'updated_at' => '2018-10-26 15:54:27',
            ),
            26 => 
            array (
                'id' => 27,
                'qte' => 1,
                'purchasing_price' => 1770.0,
                'product_id' => 27,
                'supplier_id' => 2,
                'created_at' => '2018-10-26 16:10:35',
                'updated_at' => '2018-10-26 16:10:35',
            ),
            27 => 
            array (
                'id' => 28,
                'qte' => 2,
                'purchasing_price' => 130.0,
                'product_id' => 28,
                'supplier_id' => 5,
                'created_at' => '2018-10-29 17:17:06',
                'updated_at' => '2018-10-29 17:17:06',
            ),
            28 => 
            array (
                'id' => 29,
                'qte' => 2,
                'purchasing_price' => 130.0,
                'product_id' => 29,
                'supplier_id' => 4,
                'created_at' => '2018-10-29 17:22:15',
                'updated_at' => '2018-10-29 17:22:15',
            ),
            29 => 
            array (
                'id' => 30,
                'qte' => 4,
                'purchasing_price' => 25.0,
                'product_id' => 30,
                'supplier_id' => 4,
                'created_at' => '2018-10-29 17:26:06',
                'updated_at' => '2018-10-29 17:26:06',
            ),
            30 => 
            array (
                'id' => 31,
                'qte' => 1,
                'purchasing_price' => 32.0,
                'product_id' => 31,
                'supplier_id' => 4,
                'created_at' => '2018-10-29 17:31:23',
                'updated_at' => '2018-10-29 17:31:23',
            ),
            31 => 
            array (
                'id' => 32,
                'qte' => 1,
                'purchasing_price' => 37.0,
                'product_id' => 32,
                'supplier_id' => 4,
                'created_at' => '2018-10-29 17:37:07',
                'updated_at' => '2018-10-29 17:37:07',
            ),
            32 => 
            array (
                'id' => 33,
                'qte' => 1,
                'purchasing_price' => 33.0,
                'product_id' => 34,
                'supplier_id' => 4,
                'created_at' => '2018-10-29 17:39:16',
                'updated_at' => '2018-10-29 17:39:16',
            ),
            33 => 
            array (
                'id' => 34,
                'qte' => 1,
                'purchasing_price' => 38.0,
                'product_id' => 35,
                'supplier_id' => 1,
                'created_at' => '2018-10-29 18:01:40',
                'updated_at' => '2018-10-29 18:01:40',
            ),
            34 => 
            array (
                'id' => 35,
                'qte' => 1,
                'purchasing_price' => 950.0,
                'product_id' => 36,
                'supplier_id' => 2,
                'created_at' => '2018-10-29 19:17:20',
                'updated_at' => '2018-10-29 19:17:20',
            ),
            35 => 
            array (
                'id' => 36,
                'qte' => 1,
                'purchasing_price' => 1300.0,
                'product_id' => 12,
                'supplier_id' => 2,
                'created_at' => '2018-10-29 19:18:25',
                'updated_at' => '2018-10-29 19:18:25',
            ),
            36 => 
            array (
                'id' => 37,
                'qte' => 3,
                'purchasing_price' => 15.0,
                'product_id' => 37,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 16:15:50',
                'updated_at' => '2018-10-30 16:15:50',
            ),
            37 => 
            array (
                'id' => 38,
                'qte' => 4,
                'purchasing_price' => 6.0,
                'product_id' => 38,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 16:17:22',
                'updated_at' => '2018-10-30 16:17:22',
            ),
            38 => 
            array (
                'id' => 39,
                'qte' => 10,
                'purchasing_price' => 6.0,
                'product_id' => 38,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 16:18:57',
                'updated_at' => '2018-10-30 16:18:57',
            ),
            39 => 
            array (
                'id' => 40,
                'qte' => 4,
                'purchasing_price' => 4.0,
                'product_id' => 39,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 16:21:55',
                'updated_at' => '2018-10-30 16:21:55',
            ),
            40 => 
            array (
                'id' => 41,
                'qte' => 39,
                'purchasing_price' => 3.0,
                'product_id' => 40,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 16:22:57',
                'updated_at' => '2018-10-30 16:22:57',
            ),
            41 => 
            array (
                'id' => 42,
                'qte' => 4,
                'purchasing_price' => 4.0,
                'product_id' => 41,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 16:24:24',
                'updated_at' => '2018-10-30 16:24:24',
            ),
            42 => 
            array (
                'id' => 43,
                'qte' => 35,
                'purchasing_price' => 5.0,
                'product_id' => 42,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 16:25:20',
                'updated_at' => '2018-10-30 16:25:20',
            ),
            43 => 
            array (
                'id' => 44,
                'qte' => 2,
                'purchasing_price' => 8.0,
                'product_id' => 43,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 16:26:30',
                'updated_at' => '2018-10-30 16:26:30',
            ),
            44 => 
            array (
                'id' => 45,
                'qte' => 1,
                'purchasing_price' => 4.0,
                'product_id' => 44,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 16:27:47',
                'updated_at' => '2018-10-30 16:27:47',
            ),
            45 => 
            array (
                'id' => 46,
                'qte' => 22,
                'purchasing_price' => 13.0,
                'product_id' => 45,
                'supplier_id' => 2,
                'created_at' => '2018-10-30 17:29:39',
                'updated_at' => '2018-10-30 17:29:39',
            ),
            46 => 
            array (
                'id' => 47,
                'qte' => 31,
                'purchasing_price' => 13.0,
                'product_id' => 46,
                'supplier_id' => 2,
                'created_at' => '2018-10-30 17:37:30',
                'updated_at' => '2018-10-30 17:37:30',
            ),
            47 => 
            array (
                'id' => 48,
                'qte' => 90,
                'purchasing_price' => 4.0,
                'product_id' => 48,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 17:46:29',
                'updated_at' => '2018-10-30 17:46:29',
            ),
            48 => 
            array (
                'id' => 49,
                'qte' => 1,
                'purchasing_price' => 955.0,
                'product_id' => 49,
                'supplier_id' => 2,
                'created_at' => '2018-10-30 17:53:05',
                'updated_at' => '2018-10-30 17:53:05',
            ),
            49 => 
            array (
                'id' => 50,
                'qte' => 6,
                'purchasing_price' => 5.0,
                'product_id' => 50,
                'supplier_id' => 1,
                'created_at' => '2018-10-30 18:59:04',
                'updated_at' => '2018-10-30 18:59:04',
            ),
            50 => 
            array (
                'id' => 51,
                'qte' => 1,
                'purchasing_price' => 620.0,
                'product_id' => 52,
                'supplier_id' => 1,
                'created_at' => '2018-10-31 12:53:37',
                'updated_at' => '2018-10-31 12:53:37',
            ),
            51 => 
            array (
                'id' => 52,
                'qte' => 9,
                'purchasing_price' => 4.0,
                'product_id' => 54,
                'supplier_id' => 1,
                'created_at' => '2018-11-01 11:40:34',
                'updated_at' => '2018-11-01 11:40:34',
            ),
            52 => 
            array (
                'id' => 53,
                'qte' => 2,
                'purchasing_price' => 5.0,
                'product_id' => 55,
                'supplier_id' => 1,
                'created_at' => '2018-11-01 11:41:39',
                'updated_at' => '2018-11-01 11:41:39',
            ),
            53 => 
            array (
                'id' => 57,
                'qte' => 1,
                'purchasing_price' => 680.5,
                'product_id' => 57,
                'supplier_id' => 3,
                'created_at' => '2018-11-04 15:50:19',
                'updated_at' => '2018-11-04 15:50:19',
            ),
            54 => 
            array (
                'id' => 56,
                'qte' => 1,
                'purchasing_price' => 845.0,
                'product_id' => 56,
                'supplier_id' => 3,
                'created_at' => '2018-11-04 15:49:32',
                'updated_at' => '2018-11-04 15:49:32',
            ),
            55 => 
            array (
                'id' => 58,
                'qte' => 89,
                'purchasing_price' => 3.5,
                'product_id' => 58,
                'supplier_id' => 1,
                'created_at' => '2018-11-04 17:00:20',
                'updated_at' => '2018-11-04 17:00:20',
            ),
            56 => 
            array (
                'id' => 59,
                'qte' => 9,
                'purchasing_price' => 39.0,
                'product_id' => 59,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 11:53:01',
                'updated_at' => '2018-11-05 11:53:01',
            ),
            57 => 
            array (
                'id' => 60,
                'qte' => 4,
                'purchasing_price' => 44.8,
                'product_id' => 60,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 11:55:20',
                'updated_at' => '2018-11-05 11:55:20',
            ),
            58 => 
            array (
                'id' => 61,
                'qte' => 1,
                'purchasing_price' => 48.0,
                'product_id' => 62,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 11:57:01',
                'updated_at' => '2018-11-05 11:57:01',
            ),
            59 => 
            array (
                'id' => 62,
                'qte' => 1,
                'purchasing_price' => 65.0,
                'product_id' => 63,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 11:58:18',
                'updated_at' => '2018-11-05 11:58:18',
            ),
            60 => 
            array (
                'id' => 63,
                'qte' => 1,
                'purchasing_price' => 64.0,
                'product_id' => 64,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 11:59:43',
                'updated_at' => '2018-11-05 11:59:43',
            ),
            61 => 
            array (
                'id' => 64,
                'qte' => 2,
                'purchasing_price' => 50.0,
                'product_id' => 65,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 12:00:58',
                'updated_at' => '2018-11-05 12:00:58',
            ),
            62 => 
            array (
                'id' => 65,
                'qte' => 1,
                'purchasing_price' => 47.0,
                'product_id' => 66,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 12:08:59',
                'updated_at' => '2018-11-05 12:08:59',
            ),
            63 => 
            array (
                'id' => 66,
                'qte' => 1,
                'purchasing_price' => 47.0,
                'product_id' => 67,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 12:09:59',
                'updated_at' => '2018-11-05 12:09:59',
            ),
            64 => 
            array (
                'id' => 67,
                'qte' => 52,
                'purchasing_price' => 7.5,
                'product_id' => 68,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 12:34:56',
                'updated_at' => '2018-11-05 12:34:56',
            ),
            65 => 
            array (
                'id' => 68,
                'qte' => 17,
                'purchasing_price' => 31.0,
                'product_id' => 69,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 16:12:08',
                'updated_at' => '2018-11-05 16:12:08',
            ),
            66 => 
            array (
                'id' => 69,
                'qte' => 26,
                'purchasing_price' => 35.0,
                'product_id' => 70,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 16:13:45',
                'updated_at' => '2018-11-05 16:13:45',
            ),
            67 => 
            array (
                'id' => 70,
                'qte' => 10,
                'purchasing_price' => 45.0,
                'product_id' => 71,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 16:16:47',
                'updated_at' => '2018-11-05 16:16:47',
            ),
            68 => 
            array (
                'id' => 71,
                'qte' => 1,
                'purchasing_price' => 55.0,
                'product_id' => 72,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 16:18:16',
                'updated_at' => '2018-11-05 16:18:16',
            ),
            69 => 
            array (
                'id' => 72,
                'qte' => 1,
                'purchasing_price' => 130.0,
                'product_id' => 73,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 16:19:55',
                'updated_at' => '2018-11-05 16:19:55',
            ),
            70 => 
            array (
                'id' => 73,
                'qte' => 2,
                'purchasing_price' => 85.0,
                'product_id' => 74,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 16:25:59',
                'updated_at' => '2018-11-05 16:25:59',
            ),
            71 => 
            array (
                'id' => 74,
                'qte' => 1,
                'purchasing_price' => 55.0,
                'product_id' => 75,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 16:27:27',
                'updated_at' => '2018-11-05 16:27:27',
            ),
            72 => 
            array (
                'id' => 75,
                'qte' => 4,
                'purchasing_price' => 57.0,
                'product_id' => 76,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 16:29:21',
                'updated_at' => '2018-11-05 16:29:21',
            ),
            73 => 
            array (
                'id' => 76,
                'qte' => 2,
                'purchasing_price' => 120.0,
                'product_id' => 77,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 16:33:25',
                'updated_at' => '2018-11-05 16:33:25',
            ),
            74 => 
            array (
                'id' => 77,
                'qte' => 11,
                'purchasing_price' => 20.0,
                'product_id' => 78,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:17:37',
                'updated_at' => '2018-11-05 18:17:37',
            ),
            75 => 
            array (
                'id' => 78,
                'qte' => 14,
                'purchasing_price' => 13.0,
                'product_id' => 79,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:18:51',
                'updated_at' => '2018-11-05 18:18:51',
            ),
            76 => 
            array (
                'id' => 79,
                'qte' => 5,
                'purchasing_price' => 12.0,
                'product_id' => 80,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:22:35',
                'updated_at' => '2018-11-05 18:22:35',
            ),
            77 => 
            array (
                'id' => 80,
                'qte' => 48,
                'purchasing_price' => 10.0,
                'product_id' => 81,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:24:53',
                'updated_at' => '2018-11-05 18:24:53',
            ),
            78 => 
            array (
                'id' => 81,
                'qte' => 2,
                'purchasing_price' => 9.0,
                'product_id' => 82,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:26:45',
                'updated_at' => '2018-11-05 18:26:45',
            ),
            79 => 
            array (
                'id' => 82,
                'qte' => 13,
                'purchasing_price' => 20.0,
                'product_id' => 83,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:27:48',
                'updated_at' => '2018-11-05 18:27:48',
            ),
            80 => 
            array (
                'id' => 83,
                'qte' => 2,
                'purchasing_price' => 20.0,
                'product_id' => 84,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:28:48',
                'updated_at' => '2018-11-05 18:28:48',
            ),
            81 => 
            array (
                'id' => 84,
                'qte' => 8,
                'purchasing_price' => 15.0,
                'product_id' => 85,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:30:30',
                'updated_at' => '2018-11-05 18:30:30',
            ),
            82 => 
            array (
                'id' => 85,
                'qte' => 1,
                'purchasing_price' => 21.0,
                'product_id' => 86,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:31:13',
                'updated_at' => '2018-11-05 18:31:13',
            ),
            83 => 
            array (
                'id' => 86,
                'qte' => 2,
                'purchasing_price' => 18.5,
                'product_id' => 87,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:32:06',
                'updated_at' => '2018-11-05 18:32:06',
            ),
            84 => 
            array (
                'id' => 87,
                'qte' => 9,
                'purchasing_price' => 18.0,
                'product_id' => 88,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:32:50',
                'updated_at' => '2018-11-05 18:32:50',
            ),
            85 => 
            array (
                'id' => 88,
                'qte' => 13,
                'purchasing_price' => 11.0,
                'product_id' => 89,
                'supplier_id' => 1,
                'created_at' => '2018-11-05 18:34:05',
                'updated_at' => '2018-11-05 18:34:05',
            ),
            86 => 
            array (
                'id' => 89,
                'qte' => 4,
                'purchasing_price' => 14.0,
                'product_id' => 90,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:36:28',
                'updated_at' => '2018-11-06 10:36:28',
            ),
            87 => 
            array (
                'id' => 90,
                'qte' => 3,
                'purchasing_price' => 23.0,
                'product_id' => 91,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:37:00',
                'updated_at' => '2018-11-06 10:37:00',
            ),
            88 => 
            array (
                'id' => 91,
                'qte' => 4,
                'purchasing_price' => 17.0,
                'product_id' => 92,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:37:40',
                'updated_at' => '2018-11-06 10:37:40',
            ),
            89 => 
            array (
                'id' => 92,
                'qte' => 5,
                'purchasing_price' => 18.0,
                'product_id' => 93,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:39:16',
                'updated_at' => '2018-11-06 10:39:16',
            ),
            90 => 
            array (
                'id' => 93,
                'qte' => 1,
                'purchasing_price' => 10.0,
                'product_id' => 94,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:40:48',
                'updated_at' => '2018-11-06 10:40:48',
            ),
            91 => 
            array (
                'id' => 94,
                'qte' => 11,
                'purchasing_price' => 17.0,
                'product_id' => 95,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:41:11',
                'updated_at' => '2018-11-06 10:41:11',
            ),
            92 => 
            array (
                'id' => 95,
                'qte' => 7,
                'purchasing_price' => 15.0,
                'product_id' => 96,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:42:23',
                'updated_at' => '2018-11-06 10:42:23',
            ),
            93 => 
            array (
                'id' => 96,
                'qte' => 6,
                'purchasing_price' => 15.0,
                'product_id' => 97,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:43:15',
                'updated_at' => '2018-11-06 10:43:15',
            ),
            94 => 
            array (
                'id' => 97,
                'qte' => 10,
                'purchasing_price' => 22.0,
                'product_id' => 98,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:43:59',
                'updated_at' => '2018-11-06 10:43:59',
            ),
            95 => 
            array (
                'id' => 98,
                'qte' => 2,
                'purchasing_price' => 6.0,
                'product_id' => 99,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:44:58',
                'updated_at' => '2018-11-06 10:44:58',
            ),
            96 => 
            array (
                'id' => 99,
                'qte' => 3,
                'purchasing_price' => 10.0,
                'product_id' => 100,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:45:26',
                'updated_at' => '2018-11-06 10:45:26',
            ),
            97 => 
            array (
                'id' => 100,
                'qte' => 1,
                'purchasing_price' => 6.0,
                'product_id' => 101,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:47:45',
                'updated_at' => '2018-11-06 10:47:45',
            ),
            98 => 
            array (
                'id' => 101,
                'qte' => 1,
                'purchasing_price' => 5.0,
                'product_id' => 102,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:48:04',
                'updated_at' => '2018-11-06 10:48:04',
            ),
            99 => 
            array (
                'id' => 102,
                'qte' => 1,
                'purchasing_price' => 16.0,
                'product_id' => 105,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:49:00',
                'updated_at' => '2018-11-06 10:49:00',
            ),
            100 => 
            array (
                'id' => 103,
                'qte' => 2,
                'purchasing_price' => 7.5,
                'product_id' => 104,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:49:23',
                'updated_at' => '2018-11-06 10:49:23',
            ),
            101 => 
            array (
                'id' => 104,
                'qte' => 16,
                'purchasing_price' => 75.0,
                'product_id' => 106,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 10:55:10',
                'updated_at' => '2018-11-06 10:55:10',
            ),
            102 => 
            array (
                'id' => 105,
                'qte' => 4,
                'purchasing_price' => 15.0,
                'product_id' => 97,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 12:24:31',
                'updated_at' => '2018-11-06 12:24:31',
            ),
            103 => 
            array (
                'id' => 106,
                'qte' => 12,
                'purchasing_price' => 75.0,
                'product_id' => 107,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 13:02:14',
                'updated_at' => '2018-11-06 13:02:14',
            ),
            104 => 
            array (
                'id' => 107,
                'qte' => 3,
                'purchasing_price' => 140.0,
                'product_id' => 108,
                'supplier_id' => 7,
                'created_at' => '2018-11-06 17:08:38',
                'updated_at' => '2018-11-06 17:08:38',
            ),
            105 => 
            array (
                'id' => 108,
                'qte' => 2,
                'purchasing_price' => 140.0,
                'product_id' => 109,
                'supplier_id' => 7,
                'created_at' => '2018-11-06 17:10:35',
                'updated_at' => '2018-11-06 17:10:35',
            ),
            106 => 
            array (
                'id' => 109,
                'qte' => 2,
                'purchasing_price' => 140.0,
                'product_id' => 109,
                'supplier_id' => 8,
                'created_at' => '2018-11-06 17:17:46',
                'updated_at' => '2018-11-06 17:17:46',
            ),
            107 => 
            array (
                'id' => 110,
                'qte' => 1,
                'purchasing_price' => 140.0,
                'product_id' => 109,
                'supplier_id' => 7,
                'created_at' => '2018-11-06 17:18:59',
                'updated_at' => '2018-11-06 17:18:59',
            ),
            108 => 
            array (
                'id' => 111,
                'qte' => 1,
                'purchasing_price' => 185.0,
                'product_id' => 110,
                'supplier_id' => 8,
                'created_at' => '2018-11-06 17:29:53',
                'updated_at' => '2018-11-06 17:29:53',
            ),
            109 => 
            array (
                'id' => 112,
                'qte' => 3,
                'purchasing_price' => 100.0,
                'product_id' => 111,
                'supplier_id' => 7,
                'created_at' => '2018-11-06 17:51:29',
                'updated_at' => '2018-11-06 17:51:29',
            ),
            110 => 
            array (
                'id' => 113,
                'qte' => 1,
                'purchasing_price' => 140.0,
                'product_id' => 109,
                'supplier_id' => 8,
                'created_at' => '2018-11-06 17:52:25',
                'updated_at' => '2018-11-06 17:52:25',
            ),
            111 => 
            array (
                'id' => 114,
                'qte' => 1,
                'purchasing_price' => 955.0,
                'product_id' => 49,
                'supplier_id' => 2,
                'created_at' => '2018-11-06 17:55:13',
                'updated_at' => '2018-11-06 17:55:13',
            ),
            112 => 
            array (
                'id' => 115,
                'qte' => 1,
                'purchasing_price' => 955.0,
                'product_id' => 112,
                'supplier_id' => 2,
                'created_at' => '2018-11-06 17:57:05',
                'updated_at' => '2018-11-06 17:57:05',
            ),
            113 => 
            array (
                'id' => 116,
                'qte' => 1,
                'purchasing_price' => 100.0,
                'product_id' => 113,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 17:59:15',
                'updated_at' => '2018-11-06 17:59:15',
            ),
            114 => 
            array (
                'id' => 117,
                'qte' => 1,
                'purchasing_price' => 110.0,
                'product_id' => 114,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 18:00:51',
                'updated_at' => '2018-11-06 18:00:51',
            ),
            115 => 
            array (
                'id' => 118,
                'qte' => 1,
                'purchasing_price' => 48.0,
                'product_id' => 115,
                'supplier_id' => 1,
                'created_at' => '2018-11-06 19:37:45',
                'updated_at' => '2018-11-06 19:37:45',
            ),
            116 => 
            array (
                'id' => 119,
                'qte' => 10,
                'purchasing_price' => 30.0,
                'product_id' => 116,
                'supplier_id' => 1,
                'created_at' => '2018-11-07 15:51:40',
                'updated_at' => '2018-11-07 15:51:40',
            ),
            117 => 
            array (
                'id' => 120,
                'qte' => 6,
                'purchasing_price' => 30.0,
                'product_id' => 117,
                'supplier_id' => 1,
                'created_at' => '2018-11-07 15:54:20',
                'updated_at' => '2018-11-07 15:54:20',
            ),
            118 => 
            array (
                'id' => 121,
                'qte' => 5,
                'purchasing_price' => 32.0,
                'product_id' => 118,
                'supplier_id' => 1,
                'created_at' => '2018-11-07 15:54:47',
                'updated_at' => '2018-11-07 15:54:47',
            ),
            119 => 
            array (
                'id' => 122,
                'qte' => 2,
                'purchasing_price' => 32.0,
                'product_id' => 119,
                'supplier_id' => 1,
                'created_at' => '2018-11-07 15:55:56',
                'updated_at' => '2018-11-07 15:55:56',
            ),
            120 => 
            array (
                'id' => 123,
                'qte' => 2,
                'purchasing_price' => 32.5,
                'product_id' => 120,
                'supplier_id' => 1,
                'created_at' => '2018-11-07 15:57:07',
                'updated_at' => '2018-11-07 15:57:07',
            ),
            121 => 
            array (
                'id' => 124,
                'qte' => 1,
                'purchasing_price' => 1000.0,
                'product_id' => 121,
                'supplier_id' => 1,
                'created_at' => '2018-11-07 15:58:01',
                'updated_at' => '2018-11-07 15:58:01',
            ),
            122 => 
            array (
                'id' => 125,
                'qte' => 45,
                'purchasing_price' => 9.0,
                'product_id' => 122,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 10:47:23',
                'updated_at' => '2018-11-08 10:47:23',
            ),
            123 => 
            array (
                'id' => 126,
                'qte' => 4,
                'purchasing_price' => 26.0,
                'product_id' => 123,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 10:54:38',
                'updated_at' => '2018-11-08 10:54:38',
            ),
            124 => 
            array (
                'id' => 127,
                'qte' => 10,
                'purchasing_price' => 14.0,
                'product_id' => 90,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 11:01:19',
                'updated_at' => '2018-11-08 11:01:19',
            ),
            125 => 
            array (
                'id' => 128,
                'qte' => 21,
                'purchasing_price' => 6.0,
                'product_id' => 124,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 13:27:54',
                'updated_at' => '2018-11-08 13:27:54',
            ),
            126 => 
            array (
                'id' => 129,
                'qte' => 23,
                'purchasing_price' => 5.0,
                'product_id' => 125,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 19:02:27',
                'updated_at' => '2018-11-08 19:02:27',
            ),
            127 => 
            array (
                'id' => 130,
                'qte' => 11,
                'purchasing_price' => 10.0,
                'product_id' => 126,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 19:18:08',
                'updated_at' => '2018-11-08 19:18:08',
            ),
            128 => 
            array (
                'id' => 131,
                'qte' => 16,
                'purchasing_price' => 17.0,
                'product_id' => 127,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 19:31:59',
                'updated_at' => '2018-11-08 19:31:59',
            ),
            129 => 
            array (
                'id' => 132,
                'qte' => 1,
                'purchasing_price' => 22.0,
                'product_id' => 98,
                'supplier_id' => 6,
                'created_at' => '2018-11-08 19:33:59',
                'updated_at' => '2018-11-08 19:33:59',
            ),
            130 => 
            array (
                'id' => 133,
                'qte' => 7,
                'purchasing_price' => 10.0,
                'product_id' => 128,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 19:40:59',
                'updated_at' => '2018-11-08 19:40:59',
            ),
            131 => 
            array (
                'id' => 134,
                'qte' => 11,
                'purchasing_price' => 7.0,
                'product_id' => 129,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 19:55:31',
                'updated_at' => '2018-11-08 19:55:31',
            ),
            132 => 
            array (
                'id' => 135,
                'qte' => 3,
                'purchasing_price' => 40.0,
                'product_id' => 130,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 20:00:22',
                'updated_at' => '2018-11-08 20:00:22',
            ),
            133 => 
            array (
                'id' => 136,
                'qte' => 2,
                'purchasing_price' => 50.0,
                'product_id' => 131,
                'supplier_id' => 1,
                'created_at' => '2018-11-08 20:04:04',
                'updated_at' => '2018-11-08 20:04:04',
            ),
            134 => 
            array (
                'id' => 137,
                'qte' => 1,
                'purchasing_price' => 950.0,
                'product_id' => 112,
                'supplier_id' => 2,
                'created_at' => '2018-11-09 16:11:23',
                'updated_at' => '2018-11-09 16:11:23',
            ),
            135 => 
            array (
                'id' => 138,
                'qte' => 2,
                'purchasing_price' => 950.0,
                'product_id' => 132,
                'supplier_id' => 2,
                'created_at' => '2018-11-09 16:12:45',
                'updated_at' => '2018-11-09 16:12:45',
            ),
            136 => 
            array (
                'id' => 139,
                'qte' => 2,
                'purchasing_price' => 1050.0,
                'product_id' => 9,
                'supplier_id' => 2,
                'created_at' => '2018-11-09 16:13:39',
                'updated_at' => '2018-11-09 16:13:39',
            ),
            137 => 
            array (
                'id' => 140,
                'qte' => 2,
                'purchasing_price' => 26.0,
                'product_id' => 123,
                'supplier_id' => 1,
                'created_at' => '2018-11-10 10:28:04',
                'updated_at' => '2018-11-10 10:28:04',
            ),
            138 => 
            array (
                'id' => 141,
                'qte' => 1,
                'purchasing_price' => 38.0,
                'product_id' => 133,
                'supplier_id' => 1,
                'created_at' => '2018-11-10 10:30:05',
                'updated_at' => '2018-11-10 10:30:05',
            ),
            139 => 
            array (
                'id' => 142,
                'qte' => 2,
                'purchasing_price' => 30.0,
                'product_id' => 116,
                'supplier_id' => 1,
                'created_at' => '2018-11-10 10:30:33',
                'updated_at' => '2018-11-10 10:30:33',
            ),
            140 => 
            array (
                'id' => 143,
                'qte' => 1,
                'purchasing_price' => 36.0,
                'product_id' => 134,
                'supplier_id' => 1,
                'created_at' => '2018-11-10 10:32:11',
                'updated_at' => '2018-11-10 10:32:11',
            ),
            141 => 
            array (
                'id' => 144,
                'qte' => 5,
                'purchasing_price' => 140.0,
                'product_id' => 135,
                'supplier_id' => 6,
                'created_at' => '2018-11-10 20:12:42',
                'updated_at' => '2018-11-10 20:12:42',
            ),
            142 => 
            array (
                'id' => 145,
                'qte' => 6,
                'purchasing_price' => 120.0,
                'product_id' => 136,
                'supplier_id' => 6,
                'created_at' => '2018-11-10 20:15:12',
                'updated_at' => '2018-11-10 20:15:12',
            ),
            143 => 
            array (
                'id' => 146,
                'qte' => 3,
                'purchasing_price' => 105.0,
                'product_id' => 137,
                'supplier_id' => 6,
                'created_at' => '2018-11-10 20:18:45',
                'updated_at' => '2018-11-10 20:18:45',
            ),
            144 => 
            array (
                'id' => 147,
                'qte' => 3,
                'purchasing_price' => 47.0,
                'product_id' => 138,
                'supplier_id' => 6,
                'created_at' => '2018-11-10 20:23:21',
                'updated_at' => '2018-11-10 20:23:21',
            ),
            145 => 
            array (
                'id' => 148,
                'qte' => 5,
                'purchasing_price' => 15.0,
                'product_id' => 97,
                'supplier_id' => 6,
                'created_at' => '2018-11-10 20:27:53',
                'updated_at' => '2018-11-10 20:27:53',
            ),
            146 => 
            array (
                'id' => 149,
                'qte' => 5,
                'purchasing_price' => 41.0,
                'product_id' => 139,
                'supplier_id' => 1,
                'created_at' => '2018-11-10 20:30:14',
                'updated_at' => '2018-11-10 20:30:14',
            ),
            147 => 
            array (
                'id' => 150,
                'qte' => 1,
                'purchasing_price' => 1330.0,
                'product_id' => 7,
                'supplier_id' => 3,
                'created_at' => '2018-11-10 20:32:04',
                'updated_at' => '2018-11-10 20:32:04',
            ),
            148 => 
            array (
                'id' => 151,
                'qte' => 1,
                'purchasing_price' => 1690.0,
                'product_id' => 140,
                'supplier_id' => 3,
                'created_at' => '2018-11-10 20:33:11',
                'updated_at' => '2018-11-10 20:33:11',
            ),
            149 => 
            array (
                'id' => 152,
                'qte' => 1,
                'purchasing_price' => 2500.0,
                'product_id' => 141,
                'supplier_id' => 3,
                'created_at' => '2018-11-10 20:34:03',
                'updated_at' => '2018-11-10 20:34:03',
            ),
            150 => 
            array (
                'id' => 153,
                'qte' => 3,
                'purchasing_price' => 19.0,
                'product_id' => 142,
                'supplier_id' => 1,
                'created_at' => '2018-11-10 20:50:12',
                'updated_at' => '2018-11-10 20:50:12',
            ),
            151 => 
            array (
                'id' => 154,
                'qte' => 4,
                'purchasing_price' => 14.0,
                'product_id' => 90,
                'supplier_id' => 1,
                'created_at' => '2018-11-11 11:10:19',
                'updated_at' => '2018-11-11 11:10:19',
            ),
            152 => 
            array (
                'id' => 155,
                'qte' => 5,
                'purchasing_price' => 15.0,
                'product_id' => 97,
                'supplier_id' => 1,
                'created_at' => '2018-11-11 11:11:36',
                'updated_at' => '2018-11-11 11:11:36',
            ),
            153 => 
            array (
                'id' => 156,
                'qte' => 1,
                'purchasing_price' => 70.0,
                'product_id' => 143,
                'supplier_id' => 1,
                'created_at' => '2018-11-11 11:18:12',
                'updated_at' => '2018-11-11 11:18:12',
            ),
            154 => 
            array (
                'id' => 157,
                'qte' => 1,
                'purchasing_price' => 280.0,
                'product_id' => 144,
                'supplier_id' => 1,
                'created_at' => '2018-11-11 11:30:24',
                'updated_at' => '2018-11-11 11:30:24',
            ),
            155 => 
            array (
                'id' => 158,
                'qte' => 5,
                'purchasing_price' => 32.0,
                'product_id' => 145,
                'supplier_id' => 7,
                'created_at' => '2018-11-11 12:14:41',
                'updated_at' => '2018-11-11 12:14:41',
            ),
            156 => 
            array (
                'id' => 159,
                'qte' => 2,
                'purchasing_price' => 55.0,
                'product_id' => 146,
                'supplier_id' => 1,
                'created_at' => '2018-11-11 12:19:52',
                'updated_at' => '2018-11-11 12:19:52',
            ),
            157 => 
            array (
                'id' => 160,
                'qte' => 2,
                'purchasing_price' => 7.5,
                'product_id' => 147,
                'supplier_id' => 1,
                'created_at' => '2018-11-11 12:32:18',
                'updated_at' => '2018-11-11 12:32:18',
            ),
            158 => 
            array (
                'id' => 161,
                'qte' => 4,
                'purchasing_price' => 7.0,
                'product_id' => 148,
                'supplier_id' => 1,
                'created_at' => '2018-11-11 13:27:52',
                'updated_at' => '2018-11-11 13:27:52',
            ),
            159 => 
            array (
                'id' => 162,
                'qte' => 6,
                'purchasing_price' => 120.0,
                'product_id' => 149,
                'supplier_id' => 6,
                'created_at' => '2018-11-12 12:51:03',
                'updated_at' => '2018-11-12 12:51:03',
            ),
            160 => 
            array (
                'id' => 163,
                'qte' => 5,
                'purchasing_price' => 120.0,
                'product_id' => 150,
                'supplier_id' => 6,
                'created_at' => '2018-11-12 13:36:14',
                'updated_at' => '2018-11-12 13:36:14',
            ),
            161 => 
            array (
                'id' => 164,
                'qte' => 20,
                'purchasing_price' => 31.0,
                'product_id' => 151,
                'supplier_id' => 6,
                'created_at' => '2018-11-12 15:59:22',
                'updated_at' => '2018-11-12 15:59:22',
            ),
            162 => 
            array (
                'id' => 165,
                'qte' => 2,
                'purchasing_price' => 105.0,
                'product_id' => 152,
                'supplier_id' => 9,
                'created_at' => '2018-11-13 12:49:55',
                'updated_at' => '2018-11-13 12:49:55',
            ),
            163 => 
            array (
                'id' => 166,
                'qte' => 2,
                'purchasing_price' => 50.0,
                'product_id' => 153,
                'supplier_id' => 9,
                'created_at' => '2018-11-13 12:53:26',
                'updated_at' => '2018-11-13 12:53:26',
            ),
            164 => 
            array (
                'id' => 167,
                'qte' => 4,
                'purchasing_price' => 16.0,
                'product_id' => 105,
                'supplier_id' => 9,
                'created_at' => '2018-11-13 12:55:52',
                'updated_at' => '2018-11-13 12:55:52',
            ),
            165 => 
            array (
                'id' => 168,
                'qte' => 2,
                'purchasing_price' => 27.0,
                'product_id' => 155,
                'supplier_id' => 9,
                'created_at' => '2018-11-13 13:01:51',
                'updated_at' => '2018-11-13 13:01:51',
            ),
            166 => 
            array (
                'id' => 169,
                'qte' => 2,
                'purchasing_price' => 43.0,
                'product_id' => 156,
                'supplier_id' => 9,
                'created_at' => '2018-11-13 13:04:39',
                'updated_at' => '2018-11-13 13:04:39',
            ),
            167 => 
            array (
                'id' => 170,
                'qte' => 2,
                'purchasing_price' => 1300.0,
                'product_id' => 157,
                'supplier_id' => 2,
                'created_at' => '2018-11-13 16:09:59',
                'updated_at' => '2018-11-13 16:09:59',
            ),
            168 => 
            array (
                'id' => 171,
                'qte' => 1,
                'purchasing_price' => 50.0,
                'product_id' => 158,
                'supplier_id' => 1,
                'created_at' => '2018-11-13 17:42:51',
                'updated_at' => '2018-11-13 17:42:51',
            ),
            169 => 
            array (
                'id' => 172,
                'qte' => 1,
                'purchasing_price' => 700.0,
                'product_id' => 159,
                'supplier_id' => 1,
                'created_at' => '2018-11-13 18:50:47',
                'updated_at' => '2018-11-13 18:50:47',
            ),
            170 => 
            array (
                'id' => 173,
                'qte' => 5,
                'purchasing_price' => 50.0,
                'product_id' => 160,
                'supplier_id' => 6,
                'created_at' => '2018-11-13 19:03:59',
                'updated_at' => '2018-11-13 19:03:59',
            ),
            171 => 
            array (
                'id' => 174,
                'qte' => 53,
                'purchasing_price' => 14.0,
                'product_id' => 161,
                'supplier_id' => 1,
                'created_at' => '2018-11-14 16:29:33',
                'updated_at' => '2018-11-14 16:29:33',
            ),
            172 => 
            array (
                'id' => 175,
                'qte' => 12,
                'purchasing_price' => 88.0,
                'product_id' => 162,
                'supplier_id' => 1,
                'created_at' => '2018-11-14 16:33:40',
                'updated_at' => '2018-11-14 16:33:40',
            ),
            173 => 
            array (
                'id' => 176,
                'qte' => 2,
                'purchasing_price' => 210.0,
                'product_id' => 163,
                'supplier_id' => 4,
                'created_at' => '2018-11-14 16:41:44',
                'updated_at' => '2018-11-14 16:41:44',
            ),
            174 => 
            array (
                'id' => 177,
                'qte' => 2,
                'purchasing_price' => 70.0,
                'product_id' => 164,
                'supplier_id' => 1,
                'created_at' => '2018-11-14 16:45:26',
                'updated_at' => '2018-11-14 16:45:26',
            ),
            175 => 
            array (
                'id' => 178,
                'qte' => 1,
                'purchasing_price' => 180.0,
                'product_id' => 165,
                'supplier_id' => 1,
                'created_at' => '2018-11-14 16:51:53',
                'updated_at' => '2018-11-14 16:51:53',
            ),
            176 => 
            array (
                'id' => 179,
                'qte' => 1,
                'purchasing_price' => 150.0,
                'product_id' => 166,
                'supplier_id' => 1,
                'created_at' => '2018-11-14 16:53:06',
                'updated_at' => '2018-11-14 16:53:06',
            ),
            177 => 
            array (
                'id' => 180,
                'qte' => 5,
                'purchasing_price' => 63.5,
                'product_id' => 167,
                'supplier_id' => 1,
                'created_at' => '2018-11-14 16:55:18',
                'updated_at' => '2018-11-14 16:55:18',
            ),
            178 => 
            array (
                'id' => 181,
                'qte' => 1,
                'purchasing_price' => 140.0,
                'product_id' => 168,
                'supplier_id' => 1,
                'created_at' => '2018-11-14 16:59:18',
                'updated_at' => '2018-11-14 16:59:18',
            ),
            179 => 
            array (
                'id' => 182,
                'qte' => 2,
                'purchasing_price' => 50.0,
                'product_id' => 154,
                'supplier_id' => 9,
                'created_at' => '2018-11-14 17:06:13',
                'updated_at' => '2018-11-14 17:06:13',
            ),
            180 => 
            array (
                'id' => 183,
                'qte' => 2,
                'purchasing_price' => 65.0,
                'product_id' => 169,
                'supplier_id' => 1,
                'created_at' => '2018-11-14 18:46:00',
                'updated_at' => '2018-11-14 18:46:00',
            ),
            181 => 
            array (
                'id' => 184,
                'qte' => 2,
                'purchasing_price' => 70.0,
                'product_id' => 170,
                'supplier_id' => 6,
                'created_at' => '2018-11-17 10:43:23',
                'updated_at' => '2018-11-17 10:43:23',
            ),
            182 => 
            array (
                'id' => 185,
                'qte' => 1,
                'purchasing_price' => 140.0,
                'product_id' => 171,
                'supplier_id' => 6,
                'created_at' => '2018-11-23 16:58:35',
                'updated_at' => '2018-11-23 16:58:35',
            ),
            183 => 
            array (
                'id' => 186,
                'qte' => 1,
                'purchasing_price' => 190.0,
                'product_id' => 172,
                'supplier_id' => 6,
                'created_at' => '2018-11-23 16:59:51',
                'updated_at' => '2018-11-23 16:59:51',
            ),
            184 => 
            array (
                'id' => 187,
                'qte' => 5,
                'purchasing_price' => 20.0,
                'product_id' => 173,
                'supplier_id' => 1,
                'created_at' => '2018-11-23 17:02:35',
                'updated_at' => '2018-11-23 17:02:35',
            ),
            185 => 
            array (
                'id' => 188,
                'qte' => 2,
                'purchasing_price' => 3.0,
                'product_id' => 174,
                'supplier_id' => 1,
                'created_at' => '2018-11-23 17:08:47',
                'updated_at' => '2018-11-23 17:08:47',
            ),
            186 => 
            array (
                'id' => 189,
                'qte' => 10,
                'purchasing_price' => 2.5,
                'product_id' => 175,
                'supplier_id' => 1,
                'created_at' => '2018-11-23 17:12:19',
                'updated_at' => '2018-11-23 17:12:19',
            ),
            187 => 
            array (
                'id' => 190,
                'qte' => 30,
                'purchasing_price' => 5.25,
                'product_id' => 176,
                'supplier_id' => 1,
                'created_at' => '2018-11-23 17:17:03',
                'updated_at' => '2018-11-23 17:17:03',
            ),
            188 => 
            array (
                'id' => 191,
                'qte' => 10,
                'purchasing_price' => 6.0,
                'product_id' => 177,
                'supplier_id' => 1,
                'created_at' => '2018-11-23 17:26:21',
                'updated_at' => '2018-11-23 17:26:21',
            ),
            189 => 
            array (
                'id' => 192,
                'qte' => 2,
                'purchasing_price' => 43.0,
                'product_id' => 178,
                'supplier_id' => 1,
                'created_at' => '2018-11-23 17:30:21',
                'updated_at' => '2018-11-23 17:30:21',
            ),
            190 => 
            array (
                'id' => 193,
                'qte' => 4,
                'purchasing_price' => 43.0,
                'product_id' => 179,
                'supplier_id' => 1,
                'created_at' => '2018-11-23 17:31:41',
                'updated_at' => '2018-11-23 17:31:41',
            ),
            191 => 
            array (
                'id' => 194,
                'qte' => 20,
                'purchasing_price' => 4.0,
                'product_id' => 39,
                'supplier_id' => 7,
                'created_at' => '2018-11-23 17:38:19',
                'updated_at' => '2018-11-23 17:38:19',
            ),
            192 => 
            array (
                'id' => 195,
                'qte' => 17,
                'purchasing_price' => 15.0,
                'product_id' => 97,
                'supplier_id' => 7,
                'created_at' => '2018-11-23 17:42:07',
                'updated_at' => '2018-11-23 17:42:07',
            ),
            193 => 
            array (
                'id' => 196,
                'qte' => 2,
                'purchasing_price' => 140.0,
                'product_id' => 180,
                'supplier_id' => 7,
                'created_at' => '2018-11-23 17:45:56',
                'updated_at' => '2018-11-23 17:45:56',
            ),
            194 => 
            array (
                'id' => 197,
                'qte' => 1,
                'purchasing_price' => 55.0,
                'product_id' => 181,
                'supplier_id' => 6,
                'created_at' => '2018-11-23 19:39:13',
                'updated_at' => '2018-11-23 19:39:13',
            ),
            195 => 
            array (
                'id' => 198,
                'qte' => 1,
                'purchasing_price' => 67.0,
                'product_id' => 182,
                'supplier_id' => 6,
                'created_at' => '2018-11-23 19:40:45',
                'updated_at' => '2018-11-23 19:40:45',
            ),
            196 => 
            array (
                'id' => 199,
                'qte' => 3,
                'purchasing_price' => 52.0,
                'product_id' => 183,
                'supplier_id' => 6,
                'created_at' => '2018-11-23 19:43:25',
                'updated_at' => '2018-11-23 19:43:25',
            ),
            197 => 
            array (
                'id' => 200,
                'qte' => 1,
                'purchasing_price' => 77.0,
                'product_id' => 184,
                'supplier_id' => 6,
                'created_at' => '2018-11-23 19:44:21',
                'updated_at' => '2018-11-23 19:44:21',
            ),
            198 => 
            array (
                'id' => 201,
                'qte' => 2,
                'purchasing_price' => 355.0,
                'product_id' => 185,
                'supplier_id' => 6,
                'created_at' => '2018-11-23 20:05:59',
                'updated_at' => '2018-11-23 20:05:59',
            ),
            199 => 
            array (
                'id' => 202,
                'qte' => 1,
                'purchasing_price' => 55.0,
                'product_id' => 186,
                'supplier_id' => 6,
                'created_at' => '2018-11-23 20:07:34',
                'updated_at' => '2018-11-23 20:07:34',
            ),
            200 => 
            array (
                'id' => 203,
                'qte' => 7,
                'purchasing_price' => 45.0,
                'product_id' => 187,
                'supplier_id' => 6,
                'created_at' => '2018-11-23 20:40:13',
                'updated_at' => '2018-11-23 20:40:13',
            ),
            201 => 
            array (
                'id' => 204,
                'qte' => 1,
                'purchasing_price' => 100.0,
                'product_id' => 188,
                'supplier_id' => 1,
                'created_at' => '2018-11-26 10:32:29',
                'updated_at' => '2018-11-26 10:32:29',
            ),
            202 => 
            array (
                'id' => 205,
                'qte' => 1,
                'purchasing_price' => 550.0,
                'product_id' => 190,
                'supplier_id' => 1,
                'created_at' => '2018-11-26 14:07:43',
                'updated_at' => '2018-11-26 14:07:43',
            ),
            203 => 
            array (
                'id' => 206,
                'qte' => 1,
                'purchasing_price' => 1175.0,
                'product_id' => 189,
                'supplier_id' => 1,
                'created_at' => '2018-11-26 14:08:25',
                'updated_at' => '2018-11-26 14:08:25',
            ),
            204 => 
            array (
                'id' => 207,
                'qte' => 4,
                'purchasing_price' => 18.0,
                'product_id' => 191,
                'supplier_id' => 1,
                'created_at' => '2018-11-26 18:05:26',
                'updated_at' => '2018-11-26 18:05:26',
            ),
            205 => 
            array (
                'id' => 208,
                'qte' => 5,
                'purchasing_price' => 17.0,
                'product_id' => 192,
                'supplier_id' => 1,
                'created_at' => '2018-11-26 18:09:36',
                'updated_at' => '2018-11-26 18:09:36',
            ),
            206 => 
            array (
                'id' => 209,
                'qte' => 1,
                'purchasing_price' => 75.0,
                'product_id' => 193,
                'supplier_id' => 10,
                'created_at' => '2018-11-26 18:15:15',
                'updated_at' => '2018-11-26 18:15:15',
            ),
            207 => 
            array (
                'id' => 210,
                'qte' => 1,
                'purchasing_price' => 75.0,
                'product_id' => 193,
                'supplier_id' => 10,
                'created_at' => '2018-11-26 18:15:40',
                'updated_at' => '2018-11-26 18:15:40',
            ),
            208 => 
            array (
                'id' => 211,
                'qte' => 1,
                'purchasing_price' => 17.5,
                'product_id' => 194,
                'supplier_id' => 1,
                'created_at' => '2018-11-26 19:55:16',
                'updated_at' => '2018-11-26 19:55:16',
            ),
            209 => 
            array (
                'id' => 212,
                'qte' => 1,
                'purchasing_price' => 570.0,
                'product_id' => 195,
                'supplier_id' => 1,
                'created_at' => '2018-11-27 11:16:14',
                'updated_at' => '2018-11-27 11:16:14',
            ),
            210 => 
            array (
                'id' => 213,
                'qte' => 1,
                'purchasing_price' => 1350.0,
                'product_id' => 196,
                'supplier_id' => 1,
                'created_at' => '2018-11-27 11:18:09',
                'updated_at' => '2018-11-27 11:18:09',
            ),
            211 => 
            array (
                'id' => 214,
                'qte' => 2,
                'purchasing_price' => 950.0,
                'product_id' => 132,
                'supplier_id' => 3,
                'created_at' => '2018-11-27 11:24:55',
                'updated_at' => '2018-11-27 11:24:55',
            ),
            212 => 
            array (
                'id' => 215,
                'qte' => 1,
                'purchasing_price' => 1390.0,
                'product_id' => 196,
                'supplier_id' => 3,
                'created_at' => '2018-11-27 11:27:50',
                'updated_at' => '2018-11-27 11:27:50',
            ),
            213 => 
            array (
                'id' => 216,
                'qte' => 1,
                'purchasing_price' => 3010.0,
                'product_id' => 198,
                'supplier_id' => 3,
                'created_at' => '2018-11-27 11:28:30',
                'updated_at' => '2018-11-27 11:28:30',
            ),
            214 => 
            array (
                'id' => 217,
                'qte' => 3,
                'purchasing_price' => 1030.0,
                'product_id' => 1,
                'supplier_id' => 3,
                'created_at' => '2018-11-27 11:29:21',
                'updated_at' => '2018-11-27 11:29:21',
            ),
            215 => 
            array (
                'id' => 218,
                'qte' => 3,
                'purchasing_price' => 1030.0,
                'product_id' => 199,
                'supplier_id' => 3,
                'created_at' => '2018-11-27 11:31:02',
                'updated_at' => '2018-11-27 11:31:02',
            ),
            216 => 
            array (
                'id' => 219,
                'qte' => 1770,
                'purchasing_price' => 1.0,
                'product_id' => 200,
                'supplier_id' => 2,
                'created_at' => '2018-11-27 13:36:52',
                'updated_at' => '2018-11-27 13:36:52',
            ),
            217 => 
            array (
                'id' => 220,
                'qte' => 1,
                'purchasing_price' => 1049.0,
                'product_id' => 201,
                'supplier_id' => 2,
                'created_at' => '2018-11-27 13:38:11',
                'updated_at' => '2018-11-27 13:38:11',
            ),
            218 => 
            array (
                'id' => 221,
                'qte' => 10,
                'purchasing_price' => 23.0,
                'product_id' => 202,
                'supplier_id' => 1,
                'created_at' => '2018-11-28 16:12:28',
                'updated_at' => '2018-11-28 16:12:28',
            ),
            219 => 
            array (
                'id' => 222,
                'qte' => 3,
                'purchasing_price' => 27.0,
                'product_id' => 155,
                'supplier_id' => 1,
                'created_at' => '2018-11-28 16:18:48',
                'updated_at' => '2018-11-28 16:18:48',
            ),
            220 => 
            array (
                'id' => 223,
                'qte' => 1,
                'purchasing_price' => 40.0,
                'product_id' => 203,
                'supplier_id' => 11,
                'created_at' => '2018-11-28 16:22:56',
                'updated_at' => '2018-11-28 16:22:56',
            ),
            221 => 
            array (
                'id' => 224,
                'qte' => 5,
                'purchasing_price' => 55.0,
                'product_id' => 204,
                'supplier_id' => 11,
                'created_at' => '2018-11-28 16:26:19',
                'updated_at' => '2018-11-28 16:26:19',
            ),
            222 => 
            array (
                'id' => 225,
                'qte' => 4,
                'purchasing_price' => 28.0,
                'product_id' => 205,
                'supplier_id' => 11,
                'created_at' => '2018-11-28 16:28:51',
                'updated_at' => '2018-11-28 16:28:51',
            ),
            223 => 
            array (
                'id' => 226,
                'qte' => 5,
                'purchasing_price' => 5.0,
                'product_id' => 206,
                'supplier_id' => 11,
                'created_at' => '2018-11-28 16:30:40',
                'updated_at' => '2018-11-28 16:30:40',
            ),
            224 => 
            array (
                'id' => 227,
                'qte' => 30,
                'purchasing_price' => 1.2,
                'product_id' => 207,
                'supplier_id' => 11,
                'created_at' => '2018-11-28 16:33:07',
                'updated_at' => '2018-11-28 16:33:07',
            ),
            225 => 
            array (
                'id' => 228,
                'qte' => 5,
                'purchasing_price' => 31.0,
                'product_id' => 208,
                'supplier_id' => 1,
                'created_at' => '2018-11-28 18:56:32',
                'updated_at' => '2018-11-28 18:56:32',
            ),
            226 => 
            array (
                'id' => 229,
                'qte' => 10,
                'purchasing_price' => 31.0,
                'product_id' => 209,
                'supplier_id' => 11,
                'created_at' => '2018-11-29 12:45:18',
                'updated_at' => '2018-11-29 12:45:18',
            ),
            227 => 
            array (
                'id' => 230,
                'qte' => 1,
                'purchasing_price' => 1390.0,
                'product_id' => 197,
                'supplier_id' => 3,
                'created_at' => '2018-12-03 13:02:13',
                'updated_at' => '2018-12-03 13:02:13',
            ),
            228 => 
            array (
                'id' => 231,
                'qte' => 1,
                'purchasing_price' => 1030.0,
                'product_id' => 199,
                'supplier_id' => 3,
                'created_at' => '2018-12-05 11:50:49',
                'updated_at' => '2018-12-05 11:50:49',
            ),
            229 => 
            array (
                'id' => 232,
                'qte' => 1,
                'purchasing_price' => 1320.0,
                'product_id' => 210,
                'supplier_id' => 3,
                'created_at' => '2018-12-05 11:51:14',
                'updated_at' => '2018-12-05 11:51:14',
            ),
            230 => 
            array (
                'id' => 233,
                'qte' => 1,
                'purchasing_price' => 1520.0,
                'product_id' => 211,
                'supplier_id' => 3,
                'created_at' => '2018-12-05 11:52:08',
                'updated_at' => '2018-12-05 11:52:08',
            ),
            231 => 
            array (
                'id' => 234,
                'qte' => 1,
                'purchasing_price' => 111.0,
                'product_id' => 212,
                'supplier_id' => 1,
                'created_at' => '2018-12-05 12:45:06',
                'updated_at' => '2018-12-05 12:45:06',
            ),
            232 => 
            array (
                'id' => 235,
                'qte' => 2,
                'purchasing_price' => 200.0,
                'product_id' => 213,
                'supplier_id' => 4,
                'created_at' => '2018-12-05 15:07:29',
                'updated_at' => '2018-12-05 15:07:29',
            ),
            233 => 
            array (
                'id' => 236,
                'qte' => 2,
                'purchasing_price' => 200.0,
                'product_id' => 214,
                'supplier_id' => 4,
                'created_at' => '2018-12-05 15:09:01',
                'updated_at' => '2018-12-05 15:09:01',
            ),
            234 => 
            array (
                'id' => 237,
                'qte' => 1,
                'purchasing_price' => 95.0,
                'product_id' => 215,
                'supplier_id' => 4,
                'created_at' => '2018-12-05 15:11:54',
                'updated_at' => '2018-12-05 15:11:54',
            ),
            235 => 
            array (
                'id' => 238,
                'qte' => 4,
                'purchasing_price' => 85.0,
                'product_id' => 216,
                'supplier_id' => 4,
                'created_at' => '2018-12-05 15:14:20',
                'updated_at' => '2018-12-05 15:14:20',
            ),
            236 => 
            array (
                'id' => 239,
                'qte' => 5,
                'purchasing_price' => 500.0,
                'product_id' => 217,
                'supplier_id' => 4,
                'created_at' => '2018-12-05 15:20:21',
                'updated_at' => '2018-12-05 15:20:21',
            ),
            237 => 
            array (
                'id' => 240,
                'qte' => 1,
                'purchasing_price' => 850.0,
                'product_id' => 218,
                'supplier_id' => 1,
                'created_at' => '2018-12-05 15:21:29',
                'updated_at' => '2018-12-05 15:21:29',
            ),
            238 => 
            array (
                'id' => 241,
                'qte' => 3,
                'purchasing_price' => 45.0,
                'product_id' => 219,
                'supplier_id' => 4,
                'created_at' => '2018-12-05 15:26:12',
                'updated_at' => '2018-12-05 15:26:12',
            ),
            239 => 
            array (
                'id' => 242,
                'qte' => 2,
                'purchasing_price' => 160.0,
                'product_id' => 220,
                'supplier_id' => 4,
                'created_at' => '2018-12-05 15:28:36',
                'updated_at' => '2018-12-05 15:28:36',
            ),
            240 => 
            array (
                'id' => 243,
                'qte' => 1,
                'purchasing_price' => 1390.0,
                'product_id' => 221,
                'supplier_id' => 1,
                'created_at' => '2018-12-06 11:14:00',
                'updated_at' => '2018-12-06 11:14:00',
            ),
            241 => 
            array (
                'id' => 244,
                'qte' => 1,
                'purchasing_price' => 1770.0,
                'product_id' => 222,
                'supplier_id' => 2,
                'created_at' => '2018-12-06 11:17:34',
                'updated_at' => '2018-12-06 11:17:34',
            ),
            242 => 
            array (
                'id' => 245,
                'qte' => 1,
                'purchasing_price' => 75.0,
                'product_id' => 107,
                'supplier_id' => 1,
                'created_at' => '2018-12-06 15:48:58',
                'updated_at' => '2018-12-06 15:48:58',
            ),
            243 => 
            array (
                'id' => 246,
                'qte' => 4,
                'purchasing_price' => 39.0,
                'product_id' => 224,
                'supplier_id' => 4,
                'created_at' => '2018-12-06 16:58:34',
                'updated_at' => '2018-12-06 16:58:34',
            ),
            244 => 
            array (
                'id' => 247,
                'qte' => 1,
                'purchasing_price' => 750.0,
                'product_id' => 225,
                'supplier_id' => 4,
                'created_at' => '2018-12-06 17:03:22',
                'updated_at' => '2018-12-06 17:03:22',
            ),
            245 => 
            array (
                'id' => 248,
                'qte' => 4,
                'purchasing_price' => 35.0,
                'product_id' => 226,
                'supplier_id' => 4,
                'created_at' => '2018-12-06 17:14:28',
                'updated_at' => '2018-12-06 17:14:28',
            ),
            246 => 
            array (
                'id' => 249,
                'qte' => 2,
                'purchasing_price' => 70.0,
                'product_id' => 227,
                'supplier_id' => 1,
                'created_at' => '2018-12-06 17:39:36',
                'updated_at' => '2018-12-06 17:39:36',
            ),
            247 => 
            array (
                'id' => 250,
                'qte' => 4,
                'purchasing_price' => 17.0,
                'product_id' => 92,
                'supplier_id' => 6,
                'created_at' => '2018-12-06 19:17:21',
                'updated_at' => '2018-12-06 19:17:21',
            ),
            248 => 
            array (
                'id' => 251,
                'qte' => 3,
                'purchasing_price' => 17.0,
                'product_id' => 228,
                'supplier_id' => 1,
                'created_at' => '2018-12-06 19:21:44',
                'updated_at' => '2018-12-06 19:21:44',
            ),
            249 => 
            array (
                'id' => 252,
                'qte' => 4,
                'purchasing_price' => 20.0,
                'product_id' => 229,
                'supplier_id' => 6,
                'created_at' => '2018-12-06 19:23:36',
                'updated_at' => '2018-12-06 19:23:36',
            ),
            250 => 
            array (
                'id' => 253,
                'qte' => 2,
                'purchasing_price' => 205.0,
                'product_id' => 230,
                'supplier_id' => 4,
                'created_at' => '2018-12-06 19:28:57',
                'updated_at' => '2018-12-06 19:28:57',
            ),
            251 => 
            array (
                'id' => 254,
                'qte' => 1,
                'purchasing_price' => 1320.0,
                'product_id' => 210,
                'supplier_id' => 3,
                'created_at' => '2018-12-11 11:17:21',
                'updated_at' => '2018-12-11 11:17:21',
            ),
            252 => 
            array (
                'id' => 255,
                'qte' => 1,
                'purchasing_price' => 1020.0,
                'product_id' => 231,
                'supplier_id' => 3,
                'created_at' => '2018-12-11 11:18:58',
                'updated_at' => '2018-12-11 11:18:58',
            ),
            253 => 
            array (
                'id' => 256,
                'qte' => 1,
                'purchasing_price' => 1045.0,
                'product_id' => 232,
                'supplier_id' => 1,
                'created_at' => '2018-12-11 17:04:55',
                'updated_at' => '2018-12-11 17:04:55',
            ),
            254 => 
            array (
                'id' => 257,
                'qte' => 1,
                'purchasing_price' => 1450.0,
                'product_id' => 233,
                'supplier_id' => 1,
                'created_at' => '2018-12-11 17:06:20',
                'updated_at' => '2018-12-11 17:06:20',
            ),
            255 => 
            array (
                'id' => 258,
                'qte' => 7,
                'purchasing_price' => 13.0,
                'product_id' => 234,
                'supplier_id' => 4,
                'created_at' => '2018-12-11 19:52:38',
                'updated_at' => '2018-12-11 19:52:38',
            ),
            256 => 
            array (
                'id' => 259,
                'qte' => 20,
                'purchasing_price' => 10.0,
                'product_id' => 235,
                'supplier_id' => 4,
                'created_at' => '2018-12-11 20:00:50',
                'updated_at' => '2018-12-11 20:00:50',
            ),
            257 => 
            array (
                'id' => 260,
                'qte' => 8,
                'purchasing_price' => 4.5,
                'product_id' => 236,
                'supplier_id' => 7,
                'created_at' => '2018-12-12 12:22:48',
                'updated_at' => '2018-12-12 12:22:48',
            ),
            258 => 
            array (
                'id' => 261,
                'qte' => 8,
                'purchasing_price' => 4.0,
                'product_id' => 44,
                'supplier_id' => 7,
                'created_at' => '2018-12-12 12:24:46',
                'updated_at' => '2018-12-12 12:24:46',
            ),
            259 => 
            array (
                'id' => 262,
                'qte' => 2,
                'purchasing_price' => 1010.0,
                'product_id' => 237,
                'supplier_id' => 3,
                'created_at' => '2018-12-15 12:07:40',
                'updated_at' => '2018-12-15 12:07:40',
            ),
            260 => 
            array (
                'id' => 263,
                'qte' => 1,
                'purchasing_price' => 1320.0,
                'product_id' => 210,
                'supplier_id' => 3,
                'created_at' => '2018-12-15 12:08:26',
                'updated_at' => '2018-12-15 12:08:26',
            ),
            261 => 
            array (
                'id' => 264,
                'qte' => 1,
                'purchasing_price' => 1290.0,
                'product_id' => 238,
                'supplier_id' => 3,
                'created_at' => '2018-12-15 12:09:17',
                'updated_at' => '2018-12-15 12:09:17',
            ),
            262 => 
            array (
                'id' => 265,
                'qte' => 2,
                'purchasing_price' => 900.0,
                'product_id' => 239,
                'supplier_id' => 3,
                'created_at' => '2018-12-15 12:10:16',
                'updated_at' => '2018-12-15 12:10:16',
            ),
            263 => 
            array (
                'id' => 266,
                'qte' => 1,
                'purchasing_price' => 1045.0,
                'product_id' => 232,
                'supplier_id' => 1,
                'created_at' => '2018-12-15 12:21:54',
                'updated_at' => '2018-12-15 12:21:54',
            ),
            264 => 
            array (
                'id' => 267,
                'qte' => 20,
                'purchasing_price' => 6.5,
                'product_id' => 240,
                'supplier_id' => 6,
                'created_at' => '2018-12-15 12:31:52',
                'updated_at' => '2018-12-15 12:31:52',
            ),
            265 => 
            array (
                'id' => 268,
                'qte' => 1,
                'purchasing_price' => 1320.0,
                'product_id' => 210,
                'supplier_id' => 3,
                'created_at' => '2018-12-16 19:15:41',
                'updated_at' => '2018-12-16 19:15:41',
            ),
            266 => 
            array (
                'id' => 269,
                'qte' => 2,
                'purchasing_price' => 28.0,
                'product_id' => 205,
                'supplier_id' => 6,
                'created_at' => '2018-12-17 17:05:57',
                'updated_at' => '2018-12-17 17:05:57',
            ),
            267 => 
            array (
                'id' => 270,
                'qte' => 3,
                'purchasing_price' => 17.0,
                'product_id' => 228,
                'supplier_id' => 6,
                'created_at' => '2018-12-18 11:30:07',
                'updated_at' => '2018-12-18 11:30:07',
            ),
            268 => 
            array (
                'id' => 271,
                'qte' => 2,
                'purchasing_price' => 16.0,
                'product_id' => 105,
                'supplier_id' => 6,
                'created_at' => '2018-12-18 11:31:46',
                'updated_at' => '2018-12-18 11:31:46',
            ),
            269 => 
            array (
                'id' => 272,
                'qte' => 2,
                'purchasing_price' => 15.0,
                'product_id' => 97,
                'supplier_id' => 6,
                'created_at' => '2018-12-18 11:34:26',
                'updated_at' => '2018-12-18 11:34:26',
            ),
            270 => 
            array (
                'id' => 273,
                'qte' => 1,
                'purchasing_price' => 13.0,
                'product_id' => 79,
                'supplier_id' => 6,
                'created_at' => '2018-12-18 11:35:19',
                'updated_at' => '2018-12-18 11:35:19',
            ),
            271 => 
            array (
                'id' => 274,
                'qte' => 5,
                'purchasing_price' => 35.0,
                'product_id' => 241,
                'supplier_id' => 1,
                'created_at' => '2018-12-20 18:25:34',
                'updated_at' => '2018-12-20 18:25:34',
            ),
            272 => 
            array (
                'id' => 275,
                'qte' => 5,
                'purchasing_price' => 38.0,
                'product_id' => 242,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:28:31',
                'updated_at' => '2018-12-20 18:28:31',
            ),
            273 => 
            array (
                'id' => 276,
                'qte' => 5,
                'purchasing_price' => 60.0,
                'product_id' => 243,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:31:03',
                'updated_at' => '2018-12-20 18:31:03',
            ),
            274 => 
            array (
                'id' => 277,
                'qte' => 3,
                'purchasing_price' => 195.0,
                'product_id' => 214,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:33:56',
                'updated_at' => '2018-12-20 18:33:56',
            ),
            275 => 
            array (
                'id' => 278,
                'qte' => 1,
                'purchasing_price' => 190.0,
                'product_id' => 244,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:35:47',
                'updated_at' => '2018-12-20 18:35:47',
            ),
            276 => 
            array (
                'id' => 279,
                'qte' => 2,
                'purchasing_price' => 150.0,
                'product_id' => 245,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:38:59',
                'updated_at' => '2018-12-20 18:38:59',
            ),
            277 => 
            array (
                'id' => 280,
                'qte' => 1,
                'purchasing_price' => 150.0,
                'product_id' => 246,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:40:18',
                'updated_at' => '2018-12-20 18:40:18',
            ),
            278 => 
            array (
                'id' => 281,
                'qte' => 2,
                'purchasing_price' => 23.0,
                'product_id' => 247,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:46:10',
                'updated_at' => '2018-12-20 18:46:10',
            ),
            279 => 
            array (
                'id' => 282,
                'qte' => 2,
                'purchasing_price' => 55.0,
                'product_id' => 248,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:48:01',
                'updated_at' => '2018-12-20 18:48:01',
            ),
            280 => 
            array (
                'id' => 283,
                'qte' => 2,
                'purchasing_price' => 45.0,
                'product_id' => 249,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:49:18',
                'updated_at' => '2018-12-20 18:49:18',
            ),
            281 => 
            array (
                'id' => 284,
                'qte' => 2,
                'purchasing_price' => 220.0,
                'product_id' => 250,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:51:52',
                'updated_at' => '2018-12-20 18:51:52',
            ),
            282 => 
            array (
                'id' => 285,
                'qte' => 2,
                'purchasing_price' => 145.0,
                'product_id' => 251,
                'supplier_id' => 12,
                'created_at' => '2018-12-20 18:53:40',
                'updated_at' => '2018-12-20 18:53:40',
            ),
        ));
        
        
    }
}