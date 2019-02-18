<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Tom',
                'email' => 'tomtong81@gmail.com',
                'password' => 'password',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        );
        DB::table('posts')->insert([
            [
                'title' => 'My First Post',
                'content' => 'lorem ipsum dolor sit ammet',
                'user_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ], [
                'title' => 'My second Post',
                'content' => 'lorem ipsum dolor sit ammet',
                'user_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ], [
                'title' => 'My third Post',
                'content' => 'lorem ipsum dolor sit ammet',
                'user_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ]);
    }

}
