<?php

namespace App\Livewire;

use Flux\Flux;
use Livewire\Component;

class EditPostModal extends Component
{
    public $postId, $title, $content;

    protected $listeners = ['openEditPostModal' => 'editModal'];

    public function editModal($postId)
    {
        $this->postId = $postId;
        $post = \App\Models\Post::find($postId);
        $this->title = $post->title;
        $this->content = $post->content;
        $this->modal('edit-post')->show();
        // dd($this->title);
    }
    public function closeModal()
    {
        Flux::modal('edit-post')->close();
        $this->reset(['postId', 'title', 'content']);
    }
    public function save()
    {
        // $this->postId = $postId;
        // $this->title = $title;
        // $this->content = $content;
        // Validate the input
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Assuming you have a Post model
        $post = \App\Models\Post::find($this->postId);
        $post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        Flux::modal('edit-post')->close();
        // session()->flash('message', 'Post updated successfully.');
        $this->dispatch('ToastSuccess', 'Post updated successfully.');
        $this->dispatch('postUpdated', 'Post updated successfully.');
    }
    // public function mount()
    // {
    //     $post = \App\Models\Post::find($this->postId);
    //     if ($post) {
    //         $this->title = $post->title;
    //         $this->content = $post->content;
    //     }
    // }
    // public function mount(){
    //     $this->title;
    //     $this->content;
    //     $this->postId;
    // }
    public function render()
    {
        return view('livewire.edit-post-modal');
    }
}
