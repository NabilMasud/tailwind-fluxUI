<?php

namespace App\Livewire;

use Livewire\Component;

class PostTable extends Component
{
    public function render()
    {
        return view('livewire.post-table', [
            'posts' => \App\Models\Post::all(),
        ]);
    }
}
