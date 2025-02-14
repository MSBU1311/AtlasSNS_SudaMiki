<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username'=>'Atlasone',
            'mail'=>'Atlasone@atlas.sns',
            'password'=>bcrypt('1111'),
            'bio'=>'Atlasoneです。'],
            ['username'=>'Atlastwo',
            'mail'=>'Atlastow@atlas.sns',
            'password'=>bcrypt('2222'),
            'bio'=>'Atlastwoです。'],
            ['username'=>'Atlasthree',
            'mail'=>'Atlasthree@atlas.sns',
            'password'=>bcrypt('3333'),
            'bio'=>'Atlasthreeです。']

        ]);
    }
}
