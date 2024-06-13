<!DOCTYPE html>
<html>
<head>
    <title>Livewire Chat</title>
    @livewireStyles
</head>
<body>
<div style="display: flex;">
    <div style="width: 30%;">
        @livewire('user-list')
    </div>
    <div style="width: 70%;">
        @livewire('message-list')
    </div>
</div>
@livewireScripts
</body>
</html>
