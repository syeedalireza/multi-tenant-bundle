<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Tests\Unit\Resolver;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Syeedalireza\MultiTenantBundle\Resolver\SubdomainResolver;

final class TenantResolverTest extends TestCase
{
    public function testResolveFromSubdomain(): void
    {
        $resolver = new SubdomainResolver();
        $request = Request::create('http://tenant1.example.com');

        $tenant = $resolver->resolve($request);

        $this->assertEquals('tenant1', $tenant);
    }

    public function testResolveReturnsNullForNoSubdomain(): void
    {
        $resolver = new SubdomainResolver();
        $request = Request::create('http://example.com');

        $tenant = $resolver->resolve($request);

        $this->assertNull($tenant);
    }
}
