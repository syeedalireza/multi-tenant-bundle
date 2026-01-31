<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Resolver;

use Symfony\Component\HttpFoundation\Request;

/**
 * Resolves tenant from cookie.
 */
final class CookieResolver
{
    public function __construct(
        private readonly string $cookieName = 'tenant_id',
    ) {
    }

    public function resolve(Request $request): ?string
    {
        return $request->cookies->get($this->cookieName);
    }
}
