<x-layouts.app :title="__('Posts')">
    <div class="relative flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
        <livewire:post-table />
    </div>

    <livewire:edit-post-modal />

    {{-- {{ session('message') ? session('message') : 'Session is empty!' }} --}}
    <livewire:toast />
</x-layouts.app>
