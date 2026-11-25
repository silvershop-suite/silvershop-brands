<?php

declare(strict_types=1);

namespace SilverShop\Brands\Tests;

use SilverShop\Brands\Search\BrandFacet;
use SilverShop\Search\Facet\SearchFacet;
use SilverStripe\Dev\SapphireTest;

/**
 * silvershop-suite/search is optional: the class that plugs into it exists only when that module does.
 * CI also runs this suite without it, where a class that can't be loaded fails the first flush.
 */
class StandaloneTest extends SapphireTest
{
    protected $usesDatabase = false;

    public function testOptionalClassFollowsItsModule(): void
    {
        $this->assertSame(
            interface_exists(SearchFacet::class),
            class_exists(BrandFacet::class)
        );
    }
}
