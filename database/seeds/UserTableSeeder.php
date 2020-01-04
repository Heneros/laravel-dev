<?php

use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Автор не известен',
                'email' => 'author_unknown.g',
                'password' => bcrypt(str_random(16)),
            ],
            [
                'name'=> 'Автор',
                'email' => 'author@g.g',
                'password' => bcrypt('123123'),
            ],
            ];
            DB::table('users')->insert($data);
    }
}