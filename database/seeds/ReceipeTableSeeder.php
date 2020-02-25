<?php

use Illuminate\Database\Seeder;

class ReceipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipe')->insert([
            'name' => 'Ramen',
            'ingredients' => 'salt, noodles, meat',
            'category' => 'Japanese Food',
        ]);
    }
}
