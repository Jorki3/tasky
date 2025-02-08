<div>
    <div class="grid grid-cols-2 mb-4 ">
        <h1 class="text-2xl 4 text-zinc-100">Projects</h1>

        <button type="button" wire:click='newProject'
            class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
            New Project
        </button>
    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
        @foreach ($projects as $project)
            <x-card href="/project/{{ $project->id }}" title="{{ $project->name }}"
                description="{{ $project->description }}" />
        @endforeach
    </div>
</div>
