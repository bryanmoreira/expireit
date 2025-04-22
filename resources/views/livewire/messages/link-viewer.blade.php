@section('title', 'Link Viewer')
<div class="flex flex-col gap-6 max-w-lg mx-auto h-screen justify-center p-6">
    <x-auth-header
        :title="__('Message received')"
        :description="__('Below is the message that was shared with you. This link could expire at any moment.')"
    />

    @if($message)
        <flux:text color="red">
            {{ $message }}
        </flux:text>
    @endif

    <flux:textarea
        readonly
        copyable
        rows="auto"
    >
        {{ $text }}
    </flux:textarea>
</div>
