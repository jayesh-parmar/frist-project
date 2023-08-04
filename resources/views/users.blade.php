
@Include('layouts.header')

<body>
    <div>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
                                
    <div class="container mt-5">
        <div class="row">
           
            <table class="table  table-hover table-bordered mt-2 table-responsive text-center">
                <thead class="thead-dark" >
                    <tr>
                        <th scope="col">id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                    <tr>
                        <td scope="row">{{$user->id}}</td>
                        <td scope="row">{{$user->name}}</td>
                        <td scope="row">{{$user->email}}</td>
                        <td><a   class="btn btn-primary" href="{{route('edit_email',$user->id)}}" role="button">Update</a></td>
                        <td><a name=""  class="btn btn-danger" href="{{route('delete_email',$user->id)}}" role="button">Delete</a></td> 
                    </tr>
                    @endforeach    
                </tbody>
            </table>
            </div> 
        </div>
    </div>
</body>

@Include('layouts.footer')

</html> 
 