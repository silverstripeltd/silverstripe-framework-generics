<?php

namespace SilverStripe\Type\Tests;

use Generator;
use PHPStan\Testing\TypeInferenceTestCase;
use function glob;

class ArrayListTypeTest extends TypeInferenceTestCase
{
    public function typeArrayListAsserts(): Generator
    {
        $typeTests = glob(__DIR__ . '/data/arraylist-types.php') ?: [];

        foreach ($typeTests as $typeTest) {
            yield from $this->gatherAssertTypes($typeTest);
        }
    }

    /**
     * @dataProvider typeArrayListAsserts
     */
    public function testArrayListAsserts(string $assertType, string $file, mixed ...$args): void
    {
        $this->assertFileAsserts($assertType, $file, ...$args);
    }
}
