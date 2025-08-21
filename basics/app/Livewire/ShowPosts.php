<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public function delete(Post $post)
    {
        // Important: Make sure to authorize that the user owns the post before deleting
        $post->delete();
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::all(),
        ]);
    }
}
