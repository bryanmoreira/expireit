<div class="flex flex-col gap-6 max-w-lg">
    <x-auth-header
        :title="__('Create a link')"
        :description="__('Create a link to share your message')"
    />

    <form class="flex flex-col gap-6 max-w-lg">
        <flux:input
            wire:model="text"
            type="text"
            label="Type your message"
            description="This will be the message that the person with the link will see."
        />

        <flux:input
            wire:model="duration"
            type="number"
            label="Duration in minutes"
            description="How much time do you want this link will be available?"
            input-class="no-spinner"
        />

        <flux:button wire:click="createLink">Send</flux:button>
    </form>

    @if ($link)
        <div class="flex flex-col gap-4">
            <x-auth-header
                class="text-left"
                :title="__('Link created')"
                :description="__('You can share this link with anyone')"
            />

            <flux:input
                type="text"
                label="Link"
                description="This is the link you can share with anyone."
                :value="$link"
                readonly
                copyable
            />
        </div>
    @endif
</div>
