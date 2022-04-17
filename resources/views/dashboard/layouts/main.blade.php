<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <title>{{ $title }}</title>

        <!-- Theme icon -->

        {{-- upload --}}
        <link href="/javascript/dashboard/plugins/dropify/css/dropify.min.css" rel="stylesheet">
        <!-- Theme Css -->
        <link href="/css/dashboard/bootstrap.min.css" rel="stylesheet">
        <link href="/css/dashboard/slidebars.min.css" rel="stylesheet">
        <link href="/css/dashboard/icons.css" rel="stylesheet">
        <link href="/css/dashboard/menu.css" rel="stylesheet" type="text/css">
        <link href="/css/dashboard/style.css" rel="stylesheet">
    </head>

    <body class="sticky-header">
        {{-- import sweetalert library --}}
        @include('sweetalert::alert')

        <section>
            @include('dashboard.layouts.sidebar')
            <!-- body content start-->
            <div class="body-content">
                @include('dashboard.layouts.header')

                <div class="container-fluid">
                @yield('container')                              
                </div><!--end container-->

                <!--footer section start-->
                <footer class="footer">
                    2022 &copy; ReihanManzis.
                </footer>
                <!--footer section end-->
            </div>
            <!--end body content-->
        </section>

        <!-- jQuery -->
        <script src="/javascript/dashboard/jquery-3.2.1.min.js"></script>
        <script src="/javascript/dashboard/popper.min.js"></script>
        <script src="/javascript/dashboard/bootstrap.min.js"></script>
        <script src="/javascript/dashboard/jquery-migrate.js"></script>
        <script src="/javascript/dashboard/modernizr.min.js"></script>
        <script src="/javascript/dashboard/jquery.slimscroll.min.js"></script>
        <script src="/javascript/dashboard/slidebars.min.js"></script>

        <script src="/javascript/dashboard/plugins/tinymce/tinymce.min.js" type="text/javascript"></script>
        
        
        <!--plugins js-->
        <script src="/javascript/dashboard/plugins/counter/jquery.counterup.min.js"></script>
        <script src="/javascript/dashboard/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="/javascript/dashboard/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="/javascript/dashboard/pages/jquery.sparkline.init.js"></script>

        <script src="/javascript/dashboard/plugins/chart-js/Chart.bundle.js"></script>
        <script src="/javascript/dashboard/plugins/morris-chart/raphael-min.js"></script>
        <script src="/javascript/dashboard/plugins/morris-chart/morris.js"></script>
        <script src="/javascript/dashboard/pages/dashboard-init.js"></script>

        <script src="/javascript/dashboard/plugins/dropify/js/dropify.min.js"></script>
        <script src="/javascript/dashboard/jquery.app.js"></script>
        <!--app js-->
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                delay: 100,
                time: 1200
                });
            });
        </script>

        {{-- text editor add new post --}}
        <script type="text/javascript">
            $(document).ready(function () {
                if($("#elm1").length > 0){
                    tinymce.init({
                        selector: "input#elm1",
                        theme: "modern",
                        height:300, 
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ], 
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                        style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ]
                    });
                }
            });
        </script>

        {{-- upload image --}}
        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();
            });
        </script>
    </body>
</html>