<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Resolver;

use Symfony\Component\HttpFoundation\Request;

final class TenantResolver
{
    public function resolve(Request $request): ?string
    {
        // Resolve from subdomain
        $host = $request->getHost();
        $parts = explode('.', $host);
        
        return count($parts) > 2 ? $parts[0] : null;
    }
}
