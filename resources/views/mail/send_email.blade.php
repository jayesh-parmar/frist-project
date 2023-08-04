@Include('layouts.header')

<body>

    <div>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    

        <!-- component -->
<div class="heading text-center font-bold text-2xl m-5 text-gray-800">Send Mail To All User</div>
<style>
  body {background:white !important;}
</style>

    {{-- @if(count($erorrs)>0)
    {

    } --}}

{{-- @if ($message=Session::get('success'))
    {{$message}}
@endif --}}


<form action="{{route('send_content')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
    <label for="title">Subject :</label>
    <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false"  type="text"  placeholder="Enter Your Subject" name="subject">
    <x-input-error :messages="$errors->get('subject')" class="mt-2" />
    <label for="title">Content :</label>
    <textarea class="description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false" placeholder="Enter everything about this Email here"   name="content" ></textarea>
    <x-input-error :messages="$errors->get('content')" class="mt-2" />
        <br>
        <label for="title">Upload Image</label>
        <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false"   type="file" name="image">
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
    <!-- buttons -->
    <div class="buttons flex">
      <div class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Cancel</div>
      <div class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500"><button>Send Mail</button></div>
    </div>
  </div>
    </div>
</form>
        