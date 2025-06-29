<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Project </title>
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/all.min.css') }}">
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <p>&copy; {{ date('Y') }} Practice Project. All rights reserved.</p>
        <p>Developed by <a href="" target="_blank">Your Name</a></p>
        <p>Follow us on
            <a href="https://www.facebook.com" target="_blank">Facebook</a>,
            <a href="https://www.twitter.com" target="_blank">Twitter</a>,
            <a href="https://www.instagram.com" target="_blank">Instagram</a>
    </footer>

    <script src="{{ asset('public/frontEnd/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/scrpit.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/all.min.js') }}"></script>
    @yield('scripts')

</body>

</html>