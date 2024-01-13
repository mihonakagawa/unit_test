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

    /**
     * @test
     */
    public function text_fiz(): void
    {
        $num = 3;
        // sut とは、テスト対象のこと
        $sut = fizbuzz($num);

        // assertSameメソッドは、
        // 第一引数：期待する値、　第二：テストしたい値を渡すと、
        // 比べた結果を返してくれる
        $this->assertSame('fiz', $sut);
    }

    /**
     * @test
     */
    public function text_buzz(): void
    {
        $num = 5;
        $sut = fizbuzz($num);

        $this->assertSame('buzz', $sut);
    }

    /**
     * @test
     */
    public function text_fizbuzz(): void
    {
        $num = 15;
        $sut = fizbuzz($num);

        $this->assertSame('fizbuzz', $sut);
    }

    /**
     * @test
     */
    public function text_num(): void
    {
        $num = 1;
        $sut = fizbuzz($num);

        // 先頭に(string)を挿入すると、string変換できる
        $this->assertSame((string)$num, $sut);
    }

    /**
     * @test
     */
    public function text_zero(): void
    {
        $num = 0;
        $sut = fizbuzz($num);

        // 先頭に(string)を挿入すると、string変換できる?
        $this->assertSame((string)$num, $sut);
    }
}
