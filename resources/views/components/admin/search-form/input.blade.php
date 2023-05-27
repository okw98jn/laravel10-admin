<div>
    <label for="{{ $name }}" class="block text-sm mb-2 dark:text-white">{{ $text }}</label>
    <div class="relative">
        <input type="text" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
    </div>
</div>
