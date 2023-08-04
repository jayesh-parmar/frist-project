
@component('mail::message')
#  Dear {{ $name }} 
<br>
This Email for {{$data['subject']}}

{{-- @component('mail::button') --}}
{{$data['content']}}
{{-- @endcomponent --}}
Thanks,<br>
jayesh Parmar
{{-- {{ config('app.name') }} --}}
@endcomponent



{{-- 
<!DOCTYPE html>
<html>
<head>
    <title>Nicesnippets.com</title>
</head>
<body>
    <h1></h1>
    {{$name}} <br>
   {{$data['subject']}}
    {{$data['content']}} 
    <p>Thank you!</p>
    
</body>
</html> --}}