<?php

declare(strict_types=1);

namespace Src\Models;

use Src\Enums\Production;

class Customer
{
    // 購入したら空にする
    public function purchase(Store $store, Production $product, int $amount): bool
    {
        $store->removeInventory($product, $amount);
        return true;
    }

    // 返品
    public function returnProduct(Store $store, Production $product, int $amount): bool
    {
        $store->addInventory($product, $amount);
        return true;
    }
}
