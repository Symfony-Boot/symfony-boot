<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;


/**
 * Class SampleMainMenuBuilder
 * @package AppBundle\Menu
 *
 * For more information, please visit http://symfony.com/doc/master/bundles/KnpMenuBundle/index.html
 */
class SampleMainMenuBuilder implements ContainerAwareInterface
{

    use ContainerAwareTrait;

    /**
     * @param FactoryInterface $factory
     * @param array $options
     * @return \Knp\Menu\ItemInterface
     */
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'homepage'));

        // create another menu item
        $menu->addChild('About Me', array('route' => 'about'));

        // ... add more children

        return $menu;
    }

}