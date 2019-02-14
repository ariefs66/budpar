@extends('layouts.admin.master')
@section('content')
<style type="text/css">
    .load_put{
        margin-left:-4%;height: 280px; max-width: 415px;
    }
    .help-block.error {
      margin-bottom: 5px;
    }
    #breadcrumb {
        list-style: none;
        display: inline-block;
    }
    #breadcrumb .icon {
        font-size: 14px;
    }
    #breadcrumb li {
        float: left;
    }
    #breadcrumb li a {
        color: #FFF;
        display: block;
        background: #3498db;
        text-decoration: none;
        position: relative;
        height: 40px;
        line-height: 40px;
        padding: 0 10px 0 5px;
        text-align: center;
        margin-right: 23px;
    }
    #breadcrumb li:nth-child(even) a {
        background-color: #2980b9;
    }
    #breadcrumb li:nth-child(even) a:before {
        border-color: #2980b9;
        border-left-color: transparent;
    }
    #breadcrumb li:nth-child(even) a:after {
        border-left-color: #2980b9;
    }
    #breadcrumb li:first-child a {
        padding-left: 15px;
        -moz-border-radius: 4px 0 0 4px;
        -webkit-border-radius: 4px;
        border-radius: 4px 0 0 4px;
    }
    #breadcrumb li:first-child a:before {
        border: none;
    }
    #breadcrumb li:last-child a {
        padding-right: 15px;
        -moz-border-radius: 0 4px 4px 0;
        -webkit-border-radius: 0;
        border-radius: 0 4px 4px 0;
    }
    #breadcrumb li:last-child a:after {
        border: none;
    }
    #breadcrumb li a:before, #breadcrumb li a:after {
        content: "";
        position: absolute;
        top: 0;
        border: 0 solid #3498db;
        border-width: 20px 10px;
        width: 0;
        height: 0;
    }
    #breadcrumb li a:before {
        left: -20px;
        border-left-color: transparent;
    }
    #breadcrumb li a:after {
        left: 100%;
        border-color: transparent;
        border-left-color: #3498db;
    }
    #breadcrumb li a:hover {
        background-color: #1abc9c;
    }
    #breadcrumb li a:hover:before {
        border-color: #1abc9c;
        border-left-color: transparent;
    }
    #breadcrumb li a:hover:after {
        border-left-color: #1abc9c;
    }
    #breadcrumb li a:active {
        background-color: #16a085;
    }
    #breadcrumb li a:active:before {
        border-color: #16a085;
        border-left-color: transparent;
    }
    #breadcrumb li a:active:after {
        border-left-color: #16a085;
    }
</style>
<div id="app">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title" style="background: #ffffff26; margin-top:10px">
                <ul id="breadcrumb">
                    <li><a href="#"><span class="icon icon-beaker"> </span> Hotel </a></li>
                    <li><a href="#"><span class="icon icon-beaker"> </span> Add </a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <div class="container">
                                <form id="regis" class="form-horizontal" action="/example" method="post" novalidate>
                                    <div class="form-group">
                                        <label class="col-sm-3 col-md-3 col-lg-3 control-label" align="Right">NIK: </label>
                                        <div class="col-sm-7 col-md-7 col-lg-7">
                                            <input type="text" name="nik" class="form-control input-sm" placeholder="Your Residence Identity Number" data-validation="required" />
                                        </div>
                                    </div>   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center"> 2018 &copy; mouzaindonesia </footer>
        </div>
    </div>

</div> <!-- app -->
  
@stop

@section('script')
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet" type="text/css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $.validate({
      form : '#regis'
    });
</script>
@stop