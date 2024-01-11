<?php
declare(strict_types=1);

namespace Src\Models;

use Src\Enums\Production;

class Store
{
    private int $shampooInventory = 0;
    private int $bookInventory = 0;

    public function getInventory(Production $production): int
    {
        return match ($production) {
            Production::Book => $this->bookInventory,
            Production::Shampoo => $this->shampooInventory,
        };
    }

    public function addInventory(Production $production, int $amount): bool
    {
        match ($production) {
            Production::Book => $this->bookInventory = $amount,
            Production::Shampoo => $this->shampooInventory = $amount,
        };

        return true;
    }

    public function hasEnoughInventory(Production $production, int $amount): bool
    {
        return match ($production) {
            Production::Book => ($this->bookInventory - $amount) >= 0,
            Production::Shampoo => ($this->shampooInventory - $amount) >= 0,
        };
    }

    public function removeInventory(Production $production, int $amount): bool
    {
        if (!$this->hasEnoughInventory($production, $amount)) {
            return false;
        }

        $this->shampooInventory -= $amount;

        return true;
    }
}
