<div class="tab-pane fade show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
    <!-- Start chats content -->
    <div>
        <div class="px-4 pt-4">
            <h4 class="mb-4">Chats</h4>
            <div class="search-box chat-search-box">
                <div class="input-group mb-3 rounded-3">
                                        <span class="input-group-text text-muted bg-light pe-1 ps-3" id="basic-addon1">
                                            <i class="ri-search-line search-icon font-size-18"></i>
                                        </span>
                    <input type="text" class="form-control bg-light" placeholder="Search messages or users" aria-label="Search messages or users" aria-describedby="basic-addon1">
                </div>
            </div> <!-- Search Box-->
        </div> <!-- .p-4 -->
        @livewire('user-list')
        <!-- End chat-message-list -->
    </div>
    <!-- Start chats content -->
</div>
