<x-layouts.guest>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-admin.auth.input-label for="login_id" :value="__('Login Id')" />
            <x-admin.auth.text-input id="login_id" class="block mt-1 w-full" type="text" name="login_id" :value="old('login_id')" required autofocus autocomplete="username" />
            <x-admin.auth.input-error :messages="$errors->get('login_id')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-admin.auth.input-label for="password" :value="__('Password')" />
            <x-admin.auth.text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-admin.auth.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('Already registered?') }}
            </a>
            <x-admin.auth.primary-button class="ml-3">
                {{ __('Log in') }}
            </x-admin.auth.primary-button>
        </div>
    </form>
</x-layouts.guest>