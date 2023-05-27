<div class="col-span-9">
    <ul class="flex flex-col sm:flex-row">
        @foreach ($array as $i => $val)
            <li
                class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                <div class="relative flex items-start w-full">
                    <div class="flex items-center h-5">
                        <input id="{{ $id }}{{ $i }}" name="{{ $name }}" type="radio"
                            value="{{ $i }}"
                            class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            @if (old($name, $default) == $i) checked @endif>
                    </div>
                    <label for="{{ $id }}{{ $i }}"
                        class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                        {{ $val }}
                    </label>
                </div>
            </li>
        @endforeach
    </ul>
    @if ($errors->has($name))
        <x-admin.form.error-message message="{{ $errors->first($name) }}" />
    @endif
</div>
