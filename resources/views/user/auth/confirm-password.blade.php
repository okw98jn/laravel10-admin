<x-layouts.guest>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('user.password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-user.auth.input-label for="password" :value="__('Password')" />

            <x-user.auth.text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-user.auth.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-user.auth.primary-button>
                {{ __('Confirm') }}
            </x-user.auth.primary-button>
        </div>
    </form>
</x-layouts.guest>