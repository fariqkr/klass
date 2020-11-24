<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Klass | Convenient e-Learning Platform for Schools</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
                <li>
                    <a href="/" class="p-3">Student</a>
                </li>
                <li>
                    <a href="/" class="p-3">Teacher</a>
                </li>
            </ul>

            <ul class="flex items-center">
                @auth
                    <li>
                        <a href="" class="p-3">Dani Ihza Farrosi</a>
                    </li>
                    <li>
                        <form action="/" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="/" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register.student') }}" class="p-3">Register</a>
                    </li>
                @endguest
            </ul>
        </nav>

        @yield('content')

    </body>
</html>
