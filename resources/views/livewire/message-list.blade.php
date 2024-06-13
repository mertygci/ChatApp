<div>
    @if($selectedUserId)
        <h2>Messaging with {{ $selectedUser->name }}</h2>
        <div>
            @foreach($messages as $message)
                <div>
                    <strong>{{ $message->from_user_id == auth()->id() ? 'You' : $message->sender->name }}</strong>
                    <p>{{ $message->message }}</p>
                </div>
            @endforeach
        </div>
        <div>
            <input type="text" wire:model="newMessage" />
            <button wire:click="sendMessage">Send</button>
        </div>
    @else
        <p>Select a user to start messaging</p>
    @endif
</div>
