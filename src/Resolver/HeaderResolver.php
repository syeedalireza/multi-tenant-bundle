<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Resolver;

use Symfony\Component\HttpFoundation\Request;

/**
 * Resolves tenant from HTTP header.
 */
final class HeaderResolver
{
    public function __construct(
        private readonly string $headerName = 'X-Tenant-ID',
    ) {
    }

    public function resolve(Request $request): ?string
    {
        return $request->headers->get($this->headerName);
    }
}
