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
</x-guest-layout> --}}

@extends('layouts.frontend')

@section('content')
<div class="register-wrap">
    <div class="container">
      <div class="form-wrapper">
        <div class="form-base">
          <h3 class="plain-h3">Nouveau compte</h3>
          <div class="text-block-95">Etape 1/3</div>
          <div class="w-form">
            <form id="wf-form-Register-Form" data-name="Register Form" action="{{ route('register') }}" method="POST">
                @csrf 

              <div class="form-wrap">
                  <input type="text" class="input-field w-input" maxlength="256" name="name" data-name="Nom complet" placeholder="Nom complet" id="Nom-complet">
                  @error('name')
                      <small style="color:red;">{{ $message }}</small>
                  @enderror
            </div>
              <div class="form-wrap">
                  <input type="email" class="input-field w-input" maxlength="256" name="email" data-name="Adresse email" placeholder="Adresse email">
                  @error('email')
                      <small style="color:red;">{{ $message }}</small>
                  @enderror
            </div>
              <div class="form-wrap">
                  <input type="password" class="input-field w-input" maxlength="256" name="password" data-name="Password" placeholder="Password">
                  @error('password')
                      <small style="color:red;">{{ $message }}</small>
                  @enderror
            </div>
              <div class="form-wrap">
                  <input type="password" class="input-field w-input" maxlength="256" name="password_confirmation" data-name="Password" placeholder="Confirm Password">
                  @error('password_confirmation')
                      <small style="color:red;">{{ $message }}</small>
                  @enderror
            </div>
              
              <label class="w-checkbox checkbox-field">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                <input required type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1">
                <span class="paragraph w-form-label">J&#x27;accepte les conditions d&#x27;utilisation<a href="../legal/privacy.html" class="link-28"></a>
                </span>
              </label><input type="submit" value="Continuer" data-wait="Juste quelques secondes ..." class="button-submit w-button">
            </form>
            <a href="{{ url('auth/google') }}" class="link-block-21 w-inline-block"><img src="https://uploads-ssl.webflow.com/5e360a99f4dd53fd793925af/5e3610787aa7cf5890a26ae8_google-logo.svg" alt="" class="login-logo">
                <div class="text-block-501">S&#x27;inscrire avec Google</div>
              </a>
            <div class="success-message w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
          <div class="line-break"></div>
          <div class="account-link-wrap">
            <a href="#" class="paragraph">Déjà inscrit(e) ?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
