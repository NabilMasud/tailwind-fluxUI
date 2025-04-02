<flux:modal name="edit-post" class="md:w-96">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Update Post</flux:heading>
            <flux:text class="mt-2">Make changes to your post.</flux:text>
        </div>
        <form wire:submit.prevent="save">
            <flux:input wire:model="title" label="Title" placeholder="Title..." value="{{ $title }}" />
            <flux:textarea wire:model="content" label="Content" rows="auto">{{ $content }}</flux:textarea>
            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" variant="primary" wire:click='save'>Save changes</flux:button>
            </div>
        </form>
    </div>
</flux:modal>
