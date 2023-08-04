<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Navigation Bar</title>
  <!-- Include Bootstrap CSS -->
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <div class="flex items-center">
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <a href="#" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline"  
                :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();" >Logout</a>
                 </form>           
            </div>
        </div>
    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{route('send_email')}}" class="text-gray-900 dark:text-white hover:underline">Send Email</a>
                    </li>
                    <li>
                        <a href="{{route('users.index')}}" class="text-gray-900 dark:text-white hover:underline">Show Email Data</a>
                    </li>
                    <li>
                        <a href="{{route('show_file')}}" class="text-gray-900 dark:text-white hover:underline">Add User By Excle File</a>
                    </li>
                    <li>
                        <a href="{{route('email_form')}}" class="text-gray-900 dark:text-white hover:underline">Add User By Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    


