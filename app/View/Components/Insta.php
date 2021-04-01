<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Insta extends Component
{
    public $post;
    public $canComment;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $canComment)
    {
        $this->post = $post;
        $this->canComment = $canComment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.insta');
    }
}
