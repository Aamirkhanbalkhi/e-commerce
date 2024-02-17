@include('Includes.Admin.header')

<body>

    <!-- Begin page -->
    <div id="wrapper">
        @include('Includes.Admin.topbar')
        @include('Includes.Admin.sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{asset('/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('/assets/js/app.min.js')}}"></script>

        <!-- bootstrap  -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
        <script>
            ClassicEditor
                .create(document.querySelector('.CKeditor'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    </div>
</body>

</html>