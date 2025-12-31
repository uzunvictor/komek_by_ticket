<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tabs extends Component
{

    public function __construct(public array $tabs, public string $selectedTab)
    {

    }

    public function render(): View|Closure|string
    {
        return view('components.ui.tabs');
    }
}