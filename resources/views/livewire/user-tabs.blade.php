<div class="chat-leftsidebar me-lg-1 ms-lg-0">

    <div class="tab-content">
        <!-- Start Profile tab-pane -->
        @livewire('usertabs.user-detail-tab')
        <!-- End Profile tab-pane -->

        <!-- Start chats tab-pane -->
        @livewire('usertabs.user-chats-tab')
        <!-- End chats tab-pane -->

        <!-- Start groups tab-pane -->
        @livewire('usertabs.user-groups-tab')
        <!-- End groups tab-pane -->

        <!-- Start contacts tab-pane -->
        @livewire('usertabs.user-contacts-tab')

        <!-- End contacts tab-pane -->

        <!-- Start settings tab-pane -->
        @livewire('usertabs.user-settings-tab')
        <!-- End settings tab-pane -->
    </div>
    <!-- end tab content -->

</div>
