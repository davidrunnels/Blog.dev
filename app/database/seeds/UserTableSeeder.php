<?php

class UserTableSeeder extends Seeder {
    
    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = $_ENV['DEFAULT_USER_EMAIL'];
        $user->password = $_ENV['DEFAULT_USER_PASSWORD'];
        $user->last_name = $_ENV['DEFAULT_USER_LAST_NAME'];
        $user->first_name = $_ENV['DEFAULT_USER_FIRST_NAME'];
        $user->save();
    }

}