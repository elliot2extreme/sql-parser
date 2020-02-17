<?php

namespace PhpMyAdmin\SqlParser\Tests\Parser;

use PhpMyAdmin\SqlParser\Tests\TestCase;

class DropStatementTest extends TestCase
{
    /**
     * @param mixed $test
     *
     * @dataProvider dropProvider
     */
    public function testDrop($test)
    {
        $this->runParserTest($test);
    }

    public function dropProvider()
    {
        return [
            ['parser/parseDrop'],
            ['parser/parseDrop2'],
        ];
    }
}