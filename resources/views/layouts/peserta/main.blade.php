<!DOCTYPE html>
<html>

<head>
   @include('layouts.peserta.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.peserta.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
       @include('layouts.peserta.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- footer -->
       @include('layouts.peserta.footer')
        <!-- end footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

   @include('layouts.peserta.script')
</body>

</html>
