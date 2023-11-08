<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>
    @include('layouts/style')


</head>

<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        @include('layouts/sidebar')

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-white" id="sidebarToggle"><span class="navbar-toggler-icon"></span></button>


                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">

                <main class="mb-5">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>



    @include('layouts/footer')
    @include('layouts/script')
</body>

</html>
