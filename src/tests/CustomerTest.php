<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Src\Enums\Production;
use Src\Models\{
    Customer,
    Store,
};

class CustomerTest extends TestCase
{
    /**
     * @test
     */
    public function return_succeeds_with_mock(): void
    {
        $store = $this->createMock(Store::class);
        $store
            ->expects($this->once())
            ->method('addInventory')
            ->with(
                Production::Shampoo,
                5
            )->willReturn(true);
        $customer = new Customer();

        $sut = $customer->returnProduct($store, Production::Shampoo, 5);

        $this->assertTrue($sut);
    }

     /**
     * @test
     */
    public function return_succeeds_with_stub(): void
    {
        $store = $this->createMock(Store::class);
        $store
            ->method('addInventory')
            ->willReturn(true);
        $customer = new Customer();

        $sut = $customer->returnProduct($store, Production::Shampoo, 5);

        $this->assertTrue($sut);
    }

    /**
     * @test
     */
    public function purchase_succeeds_with_mock(): void
    {
        $store = $this->createMock(Store::class);
        $store
            ->expects($this->once()) // 何回呼ばれてるか: 1回
            ->method('removeInventory') // テスト対象のメソッド
            ->with(
                Production::Shampoo,
                5
            )->willReturn(true);
        $customer = new Customer();

        $sut = $customer->purchase($store, Production::Shampoo, 5);

        $this->assertTrue($sut);
    }
    
}
