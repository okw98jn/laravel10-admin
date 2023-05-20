<div class="col-span-9">
    <input id="{{ $id }}" type="{{ $type }}"
        class="py-2 px-3 pr-11 block w-full shadow-sm text-sm rounded-lg dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 {{ $errors->has($name) ? 'border-red-500' : 'border-gray-200' }}"
        placeholder="{{ $placeholder }}" value="{{ $value }}" name="{{ $name }}">
    @if ($errors->has($name))
        <x-admin.form.error-message message="{{ $errors->first($name) }}" />
    @endif
</div>
