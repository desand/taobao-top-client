<?php
namespace TaobaoTopClientTest;

use PHPUnit_Framework_TestCase;
use TaobaoTopClient\TopClient;

class LoadRequestTest extends PHPUnit_Framework_TestCase
{
    public function testLoad()
    {
        $topClient = new TopClient();

        $request = $topClient->getRequest('ShopGetRequest');
        $this->assertInstanceOf('ShopGetRequest', $request);

        return $request;
    }

    /**
     * @depends testLoad
     */
    public function testCheck($request)
    {
        $request->setNick('abc');
        $request->setFields('sid');

        $this->assertNull($request->check());
    }
}
