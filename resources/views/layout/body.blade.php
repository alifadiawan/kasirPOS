<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('layout.style')

</head>


<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        @include('layout.sidebar')
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">

            <!--  Header Start -->
            @include('layout.topbar')
            <!--  Header End -->

            <!--  Header Start -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!--  Header End -->

            <!-- Footer Start -->
            @include('layout.footer')
            <!-- Footer End -->
        </div>
    </div>

    @include('layout.script')

</body>


</html>
