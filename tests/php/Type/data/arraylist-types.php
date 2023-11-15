<?php

namespace SilverStripe\Type\Tests\data;

use SilverStripe\Assets\File;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\ArrayData;

use function PHPStan\Testing\assertType;

assertType(
    'iterable<' . File::class . '>',
    (new ArrayList([new File()]))->getIterator()
);

assertType(
    'iterable<' . ArrayData::class . '>',
    (new ArrayList([
        ['Field' => 'Value']
    ]))->getIterator()
);

assertType(
    'iterable<' . ArrayData::class . '>',
    (new ArrayList([
        new ArrayData(['Field' => 'Value'])
    ]))->getIterator()
);
