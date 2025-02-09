<div>
    <div class="mb-4">
        <h1 class="text-2xl font-black text-zinc-100">{{ $project->name }}</h1>
        <p class="mb-2 text-xs {{ $project->status->styles() }}">
            {{ $project->status->label() }}
        </p>

        <p class="text-zinc-300">{{ $project->description }}</p>
    </div>



    {{-- TODO: Tasks --}}
</div>
