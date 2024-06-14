<?php

namespace App\Livewire\Usertabs;

use App\Models\User;
use Livewire\Component;

class UserDetailTab extends Component
{
    public $user;

    public function mount()
    {
        $this->user = User::where('id', auth()->id())->first();
    }

    public function render()
    {
        return view('livewire.usertabs.user-detail-tab',
        ['user'=>$this->user]);
    }
}
