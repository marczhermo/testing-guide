<?php

namespace App\Tests;

use SilverStripe\Dev\Debug;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\ORM\FieldType\DBDatetime;

class SSDateTimeTest extends SapphireTest
{
    private $mockNow = '2020-10-20 12:34:56';

    protected function setUp()
    {
        DBDatetime::set_mock_now($this->mockNow);
        parent::setUp();
    }

    public function testMockNow()
    {
        $nowDatetime = DBDatetime::now();

        $this->assertEquals('2020-10-20 12:34:56', $nowDatetime->getValue());
    }

    public function testLessTenMinutes()
    {
        $nowDatetime = DBDatetime::now();
        $nowDatetime->modify('now - 10 minutes');

        $this->assertEquals('2020-10-20 12:24:56', $nowDatetime->getValue());
    }

    public function testAddTenMinutes()
    {
        $nowDatetime = DBDatetime::now();
        $nowDatetime->modify('now + 10 minutes');

        $this->assertEquals('2020-10-20 12:44:56', $nowDatetime->getValue());
    }

    protected function tearDown()
    {
        DBDatetime::clear_mock_now();
        parent::tearDown();
    }
}
