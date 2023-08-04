@include('layouts.header')

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
<div class="mt-20" >
    <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
      @csrf

    <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
      <label for="title">Add Excle File : Name And Email Store Only </label>
      <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false"   type="file" name="file">
      @error('file')
      <div class="alert alert-danger">{{ $message }}</div>
        @enderror
  
      <!-- buttons -->
      <div class="buttons flex">
        <div class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Cancel</div>
        <div class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500"><button>Upload</button></div>
      </div>
    </div>
      </div>
  </form>
</div>

    </body>
  @include('layouts.footer')
</html>