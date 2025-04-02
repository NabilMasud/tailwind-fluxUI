<?php

namespace App\Livewire;

use Flux\Flux;
use Livewire\Component;

class PostTable extends Component
{
    protected $listeners = [
        'postUpdated' => '$refresh',
    ];

    // public function toastSuccess($message)
    // {
    //     session()->flash('message', $message);
    // }
    public function openModal($id)
    {
        // Flux::modal('edit-post')->show();
        // $this->emit('editModal', $id);
        $this->dispatch('openEditPostModal', postId: $id);
    }

    public function deletePost($id)
    {
        // Assuming you have a Post model
        $post = \App\Models\Post::find($id);
        if ($post) {
            // $post->delete();
            $this->dispatch('ToastDanger', 'Post deleted successfully.');
        }
    }

    public function render()
    {
        return view('livewire.post-table', [
            'posts' => \App\Models\Post::all(),
        ]);
    }
}
