<?php

declare(strict_types=1);

namespace Tavp\Kit;

/**
 * Registry of available TAVPkit starter bundles.
 */
class KitRegistry
{
    private array $kits = [];

    public function register(StarterKit $kit): void
    {
        $this->kits[$kit->name()] = $kit;
    }

    public function get(string $name): ?StarterKit
    {
        return $this->kits[$name] ?? null;
    }

    /**
     * Return all kit names.
     *
     * @return array<int, string>
     */
    public function names(): array
    {
        return array_keys($this->kits);
    }
}
