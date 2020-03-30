<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \App\User::truncate();

        $user = new \App\User();
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->mobile = "0555018490";
        $user->role = "admin";
        $user->image = "users/1.png";
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->password = bcrypt('123456');
        $user->save();





        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
