<?php namespace Elozoya\LaravelCommon\Unit;

use PHPUnit_Framework_TestCase;
use Mockery as m;
use Elozoya\LaravelCommon\RequestMetaAttributes;
use \Illuminate\Support\Facades\Request;

/*
 * RequestMetaAttributesTest
 * =========================
 *
 */
class RequestMetaAttributesTest extends PHPUnit_Framework_TestCase
{
    private $requestMetaAttributes;

    public function setUp()
    {
        $this->requestMetaAttributes = new RequestMetaAttributes;
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
    public function it_should_add_a_class_named_RequestMetaAttributes()
    {
        $this->assertInstanceOf('Elozoya\LaravelCommon\RequestMetaAttributes', $this->requestMetaAttributes);
    }

    /**
     * It should return a list of some meta attributes
     *
     * @return void
     * @test
     */
    public function it_should_return_a_list_of_some_meta_attributes()
    {
        $ip = '192.168.1.1';
        Request::shouldReceive('ip')->withNoArgs()->once()->andReturn($ip);
        $metaAttributes = $this->requestMetaAttributes->getMetaAttributes();
        $expected = [
          'meta_ip_address' => $ip,
        ];
        $this->assertEquals($expected, $metaAttributes);
    }

    /**
     * It should return a list of input and meta attributes
     *
     * @return void
     * @test
     */
    public function it_should_return_a_list_of_input_and_meta_attributes()
    {
        $ip = '192.168.1.1';
        $input = [
            'foo' => 'foo',
            'bar' => 'bar',
        ];
        Request::shouldReceive('ip')->withNoArgs()->once()->andReturn($ip);
        Request::shouldReceive('all')->withNoArgs()->once()->andReturn($input);
        $inputAndMetaAttributes = $this->requestMetaAttributes->getInputAndMetaAttributes();
        $expected = [
          'meta_ip_address' => $ip,
          'foo' => 'foo',
          'bar' => 'bar',
        ];
        $this->assertEquals($expected, $inputAndMetaAttributes);
    }
}
