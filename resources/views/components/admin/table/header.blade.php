<div
    class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
    <div>
        <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
            {{ $title }}
        </h2>
    </div>
    <div>
        <div class="inline-flex gap-x-2">
            <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                href="{{ route('admin.admin.create') }}">
                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                    fill="none">
                    <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
                {{ $btnText }}
            </a>
        </div>
    </div>
</div>
