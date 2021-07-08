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

@extends('layouts.frontend')


@section('content')
<div class="login-wrap">
    <div class="container">
      <div class="form-wrapper">
        <div class="form-base">
          <h3>Se connecter</h3>
          <div class="w-form">
            <form id="wf-form-Login-Form"  data-name="Login Form" method="post" action="{{ route('login') }}">
                @csrf
              <div class="form-wrap _1-line">

                  <input type="email" class="input-field w-input" maxlength="256" name="email" data-name="Login Email" placeholder="Adresse email" id="Login-Email" required="">

                  @error('email')
                      <small style="color:red;">{{ $message }}</small>
                  @enderror
                
              </div>
              <div class="form-wrap _1-line">
                  <input type="password" class="input-field w-input" maxlength="256" name="password" data-name="Password" placeholder="Mot de passe" id="Password" required="">
                  @error('password')
                  <small style="color:red;">{{ $message }}</small>
                  @enderror
                
              </div>
              <div class="div-block-246">
                <a href="{{ url('/forgot-password') }}" class="link-52">Mot de passe oublié ?</a>
              </div>
              <div class="form-wrap _1-line">
                <a id="w-node-_4aaf95f0-bc9d-4c54-6eda-9eeb22d3f75b-b63fa710" href="{{ route('login') }}" class="button w-button" onclick="event.preventDefault();this.closest('form').submit();">Connexion</a>
              </div>
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
          <div class="account-link-wrap">
            <a href="{{ route('register') }}" class="link-50">Je n&#x27;ai pas encore de compte</a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
