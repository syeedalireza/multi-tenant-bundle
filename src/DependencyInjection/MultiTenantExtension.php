<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

final class MultiTenantExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('multi_tenant.resolver', $config['resolver']);
        $container->setParameter('multi_tenant.strategy', $config['database']['strategy']);
    }

    public function getAlias(): string
    {
        return 'multi_tenant';
    }
}
