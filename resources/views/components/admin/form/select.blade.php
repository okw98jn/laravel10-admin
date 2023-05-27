<div class="col-span-9">
    <select
        class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
        id="{{ $id }}" name="{{ $name }}">
        @foreach ($array as $i => $val)
            <option value="{{ $i }}" {{ old($name, $default) == $i ? 'selected' : '' }}>{{ $val }}</option>
        @endforeach
    </select>
    @if ($errors->has($name))
        <x-admin.form.error-message message="{{ $errors->first($name) }}" />
    @endif
</div>
