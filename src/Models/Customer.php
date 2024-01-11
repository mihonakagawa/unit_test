<?php

declare(strict_types=1);

namespace Src\Models;

use Src\Enums\Production;

class Customer
{
    public function purchase(Store $store, Production $product, int $amount): bool
    {
        $store->removeInventory($product, $amount);
        return true;
    }

    public function returnProduct(Store $store, Production $product, int $amount): bool
    {
        $store->addInventory($product, $amount);
        return true;
    }
}
