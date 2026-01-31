<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Resolver;

use Symfony\Component\HttpFoundation\Request;

final class SubdomainResolver
{
    public function resolve(Request $request): ?string
    {
        $host = $request->getHost();
        $parts = explode('.', $host);
        
        if (count($parts) < 3) {
            return null;
        }
        
        return $parts[0];
    }
}
