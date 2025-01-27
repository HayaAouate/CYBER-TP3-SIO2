<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class IndexControllerTest extends WebTestCase{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/index');

        self::assertResponseIsSuccessful();
    }
    public function testConnexion(): void

    {
        $connexion = static ::createClient();
        $connexion->request('GET', '/connexion');
        $this->assertResponseIsSuccessful("Connexion");


    }
        public function testIndexUser():void
    {
        $user = static::createClient();
        $user->request('GET', '/index/user/2');
        $this->assertResponseStatusCodeSame(404);

    }
}
