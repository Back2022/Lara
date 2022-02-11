<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use \GuzzleHttp\Client;

class GuzzleTest extends TestCase {

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDohvatiStranicuIspodUzPomocGuzzle() {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost:8000/ispod', [
            'auth' => ['user', 'pass']
        ]);
        $this->assertEquals('200', $res->getStatusCode());
        $this->assertEquals('text/html; charset=UTF-8', $res->getHeader('content-type')[0]);
        //var_dump($res);
        
    }
        public function testDohvatiStranicuGreeting() {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost:8000/greeting');
        $this->assertEquals('200', $res->getStatusCode());
        $this->assertEquals('text/html; charset=UTF-8', $res->getHeader('content-type')[0]);
        //var_dump($res);
        
    }


}
