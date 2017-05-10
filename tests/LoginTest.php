<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function signIn(){

        $this->visit('/')
            ->type('700','userid')
            ->type('gamini','password');

    }

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
