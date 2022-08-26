<?php

use PHPUnit\Framework\TestCase;
use Seffeng\FormatHelper\Format;

class FormatTest extends TestCase
{
    public function testSizeFormat()
    {
        var_dump(Format::sizeFormat(1024 * 1024 * 1024 * 1023));
    }
}