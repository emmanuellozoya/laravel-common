<?php namespace Elozoya\LaravelCommon\Unit;

use PHPUnit_Framework_TestCase;
use Mockery as m;
use Elozoya\LaravelCommon\UuidModelWithValidation;

/*
 * UuidModelWithValidationTest
 * ===========================
 *
 */
class UuidModelWithValidationTest extends PHPUnit_Framework_TestCase
{
    private $uuidModelWithValidation;

    public function setUp()
    {
        $this->uuidModelWithValidation = new UuidModelWithValidation;
    }

    public function tearDown()
    {
        m::close();
    }

    /**
     * It should add a class: RequestMetaAttributes
     *
     * @return void
     * @test
     */
    public function it_should_add_a_class_named_UuidModelWithValidation()
    {
        $this->assertInstanceOf('Elozoya\LaravelCommon\UuidModelWithValidation', $this->uuidModelWithValidation);
    }

    /**
     * It should use Watson\Validating\ValidatingTrait
     *
     * @test
     * @return void
     */
    public function it_should_use_WatsonValidatingValidatingTrait()
    {
      $traitList = class_uses($this->uuidModelWithValidation);
      $this->assertArrayHasKey("Watson\Validating\ValidatingTrait", $traitList);
    }

    /**
     * It should use Eloquence\Behaviours\Uuid;
     *
     * @test
     * @return void
     */
    public function it_should_use_EloquenceBehavioursUuid()
    {
      $traitList = class_uses($this->uuidModelWithValidation);
      $this->assertArrayHasKey("Eloquence\Behaviours\\Uuid", $traitList);
      $this->assertClassHasAttribute('incrementing', 'Elozoya\LaravelCommon\UuidModelWithValidation');
      $this->assertFalse($this->uuidModelWithValidation->incrementing);
    }
}
