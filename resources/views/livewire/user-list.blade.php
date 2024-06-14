<div class="">
    <h5 class="mb-3 px-3 font-size-16">Recent</h5>

    <div class="chat-message-list px-2" data-simplebar>

        <ul class="list-unstyled chat-list chat-user-list">
            @foreach($users as $user)
            <li wire:click="selectUser({{ $user->id }})">
                <a href="javascript: void(0);">
                    <div class="d-flex">
                        <div class="chat-user-img online align-self-center me-3 ms-0">
                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                            <span class="user-status"></span>
                        </div>

                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="text-truncate font-size-15 mb-1">{{ $user->name }}</h5>
                            <p class="chat-user-message text-truncate mb-0">Hey! there I'm available</p>
                        </div>
                        <div class="font-size-11">05 min</div>
                    </div>
                </a>
            </li>
            @endforeach

        </ul>
    </div>
</div>
