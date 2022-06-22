<x-guest-layout>
    <x-auth-card>

       
    
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="grid grid-cols-4 justify-center">
                <!-- Name -->
                <div class="col-start-2 col-span-2">
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" class="w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4 col-start-2 col-span-2">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="mt-4 col-start-2 col-span-2">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 col-start-2 col-span-2">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-input id="password_confirmation" class="w-full" type="password" name="password_confirmation" required />
                </div>
            </div>
            <div class="mt-4 grid grid-cols-3 place-items-center">
                <div class="mt-0 col-start-2 items-center">
                    <x-button>
                        {{ __('Register') }}
                    </x-button>
                </div>
                <div class="mt-0 col-start-2 items-center pt-6 pb-32">
                    <a class="text-sm text-justify overline text-slate-400 hover:text-sky-400" href="{{ route('login') }}">
                        {{ __('Already registered? Click here to login') }}
                    </a>
                </div>
            </div>
    
        </form>
    </x-auth-card>
</x-guest-layout>
