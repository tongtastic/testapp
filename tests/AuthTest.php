<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class TestAuth extends TestCase
{
    /**
     * Test auth middleware returns 403 response.
     *
     * @return void
     */
    public function testAuthResponseCode()
    {

        $response = $this->call( 'GET', '/' );

        $this->assertEquals( 403, $response->status() );

    }

    /**
     * Test auth middleware returns Unauthrised response message.
     *
     * @return void
     */
    public function testAuthResponseMessage()
    {

        $this->get('/')->seeJsonEquals([
            'error' => 'Unauthorised.',
        ]);

    }

    /**
     * Test auth middleware allows token access and returns correct code.
     *
     * @return void
     */
    public function testTokenAccessResponseCode()
    {

        $response = $this->call( 'GET', '/?token=' . env('APP_TOKEN') );

        $this->assertEquals( 200, $response->status() );

    }

    /**
     * Test auth middleware allows token access and returns app version.
     *
     * @return void
     */
    public function testTokenAccessResponseMessage()
    {

        $response = $this->call( 'GET', '/?token=' . env('APP_TOKEN') );

        $this->assertEquals( $this->app->version(), $response->getContent() );

    }

}
