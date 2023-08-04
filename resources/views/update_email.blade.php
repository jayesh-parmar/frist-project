<link rel="stylesheet" href="{{asset('css/form/style.css')}}">

<div class="wrapper">
    <h2>Update Email</h2>
    <form method="POST" action="{{route('update_email',$data->id)}}">
        @csrf
      <div class="input-box">
        <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  value="{{$data->name}}" >
      </div>
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
      <div class="input-box">
        <input  type="email" name="email" :value="old('email')" required autocomplete="username" value="{{$data->email}}" >
      </div>
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
      
      <div class="input-box button">
        {{-- <input type="Submit" value="Register Now"> --}}
        <button class="btn btn-primary">Update</button>
      </div>
      
    </form>
  </div>