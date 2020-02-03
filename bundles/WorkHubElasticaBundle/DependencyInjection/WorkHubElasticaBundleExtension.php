<?php
/**
 * Created by PhpStorm.
 * User: samet.yilmaz
 * Date: 1.02.2020
 * Time: 17:41
 */

namespace WorkBundles\WorkHubElasticaBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class WorkHubElasticaBundleExtension extends Extension
{
    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $containerBuilder = new ContainerBuilder();
        $loader = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__));
        $loader->load('services.yaml');
    }
}
