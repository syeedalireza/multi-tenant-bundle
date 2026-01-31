<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('multi_tenant');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('resolver')->defaultValue('subdomain')->end()
                ->arrayNode('database')
                    ->children()
                        ->scalarNode('strategy')->defaultValue('schema_per_tenant')->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
