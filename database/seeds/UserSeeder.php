<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$profession = DB::select('SELECT id FROM profession LIMIT 0,1', ['Desarrollador back-end']);

        $professionId = DB::table('profession')
        ->where('title', 'Web designer')
        ->value('id');

        // $profession = DB::table('profession')->select('id');

        DB::table('users')->insert([
            'name' => 'Steve',
            'email' => 'esteban@zaldivar.com',
            'password' => bcrypt('12345'),
            'profession_id' => $professionId,
        ]);

        DB::table('users')->insert([
            'name' => 'Luke',
            'email' => 'luke@zaldivar.com',
            'password' => bcrypt('123456'),
            'profession_id' => $professionId,
        ]);
    }
}
