<?php 

namespace KnpU\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class KnpULoremIpsumExtension extends Extension  
{
    public function load(array $configs, ContainerBuilder $container)     
    { 
        // dd($configs); 
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config')); 
        $loader->load('services.xml'); 

        // dd(' inside KnpU Extension' ); 
    } 

    public function getAlias() 
    { 
        return 'knpu_lorem_ipsum';
    } 
    
}

