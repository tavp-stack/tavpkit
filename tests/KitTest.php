<?php

declare(strict_types=1);

namespace Tavp\Kit\Tests;

use Tavp\Kit\KitRegistry;
use Tavp\Kit\StarterKit;
use PHPUnit\Framework\TestCase;

class KitTest extends TestCase
{
    public function testRegisterAndRetrieveKit(): void
    {
        $registry = new KitRegistry();
        $kit = new StarterKit('teams', ['tavpid', 'tavphub'], ['create_teams_table']);
        $registry->register($kit);

        $this->assertSame('teams', $registry->get('teams')->name());
        $this->assertContains('teams', $registry->names());
        $this->assertTrue($registry->get('teams')->requiresDatabase());
    }

    public function testUnknownKitReturnsNull(): void
    {
        $registry = new KitRegistry();
        $this->assertNull($registry->get('nope'));
    }

    public function testKitWithoutMigrationsDoesNotRequireDatabase(): void
    {
        $kit = new StarterKit('profile');
        $this->assertFalse($kit->requiresDatabase());
        $this->assertEmpty($kit->migrations());
    }
}
