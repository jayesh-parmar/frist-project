<head>
    <link rel="stylesheet" href="css/login/style.css">
</head>
<body>
    

<div class="content">
    <div class="text">
       Login Form
    </div>
    <form method="POST" action="{{ route('login') }}">
       @csrf
       <div class="field">
          <input  required type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username">
          <span class="fas fa-user"></span>
       </div>
       <x-input-error :messages="$errors->get('email')" class="mt-2" />
       <div class="field">
          <input type="password" name="password" required autocomplete="current-password" placeholder="Password" > 
          <span class="fas fa-lock"></span>
        
       </div>
       <x-input-error :messages="$errors->get('password')" class="mt-2" />
       @if (Route::has('password.request'))
       <div class="forgot-pass">
          <a href="{{ route('password.request') }}">Forgot Password?</a>
       </div>
       @endif 
       <button>Sign in</button>
       <div class="sign-up">
          Not a member?
          <a href="{{ route('register') }}">signup now</a>
       </div>
    </form>
 </div>
</body>