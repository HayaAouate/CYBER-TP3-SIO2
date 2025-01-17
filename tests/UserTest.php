<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserName(): void
    {
        $user= new User();
        $user->setName('John Doe');
        $this->assertEquals('John Doe', $user->getName());
    }
    public function testUserEmail(): void
    {
        $user= new User();
        $user->setEmail('johndoe@me.com');
        $this->assertEquals('johndoe@me.com', $user->getEmail());
    }
}
