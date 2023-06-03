<x-layouts.guest>
    <!-- Session Status -->
    <x-user.auth.auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('user.login') }}">
        @csrf
        ユーザー
        <!-- Email Address -->
        <div>
            <x-user.auth.input-label for="email" :value="__('Email')" />
            <x-user.auth.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-user.auth.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-user.auth.input-label for="password" :value="__('Password')" />

            <x-user.auth.text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-user.auth.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('user.password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('user.password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-user.auth.primary-button class="ml-3">
                {{ __('Log in') }}
            </x-user.auth.primary-button>
        </div>
    </form>
</x-layouts.guest>