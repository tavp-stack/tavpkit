<?php

declare(strict_types=1);

namespace Tavp\Kit;

/**
 * @deprecated Use Tavp\Tavpid\Auth\TokenService instead.
 *
 * This class is kept for backwards compatibility only.
 * All API token functionality has been consolidated into tavpid.
 */
class ApiTokenService
{
    public function __construct()
    {
        trigger_error(
            'Tavp\Kit\ApiTokenService is deprecated. Use Tavp\Tavpid\Auth\TokenService instead.',
            E_USER_DEPRECATED
        );
    }

    public function generateToken(int $userId, string $deviceName = ''): string
    {
        throw new \RuntimeException('Deprecated. Use Tavp\Tavpid\Auth\TokenService.');
    }

    public function verifyToken(string $token): ?array
    {
        throw new \RuntimeException('Deprecated. Use Tavp\Tavpid\Auth\TokenService.');
    }

    public function revokeToken(string $token): bool
    {
        throw new \RuntimeException('Deprecated. Use Tavp\Tavpid\Auth\TokenService.');
    }

    public function revokeAllTokens(int $userId): bool
    {
        throw new \RuntimeException('Deprecated. Use Tavp\Tavpid\Auth\TokenService.');
    }
}
