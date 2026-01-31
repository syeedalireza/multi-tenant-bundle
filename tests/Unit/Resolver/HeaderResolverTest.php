<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Tests\Unit\Resolver;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Syeedalireza\MultiTenantBundle\Resolver\HeaderResolver;

final class HeaderResolverTest extends TestCase
{
    public function testResolveFromHeader(): void
    {
        $resolver = new HeaderResolver();
        $request = new Request();
        $request->headers->set('X-Tenant-ID', 'tenant123');

        $tenant = $resolver->resolve($request);

        $this->assertEquals('tenant123', $tenant);
    }

    public function testReturnsNullWhenHeaderMissing(): void
    {
        $resolver = new HeaderResolver();
        $request = new Request();

        $tenant = $resolver->resolve($request);

        $this->assertNull($tenant);
    }
}
