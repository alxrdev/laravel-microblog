<?php

namespace App\Livewire;

use Livewire\Component;

class Like extends Component
{
    public $post;
    public $likes = 0;
    public $dislikes = 0;

    public function like(): void
    {
        $this->likes++;
    }

    public function undoLike(): void
    {
        $this->likes--;
    }

    public function dislike(): void
    {
        $this->dislikes++;
    }

    public function undoDislike(): void
    {
        $this->dislikes--;
    }

    public function render()
    {
        return view('livewire.like');
    }
}
