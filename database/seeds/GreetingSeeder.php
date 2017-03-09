<?php

use Illuminate\Database\Seeder;

class GreetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $greetings = \DB::table('greetings');
        $greetings->delete();

        $greetings->insert([
            'body'    => 'PHP with Lavarel,我来了!!!'
        ]);
    }
}
