<?php

class TransactionTest extends TestCase
{
    /**
     * A transaction test.
     *
     * @return void
     */
    public function testTransaction()
    {
        $this->json('POST', '/transactions', ['amount' => 10.01], 
            [
                'HTTP_Authorization' => env('ACCEPTED_KEYS'),
                'Content-Type' => 'application/json'
            ]
        );
        $this->seeStatusCode(200);
    }
}