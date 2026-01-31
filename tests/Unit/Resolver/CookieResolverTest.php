<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Tests\Unit\Resolver;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Syeedalireza\MultiTenantBundle\Resolver\CookieResolver;

final class CookieResolverTest extends TestCase
{
    public function testResolveFromCookie(): void
    {
        $resolver = new CookieResolver();
        $request = new Request();
        $request->cookies->set('tenant_id', 'tenant456');

        $tenant = $resolver->resolve($request);

        $this->assertEquals('tenant456', $tenant);
    }
}
