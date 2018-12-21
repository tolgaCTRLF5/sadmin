<?php

namespace OmerKamcili\Sadmin\Components\Sidebar;

use OmerKamcili\Sadmin\Components\Interfaces\SadminMenuItemInterface;
use stdClass;

/**
 * Class SadminMenuGroup
 *
 * @package OmerKamcili\Sadmin\components
 */
class SadminMenuGroup implements SadminMenuItemInterface
{

    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $icon;
    /**
     * @var
     */
    public $items;

    /**
     * SadminMenuGroup constructor.
     *
     * @param string $label
     * @param string $icon
     */
    public function __construct(string $label, string $icon = 'fa fa-angle-double-right')
    {

        $this->label = $label;
        $this->icon = $icon;

    }

    /**
     * @return string
     * @throws \Throwable
     */
    public function render(): string
    {
        return view('menu.side-menu-group')
            ->with([
                'label' => $this->label,
                'icon'  => $this->icon,
                'items' => $this->items,
            ])
            ->render();
    }

    /**
     * @param $label
     * @param $url
     */
    public function add($label, $url): void
    {

        $item = new Stdclass();
        $item->label = $label;
        $item->url = $url;
        $this->items[] = $item;

    }

}