<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    function aUserIsValid() {

        $user = new User("lancelotdemay@test.com", "Lancelot", "Demay", 23);

        $this->assertTrue($user->isValid());
    }

    /** @test */
    function aUserHasNoEmail() {

        $user = new User( "","Lancelot", "Demay", 23);

        $this->assertFalse($user->hasEmail());
    }

    /** @test */
    function aUserIsUnder13() {

        $user = new User("jhondoe@test.com", "Jhon", "Doe", 11);

        $this->assertFalse($user->isOver13());
    }

    /** @test */
    function aUserHasInvalidEmail() {

        $user = new User("oui.com", "Jhon", "Doe", 45);

        $this->assertFalse($user->emailIsValid());
    }

    /** @test */
    function aUserHasNoFirstName() {

        $user = new User("jhondoe@test.com", "", "Doe",20);

        $this->assertFalse($user->hasFirstName());
    }

    /** @test */
    function aUserHasNoLastName() {

        $user = new User("jhondoe@test.com", "Jhon", "",20);

        $this->assertFalse($user->hasLastName());
    }
}