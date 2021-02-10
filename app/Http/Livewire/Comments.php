<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comments;

    public string $comment_body = '';

    public function mount()
    {
        $this->comments = Comment::latest()->get();
    }

    public function addComment()
    {
        if (empty($this->comment_body)) return;


        $created_comment = Comment::create(['body' => $this->comment_body, 'user_id' => 1]);

        $this->comments->prepend($created_comment);
        $this->comment_body = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
