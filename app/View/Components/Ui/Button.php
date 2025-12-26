<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public array $types = [
        'default' => 'bg-white text-black border-[#E7E7EC] active:bg-gray-200 hover:bg-gray-200',
        'danger' => 'bg-[#E92B43] border-[#E92B43] text-white font-medium active:bg-red-800 hover:bg-red-600',
    ];

    /**
     * Create a new component instance.
     */
    public function __construct(public string $message, public string $type = 'default')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.button');
    }
}
