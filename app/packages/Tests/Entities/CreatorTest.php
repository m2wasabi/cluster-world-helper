<?php

namespace ClusterWorldHelper\Tests\Entities;

use PHPUnit\Framework\TestCase;
use ClusterWorldHelper\Entities\Creator;

class CreatorTest extends TestCase
{
    function testProperty(){
        $this->assertClassHasAttribute('displayName', Creator::class);
        $this->assertClassHasAttribute('photoUrl', Creator::class);
        $this->assertClassHasAttribute('userId', Creator::class);
        $this->assertClassHasAttribute('username', Creator::class);
    }
}
