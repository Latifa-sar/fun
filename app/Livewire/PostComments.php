<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;


class PostComments extends Component
{

    use WithPagination;

    public Post $post;

    #[Computed()]
    public string $comment;

    #[Rule('required|min:3|max:200')]

    public function postComment()
    {

        if (auth()->guest()) {
            return;
        }

        $this->validate([
            'comment' => 'required|min:3|max:200',
        ]);

        $this->post->comments()->create([
            'comment' => $this->comment,
            'user_id' => auth()->id()
        ]);

        $this->reset('comment');
    }


    public function getcommentsProperty ()
    {
        return $this?->post?->comments()->with('user')->latest()->paginate(5);
    }

    public function render()
    {
        return view('livewire.post-comments');
    }
}
