
        <style>
           .bg-title {
                background: #000000;
                overflow: hidden;
                padding: 15px 10px 0px;
                margin-left: -50.5px;
                margin-right: -25.5px;
            }
        </style>
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="/asset/img/logo_2.png" width="100" height="60" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="/asset/img/wonderfulindonesia_2x.png" width="100" height="50" alt="home" class="dark-logo" style="margin-top:11px" /><!--This is light logo icon--><img src="../plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                    
                </div>
                      
                </div>
                
                <b class="b-date" style="display: none;">
                <label class="label-nav">Date of Detention : </label><input class="" type="text" name="daterange" value="01/01/2018 - 01/15/2018" style="width: 200px; text-align: center;" /></b>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li>
                        <a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs">
                            <i class="ti-close ti-menu" style="font-size: 25px;color: #53657a"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{URL::asset('ampleadmin/plugins/images/users/varun.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"style="color:#53657a">Steave</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close" style="color: #53657a"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu" style="color: #53657a">DISBUDPAR</span></h3> </div>
                <ul class="nav" id="side-menu">
                    
                    
                    <li> 
                        <a href="/dashboard" class="waves-effect"><i class="mdi mdi-home fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard</span>
                        </a>
                    </li>
                    
                     <li> 
                        <a href="/dashboard" class="waves-effect"><i class="mdi mdi-home fa-fw" data-icon="v"></i> <span class="hide-menu"> Trip Order</span>
                        </a>
                    </li>

                    <li> 
                        <a href="/dashboard" class="waves-effect"><i class="mdi mdi-home fa-fw" data-icon="v"></i> <span class="hide-menu"> Penyelenggaraan Acara</span>
                        </a>
                    </li>

                    <li> 
                        <a href="/admin/public-service/traditional-art" class="waves-effect"><i class="mdi mdi-home fa-fw" data-icon="v"></i> <span class="hide-menu"> Lingkup Seni</span>
                        </a>
                    </li>
                    

                    <li> 
                        <a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-odnoklassniki fa-fw" data-icon="v"></i> <span class="hide-menu"> Data<span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            
                            <li> 
                                <a href="/teroris/organisasi/" class="waves-effect"><i class="mdi mdi-account-multiple fa-fw" data-icon="v"></i> <span class="hide-menu">Tempat Wisata</span></a>
                            </li>
                         
                            <li> 
                                <a href="/hotel/index/" class="waves-effect"><i class="mdi mdi-account fa-fw" data-icon="v"></i> <span class="hide-menu"> Hotel</span></a>
                            </li>
                       
                            <li> 
                               <a href="/teroris/relasi" class="waves-effect"><i class="mdi mdi-account-switch fa-fw" data-icon="v"></i> <span class="hide-menu"> Restaurant</span></a>
                            </li>

                             <li> 
                               <a href="/teroris/relasi" class="waves-effect"><i class="mdi mdi-account-switch fa-fw" data-icon="v"></i> <span class="hide-menu"> Bandros</span></a>
                            </li>
                          
                        </ul>
                    </li>
                    
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-account-multiple fa-fw" data-icon="v"></i> <span class="hide-menu"> User Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li> 
                                <a href="/usermanagement/user/index" class="waves-effect"><i class="mdi mdi-account fa-fw" data-icon="v"></i> <span class="hide-menu"> User</span>
                                </a>    
                            </li>

                            <li>  
                               <a href="/usermanagement/role/index" class="waves-effect"><i class="mdi mdi-link-variant fa-fw" data-icon="v"></i> <span class="hide-menu"> Role</span>
                               </a>
                            </li>
                            <li> 
                                <a href="/usermanagement/page/index" class="waves-effect"><i class="mdi mdi-google-pages fa-fw" data-icon="v"></i> <span class="hide-menu"> Page</span></a> 
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>