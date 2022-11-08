{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<x-guest-layout>

    <div id="login-form" class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form id="contactform1" class="contact-form shadow bg-primary rounded px-3 py-5" method="POST" action="{{route('register')}}">
                        @csrf
                        <h2 class="mb-3 text-center text-white">Register</h2>
                        <x-jet-validation-errors class="mb-4 text-white" />
                        <div class="input-group mb-3">
                            <span class="input-group-text text-primary" id="basic-addon1"><i class="fa fa-user mx-1"></i></span>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text text-primary" id="basic-addon1"><i class="fa fa-envelope mx-1"></i></span>
                            <input type="email" name="email" class="form-control" :value="old('email')" required autofocus>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text text-primary" id="basic-addon1"><i class="fa fa-eye mx-1"></i></span>
                            <input type="password" name="password" class="form-control">
                        </div> 
                        <div class="input-group mb-3">
                            <span class="input-group-text text-primary" id="basic-addon1"><i class="fa fa-eye mx-1"></i></span>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>                          
                        <button type="submit" class="btn btn-light text-primary form-control"><span>Login</span></button>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</x-guest-layout>