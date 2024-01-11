<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once(dirname(__FILE__) . '/../Production.php');

class Test extends TestCase
{
    /**
     * @test
     */
    public function text_is_long(): void
    {
        $text = 'abcde';

        $sut = isStringLong($text);

        $this->assertSame(true, $sut);
    }
}
