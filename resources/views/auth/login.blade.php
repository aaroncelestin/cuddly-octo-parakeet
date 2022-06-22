<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST"  action="{{ route('login') }}">
            @csrf
            <div class="grid grid-cols-4 justify-center">
            <!-- Email Address -->
                <div class="col-start-2 col-span-2">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-2 col-start-2 col-span-2">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
            
            
                <!-- Remember Me -->
                <div class="mt-2 col-start-2 col-span-2 items-center">
                    <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-slate-400 hover:text-sky-400" focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
            </div>
            <div class="mt-4 grid grid-cols-3 place-items-center">
                <!-- Buttons -->
                <div class="mt-4 col-start-2 items-center">    
                    <x-button class="ml-0">
                        {{ __('Login') }}
                    </x-button>
                </div>
                <div class="mt-4 col-start-2 items-center">
                    <a class="underline pt-6 text-sm text-slate-400 hover:text-sky-400" href="{{ route('register') }}">
                        {{ __('New user? Click here to register') }}
                    </a>
                </div>
                <div class="mt-2 pb-32 col-start-2 items-center">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-slate-400 hover:text-sky-400" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>   
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
