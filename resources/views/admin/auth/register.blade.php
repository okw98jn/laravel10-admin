<x-layouts.guest>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-admin.auth.input-label for="name" :value="__('Name')" />
            <x-admin.auth.text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-admin.auth.input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-admin.auth.input-label for="login_id" :value="__('Login Id')" />
            <x-admin.auth.text-input id="login_id" class="block mt-1 w-full" type="text" name="login_id" :value="old('login_id')" required autocomplete="username" />
            <x-admin.auth.input-error :messages="$errors->get('login_id')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-admin.auth.input-label for="password" :value="__('Password')" />

            <x-admin.auth.text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-admin.auth.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-admin.auth.input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-admin.auth.text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-admin.auth.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-admin.auth.primary-button class="ml-4">
                {{ __('Register') }}
            </x-admin.auth.primary-button>
        </div>
    </form>
</x-layouts.guest>
