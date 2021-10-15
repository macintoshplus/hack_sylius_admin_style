<?php
/**
 * @copyright Macintoshplus (c) 2021
 * Added by : Macintoshplus at 08/10/2021 22:35
 */

declare(strict_types=1);

namespace App\Menu;

use Knp\Menu\ItemInterface;
use Knp\Menu\MenuFactory;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

final class AppMainMenu
{
    public const EVENT_NAME = 'app.menu.main';
    /**
     * @var MenuFactory
     */
    private $menuFactory;
    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    public function __construct(MenuFactory $menuFactory, EventDispatcherInterface $eventDispatcher)
    {
        $this->menuFactory = $menuFactory;
        $this->eventDispatcher = $eventDispatcher;
    }


    public function generateMenu(array $options): ItemInterface
    {
        $menu = $this->menuFactory->createItem('app.main');

        $admin = $menu->addChild('admin')->setLabel('Admin');
        $admin->addChild('Blogpost', ['route'=>'app_blog_post_index'])->setLabel('Blog post')->setLabelAttribute('icon', 'folder')
        ;
        $admin->addChild('Item2')->setLabel('Item 2')->setLabelAttribute('icon', 'folder')
        ;
        $admin->addChild('Item3')->setLabel('Item 3')->setLabelAttribute('icon', 'folder')
        ;

        $this->eventDispatcher->dispatch(new MenuBuilderEvent($this->menuFactory, $menu), self::EVENT_NAME);

        return $menu;
    }
}
