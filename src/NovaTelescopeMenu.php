<?php

namespace HmmmHmmmHmmm\NovaTelescopeMenu;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaTelescopeMenu extends Tool
{
    protected $link;

    public function __construct()
    {
        $this->link = MenuSection::make('Telescope')
            ->path('/'.Str::snake((new \ReflectionClass($this))->getShortName(), '-'))
            ->icon('server');
    }

    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-telescope-menu', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-telescope-menu', __DIR__.'/../dist/css/tool.css');
        Nova::provideToScript([
            'tool' => [
                'telescope' => '/'.config('telescope.path'),
            ],
        ]);
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @return mixed
     */
    public function menu(Request $request)
    {
        return $this->link;
    }

    public function setTitle(string $title): self
    {
        $this->link->name = $title;

        return $this;
    }

    public function setIcon(string $icon): self
    {
        $this->link->icon($icon);

        return $this;
    }

    public function setMenu($menu): self
    {
        $this->link = $menu;

        return $this;
    }
}
