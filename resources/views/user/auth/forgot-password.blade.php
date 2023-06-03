<x-layouts.guest>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-user.auth.auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('user.password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-user.auth.input-label for="email" :value="__('Email')" />
            <x-user.auth.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-user.auth.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-user.auth.primary-button>
                {{ __('Email Password Reset Link') }}
            </x-user.auth.primary-button>
        </div>
    </form>
</x-layouts.guest>