<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    @include('admin.template.head')
    <style>
        .mb10{
            margin-bottom: 10px;
        }
        label {
            text-transform: initial!important;
        }
    </style>
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

    <script>
        NProgress.configure({ showSpinner: false });
        NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>


    <div id="toaster"></div>


    <div class="wrapper">
        <!-- Github Link -->
        <a href="https://github.com/tafcoder/sleek-dashboard" class="github-link">
            <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
            </svg>
            <i class="mdi mdi-github-circle"></i>
        </a>

        <!--
            ====================================
            ——— LEFT SIDEBAR WITH FOOTER
            =====================================
        -->
        @include('admin.template.aside')



        <div class="page-wrapper">
            <!-- Header -->

            @include('admin.template.header')

            <div class="content-wrapper">
                <div class="content">
                    @yield('content')
                </div>
            </div>

            @include('admin.template.footer')

        </div>
    </div>

    @include('admin.template.scripts')
    @yield("scripts")

</body>

</html>
