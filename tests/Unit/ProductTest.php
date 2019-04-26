<?php
/**
 * Created by PhpStorm.
 * User: lens
 * Date: 26/04/2019
 * Time: 15:23
 */

namespace Tests\Unit;

use App\Product;
use App\User;
use Tests\TestCase;

class ProductTest extends TestCase
{
    private $product;
    private $user;


    /** @test */
    public function productIsValid() {

        $this->assertTrue($this->product->hasName());
        $this->assertTrue($this->product->isValid());
    }

    /** @test */
    public function productHasNoName() {
        $this->product->setName("");

        $this->assertTrue($this->product->getUser()->isValid());
        $this->assertFalse($this->product->isValid());
    }

    /** @test */
    public function productHasInvalidUser() {
       $this->user->setEmail("");

        $this->assertFalse($this->product->isValid());
    }

    protected function setUp(): void
    {
        $this->user = new User("jhondoe@test.com", "Jhon", "Doe", 23);
        $this->product = new Product("Bouteille", $this->user);

        parent::setUp();
    }
}