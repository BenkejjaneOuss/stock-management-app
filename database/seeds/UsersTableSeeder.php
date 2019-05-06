<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Genio.ma',
                'email' => 'contact@genio.ma',
                'password' => '$2y$10$mD8mMfKBaHPFrm7FYTFdZOmZt4XyMCwNrX/gEaxNHCa59f9Qgb70y',
                'remember_token' => 'NeVcPIVp28FHzEM9zQwSJtKBGkwX868GaVOqRBo93Vx57kK33UEvoXyEUU5C',
                'created_at' => '2018-09-04 09:31:35',
                'updated_at' => '2018-12-21 17:58:00',
            ),
        ));
        
        
    }
}