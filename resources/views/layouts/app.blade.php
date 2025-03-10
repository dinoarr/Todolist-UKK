<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/icon.png') }}" type="image/x-icon" />
    <title>Todolist App</title>

    {{-- Toastr CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Boostsrap --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>

    {{-- sidebar --}}
    <div class="custom">
        <div class="overlay"></div>
        @include('layouts.sidebar')
        <main class="content">
            <div class="main">
                <div class="header mb-4">
                    <h2><span>Pages /</span> @yield('title')</h2>
                </div>
                @yield('content')
            </div>
        </main>
    </div>

    {{-- Bootstrap JS --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        // Toastr configuration
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000"
        };

        // Display success message
        @if (session('status'))
            toastr.success("{{ session('status') }}");
        @endif

        // Display error message
        @if (session('status_error'))
            toastr.error("{{ session('status_error') }}");
        @endif
    </script>



    @stack('scripts')
</body>

</html>
