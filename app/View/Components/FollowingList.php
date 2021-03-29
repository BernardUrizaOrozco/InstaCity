<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FollowingList extends Component
{

    public $followings;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($followings)
    {
        $this->followings = $followings;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.following-list');
    }
}
