<x-layouts.guest>
    <form method="POST" action="{{ route('user.register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-user.auth.input-label for="name" :value="__('Name')" />
            <x-user.auth.text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-user.auth.input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-user.auth.input-label for="email" :value="__('Email')" />
            <x-user.auth.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-user.auth.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-user.auth.input-label for="password" :value="__('Password')" />

            <x-user.auth.text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-user.auth.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-user.auth.input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-user.auth.text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-user.auth.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('user.login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-user.auth.primary-button class="ml-4">
                {{ __('Register') }}
            </x-user.auth.primary-button>
        </div>
    </form>
</x-layouts.guest>