<x-guest-layout>
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

            <div>
                <x-jet-label for="tussenvoegsel" value="{{ __('tussenvoegsel') }}" />
                <x-jet-input id="tussenvoegsel" class="block mt-1 w-full" type="text" name="tussenvoegsel" :value="old('name')" autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="achternaam" value="{{ __('achternaam') }}" />
                <x-jet-input id="achternaam" class="block mt-1 w-full" type="text" name="achternaam" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="mobiel" value="{{ __('mobiel') }}" />
                <x-jet-input id="mobiel" class="block mt-1 w-full" type="text" name="mobiel" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="straatnaam" value="{{ __('straatnaam') }}" />
                <x-jet-input id="straatnaam" class="block mt-1 w-full" type="text" name="straatnaam" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="huisnummer" value="{{ __('huisnummer') }}" />
                <x-jet-input id="huisnummer" class="block mt-1 w-full" type="text" name="huisnummer" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="postcode" value="{{ __('postcode') }}" />
                <x-jet-input id="postcode" class="block mt-1 w-full" type="text" name="postcode" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="woonplaats" value="{{ __('woonplaats') }}" />
                <x-jet-input id="woonplaats" class="block mt-1 w-full" type="text" name="woonplaats" :value="old('name')" required autofocus autocomplete="name" />
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
                            <x-jet-checkbox name="terms" id="terms"/>

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
</x-guest-layout>
