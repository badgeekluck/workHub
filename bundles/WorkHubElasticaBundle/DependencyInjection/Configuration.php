<?php
/**
 * Created by PhpStorm.
 * User: samet.yilmaz
 * Date: 1.02.2020
 * Time: 17:40
 */

namespace WorkBundles\WorkHubElasticaBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @inheritDoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('workhub_elastica_bundle', 'WorkHubElasticaBundle');
        return $treeBuilder;
    }
}
