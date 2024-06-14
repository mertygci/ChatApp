<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Message;
use App\Models\User;
use Livewire;

class MessageList extends Component
{
    public $selectedUser = null;
    public $messages = [];
    public $newMessage = '';

    public function mount()
    {
        Livewire::listen('userSelected', 'handleUserSelected'); // Listen for event
    }

    protected $listeners = [
        'userSelected' => 'handleUserSelected', // Define listener
    ];

    public function handleUserSelected($userId)
    {
        $this->selectedUser = User::find($userId);
        $this->loadMessages();
        $this->dispatch('messageSent');
    }

    public function sendMessage()
    {
        if ($this->newMessage) {
            Message::create([
                'from_user_id' => auth()->user()->id,
                'to_user_id' => $this->selectedUser->id,
                'message' => $this->newMessage,
            ]);

            $this->messages->push(new Message([
                'from_user_id' => auth()->user()->id,
                'to_user_id' => $this->selectedUser->id,
                'message' => $this->newMessage,
                'created_at' => now(),
            ]));

            $this->newMessage = '';
            $this->loadMessages();
            $this->dispatch('messageSent');

        }
    }

    public function loadMessages()
    {
        if ($this->selectedUser) {
            $this->messages = Message::where(function ($query) {
                $query->where('from_user_id', $this->selectedUser->id)
                    ->orWhere('to_user_id', $this->selectedUser->id);
            })
            ->where(function ($query) {
                $query->where('from_user_id', auth()->user()->id)
                    ->where('to_user_id', $this->selectedUser->id);
            })
            ->orWhere(function ($query) {
                $query->where('from_user_id', $this->selectedUser->id)
                    ->where('to_user_id', auth()->user()->id);
            })
            ->orderBy('created_at', 'asc')
            ->get();
        }
    }

    public function render()
    {
        return view('livewire.message-list',
            ['selectedUserId' => $this->selectedUser]);
    }
}
