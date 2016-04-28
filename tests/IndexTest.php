<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
    	/*DB::table('posts')->insert(
    		array(
    			'titulo' => 'nuevo ttitulo', 
    			'contenido'=>'contenido de ejemplo',
    			);
    		);
    		*/
        $this->assertTrue(true);
        $this->visit('/')
        		->see('laravel 5');

    }
}
