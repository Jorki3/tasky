<div class="p-4 space-y-3 bg-zinc-800 rounded-2xl text-zinc-500">
    @foreach ($histories as $history)
        <p class="flex"><span class="flex w-3 h-3 my-auto bg-blue-600 rounded-full me-3"></span> {{ $history->action }}
            by
            {{ $history->user_id }}</p>
    @endforeach
</div>
