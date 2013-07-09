<?php
// src/Acme/MainBundle/Menu/MenuBuilder.php

namespace eCrowd\MainBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'master_fmenu', 'id' => 'master_top-nav'));
     // will look for "Home" in Acme/DemoBundle/Resources/translations/AcmeDemoBundle.locale.yml
        $menu->addChild('menu.main.first', array('route' => 'homepage'))->setExtra('translation_domain', 'eCrowd');
        $menu['menu.main.first']->setLinkAttribute('class', 'master_pngfix');
        $menu->addChild('menu.main.second', array('route' => 'homepage'))->setExtra('translation_domain', 'eCrowd');
        $menu['menu.main.second']->setLinkAttribute('class', 'master_pngfix');
        $menu->addChild('menu.main.third', array('route' => 'homepage'))->setExtra('translation_domain', 'eCrowd');
        $menu['menu.main.third']->setLinkAttribute('class', 'master_pngfix');

        return $menu;
    }
    
    public function createUserMenu(Request $request,  ContainerInterface $container)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'master_fmenu', 'id' => 'master_utilities'));
        $this->container = $container;
        if($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ){
            $menu->addChild('menu.second.logout', array('route' => 'fos_user_security_logout'))->setExtra('translation_domain', 'eCrowd');
            $menu['menu.second.logout']->setLinkAttribute('class','master_pngfix');
            $menu['menu.second.logout']->setLinkAttribute('id', 'master_sign-in-link');
            $username = $this->container->get('security.context')->getToken()->getUser()->getUsername(); // Get username of the current logged in user
            $menu->addChild($username, array('route' => 'e_crowd_client'));
            $menu[$username]->setAttribute('class', 'hover master_pngfix');
            $menu[$username]->setAttribute('id','master_join-button');
            $menu[$username]->setLinkAttribute('class', 'hover master_pngfix');
            $menu->addChild('menu.second.third', array('route' => 'homepage'))->setExtra('translation_domain', 'eCrowd');
            $menu['menu.second.third']->setLinkAttribute('class', 'master_pngfix');    
        } else {
            $menu->addChild('menu.second.login', array('route' => 'fos_user_security_login'))->setExtra('translation_domain', 'eCrowd');
            $menu['menu.second.login']->setLinkAttribute('class','master_pngfix');
            $menu['menu.second.login']->setLinkAttribute('id', 'master_sign-in-link');
            $menu->addChild('menu.second.register', array('route' => 'fos_user_registration_register'))->setExtra('translation_domain', 'eCrowd');
            $menu['menu.second.register']->setAttribute('class', 'hover master_pngfix');
            $menu['menu.second.register']->setAttribute('id','master_join-button');
            $menu['menu.second.register']->setLinkAttribute('class', 'hover master_pngfix');
            $menu->addChild('menu.second.third', array('route' => 'homepage'))->setExtra('translation_domain', 'eCrowd');
            $menu['menu.second.third']->setLinkAttribute('class', 'master_pngfix');
        }
        return $menu;
    }
    
        public function createFooterMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'footer-menu', 'id' => 'menu-footer-menu'));
        $menu->addChild('menu.footer.first', array('route' => 'homepage'))->setExtra('translation_domain', 'eCrowd');
        $menu['menu.footer.first']->setAttribute('class','menu-item');
        $menu->addChild('menu.footer.second', array('route' => 'homepage'))->setExtra('translation_domain', 'eCrowd');
        $menu['menu.footer.second']->setAttribute('class','menu-item');
        $menu->addChild('menu.footer.third', array('route' => 'homepage'))->setExtra('translation_domain', 'eCrowd');
        $menu['menu.footer.third']->setAttribute('class','menu-item');
        $menu->addChild('menu.footer.fourth', array('route' => 'homepage'))->setExtra('translation_domain', 'eCrowd');
        $menu['menu.footer.fourth']->setAttribute('class','menu-item');
        $menu->addChild('menu.footer.fifth', array('route' => 'homepage'))->setExtra('translation_domain', 'eCrowd');
        $menu['menu.footer.fifth']->setAttribute('class','menu-item');
        return $menu;
    }
}