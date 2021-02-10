<div style="width: 300px; margin: 0 auto;">
    <form wire:submit.prevent="addComment">
        <input type="text" wire:model.lazy="comment_body">
        <button type="submit">Add</button>
    </form>
    @foreach($comments as $comment)
        <div>
            <h2>{{ $comment->creator->name }}</h2>
            <p>{{ $comment->body }}</p>
            <p><strong>{{ $comment->created_at }}</strong></p>
        </div>
        @if(!$loop->last)
            <hr>
        @endif
    @endforeach

</div>
