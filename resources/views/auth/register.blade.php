{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<head>
    <link rel="stylesheet" href="css/login/style.css">
</head>
<body>
    

<div class="content">
    <div class="text">
       Register Form
    </div>
    <form method="POST" action="{{ route('register') }}">
       @csrf
       <div class="field">
          <input  required type="text" name="name" :value="old('name')" placeholder="Enter Name" required autofocus autocomplete="name">
          <span class="fas fa-user"></span>
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

       <br>

       <div class="field">
        <input  required type="email" name="email" :value="old('email')" placeholder="Enter Email" required autofocus autocomplete="username">
        <span class="fas fa-user"></span>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
      

        <br>

       <div class="field">
          <input type="password" name="password" required autocomplete="new-password" placeholder="Password" > 
          <span class="fas fa-lock"></span>
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
       </div>

       <br>

       <div class="field">
        <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" > 
        <span class="fas fa-lock"></span>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
     </div>
       
       {{-- @if (Route::has('password.request'))
       <div class="forgot-pass">
          <a href="{{ route('password.request') }}">Forgot Password?</a>
       </div>
       @endif  --}}
       <button>Register</button>
       <div class="sign-up">
        Already registered?
          <a href="{{ route('login') }}">Login now</a>
       </div>
    </form>
 </div>
</body>