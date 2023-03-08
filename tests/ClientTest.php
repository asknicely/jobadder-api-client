<?php

namespace Varspool\JobAdder;

use PHPUnit\Framework\TestCase;
use Varspool\JobAdder\V2\Client as JobAdderClient;

class ClientTest extends TestCase
{
    public function testConstructor()
    {
        $client = JobAdderClient::create();
        $this->assertInstanceOf(JobAdderClient::class, $client);
    }
}
