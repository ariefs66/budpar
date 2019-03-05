<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
       <title>Disbudpar Bandung</title>

    <!-- Favicons-->
    <link rel="shortcut icon" type="image/x-icon" href="/asset/img/stun_logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" href="/asset/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/asset/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/asset/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/asset/img/apple-touch-icon-144x144-precomposed.png">

        <link href="{{URL::asset('ampleadmin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Data Table -->
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Menu CSS -->
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
        <!-- toast CSS -->
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
        <!-- morris CSS -->
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
        <!-- Calendar CSS -->
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />
        <!-- Select2 --> 
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/custom-select/custom-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ampleadmin/plugins/bower_components/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
        <!-- animation CSS -->
        <link href="{{URL::asset('ampleadmin/css/animate.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{URL::asset('ampleadmin/css/style.css')}}" rel="stylesheet">
        <!-- color CSS -->
        <link href="{{URL::asset('ampleadmin/css/colors/default.css')}}" id="theme" rel="stylesheet">
        <link href="{{URL::asset('ampleadmin/css/ihs-custom-crud.css')}}" id="theme" rel="stylesheet"> 
        <style type="text/css">
            .margin-top-20{
                padding-top: 20px;
            }
        </style>   
    </head>