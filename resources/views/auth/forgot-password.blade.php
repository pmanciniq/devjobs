<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaste tu contraseña? No te preocupes, ingresa tu email y te enviaremos un enlace para recuperar tu cuenta.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between">
            <x-link class="my-2" :href="route('login')">
                Iniciar Sesión
            </x-link>
            <x-link class="my-2" :href="route('register')">
                Crear Cuenta
            </x-link>
        </div>

        <x-primary-button class="my-2 w-full justify-center">
            {{ __('Recuperar Contraseña') }}
        </x-primary-button>

    </form>
</x-guest-layout>
