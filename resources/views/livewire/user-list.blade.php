<div>
    <h2>Users</h2>
    <ul class="list-group">
        @foreach($users as $user)
            <li wire:click="selectUser({{ $user->id }})" class="list-group-item">
                {{ $user->name }}
            </li>
        @endforeach
    </ul>
</div>
