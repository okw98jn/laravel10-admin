<div class="mt-5 flex justify-end gap-x-2">
    @if ($leftBtnType === 'a')
        <a href="{{ $leftBtnRoute }}"
            class="py-2 px-3 w-16 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
            {{ $leftBtnText }}
        </a>
    @else
        <button name="{{ $leftBtnName }}"
            class="py-2 px-3 w-16 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
            {{ $leftBtnText }}
        </button>
    @endif
    @if ($rightBtnType === 'a')
        <a href="{{ $rightBtnRoute }}"
        class="py-2 px-3 w-16 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
            {{ $rightBtnText }}
        </a>
    @else
        <button
            class="py-2 px-3 w-16 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
            {{ $rightBtnText }}
        </button>
    @endif
</div>
