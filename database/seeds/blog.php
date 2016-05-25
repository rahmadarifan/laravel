<?php

use Illuminate\Database\Seeder;

class blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blog')->insert([
            'title' => 'First',
            'subject' => 'Ini postingan pertama',
        ]);
    }
}
