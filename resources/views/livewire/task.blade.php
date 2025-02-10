<div class="space-y-4">
    <div class="grid grid-rows-1 gap-4 md:grid-cols-3">
        <div class="md:col-span-2">
            <div class="flex space-x-8">
                <h1 class="text-2xl font-black text-zinc-100">{{ $task->name }}</h1>

                <button wire:click='edit'>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                    </svg>
                </button>

                <button wire:click='delete' class="hover:text-red-500">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                    </svg>

                </button>
            </div>

            <p class="mb-2 text-xs {{ $task->status->styles() }}">
                {{ $task->status->label() }}
            </p>

            <p class="text-zinc-300">{{ $task->description }}</p>
        </div>
    </div>

    {{-- TODO: Task history --}}
    {{-- TODO: Task Comments --}}
</div>
