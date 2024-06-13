<?php

namespace App\Livewire; // Update namespace

use Livewire\Component;
use App\Models\User;
use App\Models\Message;

class UserList extends Component
{
    public $users;
    public $selectedUser = null;

    public function mount()
    {
        $this->users = User::all();
    }

    public function selectUser($userId)
    {
        $this->selectedUser = User::find($userId);
        $this->dispatch('userSelected', $userId); // Use dispatch instead of emit
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
