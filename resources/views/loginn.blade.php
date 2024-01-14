<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.section {
    text-align: center;
    padding: 20px;
    background-color: #fff;
    margin: 50px auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

a {
    text-decoration: none;
    color: #333;
    padding: 8px 16px;
    border-radius: 4px;
    transition: background-color 0.3s ease-in-out;
}

a:hover {
    background-color: #ddd;
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
    .section {
        margin: 30px auto;
        padding: 15px;
    }

    a {
        display: block;
        margin: 10px 0;
    }
}

</style>
<body>
    <section class="section" id="login">
    <div>
        <h1>Choose your option</h1>
    </div>

@if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif

</section>
</body>
</html>



