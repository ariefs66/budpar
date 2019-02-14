@extends('layouts.admin.master')
@section('content')
<style type="text/css">
    .btn-file {
    position: relative;
    overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

</style>
<div id="app">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Add User</h4> </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                     <a href="{{ url('/admin/hotel/addform/') }}" class="float" id="menu-share" title="Add New" data-placement = "left">
                        <i class="fa fa-plus my-float"></i>
                    </a>
                        <div class="row row-in" style="padding: 15px">
                            <div class="table-responsive">
                                <table id="tableHotel" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Price Start</th>
                                            <th>Star</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach($hotel as $org){ ?>
                                            <tr>
                                                <td>{{$no}}.</td>
                                                <td>{{$org->nama}}</td>
                                                <td>{{$org->alamat}}</td>
                                                <td>{{$org->price_start}}</td>
                                                <td>{{$org->star}}</td>
                                                <td class="text-center">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Action <span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="{{ URL::to('/hotel/view/'. $org->id) }}" class="dropdown-item"><i class="mdi mdi-eye"></i> Detail</a></li>
                                                                <li><a href="{{ URL::to('/hotel/edit/'. $org->id) }}" class="dropdown-item"><i class="mdi mdi-lead-pencil"></i> Edit</a></li>
                                                                <li><a href="{{ URL::to('/hotel/hapus/'. $org->id) }}" class="dropdown-item"><i class="mdi mdi-delete"></i> Hapus</a></li>
                                                    
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
                </div>
            </div>

            @include('layouts.admin.footer')
        
        </div>
    </div>

</div> <!-- app -->
  
@stop

@section('script')
<script src=/js/admin/hotel/index.js></script>
@stop