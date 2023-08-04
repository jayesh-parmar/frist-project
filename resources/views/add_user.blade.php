


<link rel="stylesheet" href="{{asset('css/form/style.css')}}">

<div class="wrapper">
    <h2>Add New User</h2>
    <form  action="" method="post" >
        @csrf
      <div class="input-box">
        <input type="text" name="name" placeholder="Enter Name"  required atofocus autocomplete="name" >
      </div>
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
      <div class="input-box">
        <input  type="email" name="email" placeholder="Enter Email" required autocomplete="username"  >
      </div>
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
      
      <div class="input-box button">
        {{-- <input type="Submit" value="Register Now"> --}}
        <button class="btn btn-primary">Add User</button>
      </div>
      
    </form>
  </div>