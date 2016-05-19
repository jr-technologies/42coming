<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testUserRegistration()
    {
        $this->visit('/')
            ->type('fName', 'noman')
            ->type('lName', 'tufail')
            ->type('email', 'hhh@gmail.com')
            ->type('password', '123')
            ->press('register')
            ->see('you are registered successfully');
    }
}
