<?php

declare(strict_types=1);

namespace Tavp\Kit;

/**
 * Defines a TAVPkit starter bundle.
 *
 * A kit bundles migrations, controllers, views and config that are
 * dropped into a project via "tavp kit:install <name>" (KIT-001).
 */
class StarterKit
{
    /**
     * @param array<int, string> $modules  module names this kit pulls in
     * @param array<int, string> $migrations  migration files to run
     */
    public function __construct(
        private string $name,
        private array $modules = [],
        private array $migrations = [],
    ) {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function modules(): array
    {
        return $this->modules;
    }

    public function migrations(): array
    {
        return $this->migrations;
    }

    /**
     * Whether this kit requires a database (has migrations).
     */
    public function requiresDatabase(): bool
    {
        return count($this->migrations) > 0;
    }
}
