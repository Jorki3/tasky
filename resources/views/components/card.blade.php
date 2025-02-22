<div class="max-w-sm p-6 border rounded-lg shadow-sm bg-zinc-100 border-zinc-200 dark:bg-zinc-800 dark:border-zinc-700">
    <a href="{{ $href }}">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-zinc-950 dark:text-zinc-100">{{ $title }}</h5>
    </a>
    <p class="mb-3 font-normal text-zinc-700 dark:text-zinc-400">{{ $description }}</p>
    <a href="{{ $href }}"
        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center bg-blue-700 rounded-lg text-zinc-100 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        View Project
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
    </a>
</div>
