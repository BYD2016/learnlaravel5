<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = \DB::table('articles');
        $articles->delete();

	    for ($i=0; $i < 10; $i++) {
	        $articles->insert([
	            'title'   => 'Title '.$i,
	            'body'    => 'Body '.$i,
	            'user_id' => 1,
	        ]);
	    }
    }
}
