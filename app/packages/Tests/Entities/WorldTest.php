<?php

namespace ClusterWorldHelper\Tests\Entities;

use PHPUnit\Framework\TestCase;
use ClusterWorldHelper\Entities\World;

class WorldTest extends TestCase
{
    function testProperty(){
        $this->assertClassHasAttribute('canEntry', World::class);
        $this->assertClassHasAttribute('creator', World::class);
        $this->assertClassHasAttribute('description', World::class);
        $this->assertClassHasAttribute('id', World::class);
        $this->assertClassHasAttribute('name', World::class);
        $this->assertClassHasAttribute('originalImageUrl', World::class);
        $this->assertClassHasAttribute('sdkType', World::class);
        $this->assertClassHasAttribute('sdkVersion', World::class);
        $this->assertClassHasAttribute('thumbnailUrl', World::class);
        $this->assertClassHasAttribute('venueCreatedAt', World::class);
        $this->assertClassHasAttribute('venueSize', World::class);
        $this->assertClassHasAttribute('venueUpdatedAt', World::class);
        $this->assertClassHasAttribute('webUrl', World::class);
    }
}
