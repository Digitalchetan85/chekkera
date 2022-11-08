{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<x-guest-layout>
    <div id="login-form" class="my-5 shadow-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form id="contactform1" class="contact-form" method="POST" action="{{route('login')}}">
                        @csrf
                        
                        <x-jet-validation-errors class="mb-4 text-danger" />
                        <div class="input-group mb-5">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user mx-1"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" :value="old('email')" required autofocus>
                        </div>
                        <div class="input-group mb-5">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye mx-1"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" :value="old('email')" required autofocus>
                        </div>                          
                        <button type="submit" class="btn btn-primary w-100"><span>Login</span></button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</x-guest-layout>