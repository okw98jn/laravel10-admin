<div>
    <label for="{{ $name }}" class="block text-sm mb-2 dark:text-white">{{ $text }}</label>
    <div class="relative">
        <select name="{{ $name }}" id="{{ $name }}"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
            <option value=""></option>
            @foreach ($array as $i => $val)
                <option value="{{ $i }}" {{ isset($data) && $i == $data ? 'selected' : '' }}>{{ $val }}</option>
            @endforeach
        </select>
    </div>
</div>
