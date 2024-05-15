<?php

namespace Database\Seeders;

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
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$j0LvYczo1XZzfo/C8J6K1uOusqHhkG4RTLnWcv0M9MQQDpQ3TtcUy',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'R3D3W6mo2TFiQVdDxdnQsBajbgmZRczhEbGJt4wACFjp2DFQopAeMA1m4tyd',
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-05-15 05:10:11',
                'updated_at' => '2024-05-15 05:10:11',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Althaf Rifath',
                'email' => 'althafrifath@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$Z0a79tLJ9Jn6Pi9d1tFiz.4C2NqYcVJ2r0cWKCiZ/SLTEiC2OVKgG',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-05-15 05:21:55',
                'updated_at' => '2024-05-15 05:21:55',
            ),
        ));
        
        
    }
}