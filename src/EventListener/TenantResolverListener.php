<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Syeedalireza\MultiTenantBundle\Resolver\TenantResolver;
use Syeedalireza\MultiTenantBundle\Context\TenantContext;
use Syeedalireza\MultiTenantBundle\Doctrine\TenantConnection;

/**
 * Automatically resolves tenant from HTTP request.
 */
final class TenantResolverListener
{
    public function __construct(
        private readonly TenantResolver $resolver,
        private readonly TenantContext $context,
        private readonly TenantConnection $connection,
    ) {
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $tenantId = $this->resolver->resolve($event->getRequest());

        if ($tenantId) {
            $this->context->setTenant($tenantId);
            $this->connection->setTenant($tenantId);
        }
    }
}
