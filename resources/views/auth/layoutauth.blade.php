<!DOCTYPE html>
<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title','Title')</title>
    <link rel="apple-touch-icon" href={{URL::asset('app-assets/images/ico/apple-icon-120.png')}}>
    <link rel="shortcut icon" type="image/x-icon" href={{URL::asset('app-assets/images/ico/favicon.ico')}}>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/vendors/css/vendors-rtl.min.css')}}>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/bootstrap.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/bootstrap-extended.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/colors.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/components.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/themes/dark-layout.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/themes/bordered-layout.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/themes/semi-dark-layout.css')}}>

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/plugins/forms/form-validation.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/pages/authentication.css')}}>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/custom-rtl.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('assets/css/style-rtl.css')}}>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src={{URL::asset('app-assets/vendors/js/vendors.min.js')}}></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src={{URL::asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src={{URL::asset('app-assets/js/core/app-menu.js')}}></script>
    <script src={{URL::asset('app-assets/js/core/app.js')}}></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src={{URL::asset('app-assets/js/scripts/pages/auth-login.js')}}></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->








