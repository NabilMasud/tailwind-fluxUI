<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    {{-- {{ session('message') ? session('message') : 'Session is empty!' }} --}}
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-zinc-900 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Content
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-zinc-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $post->title }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $post->content }}
                    </td>
                    <td class="px-6 py-4 text-right">

                            <flux:button icon="pencil" variant="subtle" size="sm" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" wire:click="openModal({{ $post->id }})">
                            </flux:button>
                            <flux:button icon="trash" variant="subtle" size="sm" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" wire:click="deletePost({{ $post->id }})">
                            </flux:button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


