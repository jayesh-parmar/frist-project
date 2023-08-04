
<head>
    <link rel="stylesheet" href="css/login/style.css">
</head>
<body>
    

<div class="content">
    <div class="text">
       Welcome 
    </div>
       <div class="sign-up">
         
          @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
                  <a href="{{ url('/dashboard') }}" >Dashboard</a>
              @else
              <a href="{{ route('login') }}" ><button class="btn btn-primary" >Log in</button> </a>
                    Or
                  @if (Route::has('register'))
                  <a href="{{ route('register') }}" ><button class="btn btn-primary" >Register</button></a>  
                  @endif
              @endauth
          </div>
         @endif
       </div>
    </form>
 </div>
</body>