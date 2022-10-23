<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('storage/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/jquery.datetimepicker.min.css') }}">
</head>

<body class="py-2 px-4">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">Miguel Fonseca</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Prime Numbers Test
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('primenumbers') }}">Verify</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                ASCII Test
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('ascii') }}">Create Table</a></li>
                                <li><a class="dropdown-item" href="{{ route('removecharacter') }}">Remove Character</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('verifyremovecharacter') }}">Verify Removed
                                        Character</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                TV Series
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('nextontv') }}">Next on TV</a></li>
                                <li><a class="dropdown-item" href="{{ route('selectdate') }}">Select date</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                A/B Test
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('asobject') }}">Get Object</a></li>
                                <li><a class="dropdown-item" href="{{ route('asarray') }}">Get Object as array</a></li>
                                <li><a class="dropdown-item" href="{{ route('asjson') }}">Get Object as json</a></li>
                                <li><a class="dropdown-item" href="{{ route('expanded') }}">Get Object as array with Aditional Data</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
    <footer>
        <div class="row">
            <div class="col py-3 mt-2" style="border-top:solid 1px #cfcfcf;">&copy;2022 Miguel Fonseca for EXADS</div>
        </div>
    </footer>
</body>
<script src="{{ asset('storage/js/bootstrap.bundle.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('storage/js/jquery-3.6.1.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('storage/js/jquery.datetimepicker.full.min.js') }}" crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function () {
    if (jQuery(".datepicker").length > 0) {
        var minDate = jQuery('#minDate').val();
        $('.datepicker').datetimepicker({
            format:'Y-m-d',
            minDate: minDate,
            timepicker:false,
        });
        $('.time').datetimepicker({
            datepicker:false,
            format:'H:i'
        });
    }
});
</script>

</html>
