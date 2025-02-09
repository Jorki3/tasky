<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="pb-4 space-y-4 bg-zinc-100 flex-column md:flex-row md:space-y-0 dark:bg-zinc-900">
        <label for="table-search" class="sr-only">Search</label>

        <div class="relative">
            <div class="absolute inset-y-0 flex items-center pointer-events-none rtl:inset-r-0 start-0 ps-3">
                <svg class="w-4 h-4 text-zinc-500 dark:text-zinc-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="table-search-users"
                class="block p-2 text-sm border rounded-lg text-zinc-900 border-zinc-300 ps-10 w-80 bg-zinc-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-800 dark:border-zinc-700 dark:placeholder-zinc-500 dark:text-zinc-100 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search for users">
        </div>
    </div>

    <table class="w-full text-sm text-left text-zinc-500 rtl:text-right dark:text-zinc-400">
        <thead class="text-xs uppercase text-zinc-700 bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
            <tr>
                @foreach ($theaders as $theader)
                    <th scope="col" class="px-6 py-3">
                        {{ $theader }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr
                    class="border-b bg-zinc-100 border-zinc-200 dark:bg-zinc-800 dark:border-zinc-800 hover:bg-zinc-50 dark:hover:bg-zinc-700">
                    <td class="px-6 py-4">
                        {{ $task->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $task->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $task->status->label() }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $task->due_date }}
                    </td>
                    <td class="flex flex-col px-6 py-4 md:flex-row">
                        <button class="flex-1 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            View
                        </button>

                        <button wire:click="edit('{{ $task->id }}')"
                            class="flex-1 font-medium text-yellow-600 dark:text-yellow-500 hover:underline">
                            Edit
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
