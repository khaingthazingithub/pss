<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>@yield('title')</title>

     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

     <link rel="stylesheet" href="{{ asset('css/admin.css') }}">


     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">

     <div class="wrapper">

          <header class="main-header">
               <!-- Logo -->
               <a href="/home" class="logo">
                    <span class="logo-lg"><b>HOME PAGE</b></span>
               </a>

               <nav class="navbar navbar-static-top">

                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                         <ul class="nav navbar-nav">
                              <li class="dropdown user user-menu">
                                   <a href="#" class="dropdown-toggle bg-primary" data-toggle="dropdown">
                                        <span class="hidden-xs">
                                             @if(\Auth::check())
                                             {{ \Auth::user()->name }}</span>
                                             @endif
                                        </a>
                                        <ul class="dropdown-menu">
                                             <!-- Menu Footer-->
                                             <li class="user-footer">
                                                  <div class="text-center">
                                                       <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                       <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                                  </div>
                                             </li>
                                        </ul>
                                   </li>
                                   <!-- Control Sidebar Toggle Button -->
                                   <li>
                                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                                   </li>
                              </ul>
                         </div>
                    </nav>
               </header>

               <!-- =============================================== -->

               <!-- Left side column. contains the sidebar -->
               <aside class="main-sidebar">
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">
                         <ul class="sidebar-menu" data-widget="tree">
                              <a href="/dashboard">
                                   <h4 class="text-center"><span class="fa fa-tachometer fa-2x"></span></h4>
                              </a>

                              <li class="treeview">
                                   <a href="#">
                                        <i class="fa fa-th"></i> <span>Categories</span>
                                        <span class="pull-right-container">
                                             <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                   </a>
                                   <ul class="treeview-menu">
                                        <li><a href="{{ route('categorytypes.index') }}">
                                             <i class="fa fa-check"></i>all category types</a></li>
                                             <li><a href="{{ route('categories.index') }}">
                                                  <i class="fa fa-check"></i>all category names</a></li>
                                             </ul>
                                        </li>

                                        <li class="treeview">
                                             <a href="#">
                                                  <i class="fa fa-list-ul"></i> <span>Brands</span>
                                                  <span class="pull-right-container">
                                                       <i class="fa fa-angle-left pull-right"></i>
                                                  </span>
                                             </a>
                                             <ul class="treeview-menu">
                                                  <li><a href="{{ route('phonebrands.index') }}">
                                                       <i class="fa fa-check"></i>all brands</a></li>
                                                  </ul>
                                             </li>

                                             <li class="treeview">
                                                  <a href="#">
                                                       <i class="fa fa-list-ol"></i> <span>Models</span>
                                                       <span class="pull-right-container">
                                                            <i class="fa fa-angle-left pull-right"></i>
                                                       </span>
                                                  </a>
                                                  <ul class="treeview-menu">
                                                       <li><a href="{{ route('phonemodels.index') }}">
                                                            <i class="fa fa-check"></i>sale models</a></li>
                                                            <li><a href="{{ route('servicemodels.index') }}">
                                                                 <i class="fa fa-check"></i>all models</a></li>
                                                            </ul>
                                                       </li>

                                                       <li class="treeview">
                                                            <a href="#">
                                                                 <i class="fa fa-book"></i> <span>Costs</span>
                                                                 <span class="pull-right-container">
                                                                      <i class="fa fa-angle-left pull-right"></i>
                                                                 </span>
                                                            </a>
                                                            <ul class="treeview-menu">
                                                                 <li><a href="{{ route('costs.index') }}">
                                                                      <i class="fa fa-check"></i>costs for sale and service</a></li>
                                                                      <li><a href="{{ route('othercosts.index') }}">
                                                                           <i class="fa fa-check"></i>costs for other</a></li>
                                                                      </ul>
                                                                 </li>

                                                                 <li class="treeview">
                                                                      <a href="#">
                                                                           <i class="fa fa-info-circle"></i> <span>Details</span>
                                                                           <span class="pull-right-container">
                                                                                <i class="fa fa-angle-left pull-right"></i>
                                                                           </span>
                                                                      </a>
                                                                      <ul class="treeview-menu">
                                                                           <li><a href="{{ url('phonedetails') }}">
                                                                                <i class="fa fa-check"></i>phone details</a></li>
                                                                                <li><a href="{{ url('/featuredetails') }}">
                                                                                     <i class="fa fa-check"></i>keypad and featured detail</a></li>
                                                                                </ul>
                                                                           </li>

                                                                           <li class="treeview">
                                                                                <a href="#">
                                                                                     <i class="fa fa-product-hunt"></i> <span>Products</span>
                                                                                     <span class="pull-right-container">
                                                                                          <i class="fa fa-angle-left pull-right"></i>
                                                                                     </span>
                                                                                </a>
                                                                                <ul class="treeview-menu">
                                                                                     <li><a href="{{ url('/saleproducts') }}">
                                                                                          <i class="fa fa-check"></i>sale products</a></li>
                                                                                          <li><a href="{{ route('serviceproducts.index') }}">
                                                                                               <i class="fa fa-check"></i>service products</a></li>
                                                                                          </ul>
                                                                                     </li>

                                                                                     <li class="treeview">
                                                                                          <a href="#">
                                                                                               <i class="fa fa-wrench"></i> <span>Phone Services</span>
                                                                                               <span class="pull-right-container">
                                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                                               </span>
                                                                                          </a>
                                                                                          <ul class="treeview-menu">
                                                                                               <li><a href="{{ url('/phoneservices/create') }}">
                                                                                                    <i class="fa fa-check"></i>create service customers</a></li>
                                                                                                    <li><a href="{{ url('/phoneservices') }}">
                                                                                                         <i class="fa fa-check"></i>all service customers</a></li>
                                                                                                    </ul>
                                                                                               </li>

                                                                                               <li class="treeview">
                                                                                                    <a href="#">
                                                                                                         <i class="fa fa-building"></i> <span>Departments</span>
                                                                                                         <span class="pull-right-container">
                                                                                                              <i class="fa fa-angle-left pull-right"></i>
                                                                                                         </span>
                                                                                                    </a>
                                                                                                    <ul class="treeview-menu">
                                                                                                         <li><a href="{{ route('departments.index') }}">
                                                                                                              <i class="fa fa-check"></i> all departments</a></li>
                                                                                                         </ul>
                                                                                                    </li>

                                                                                                    <li class="treeview">
                                                                                                         <a href="#">
                                                                                                              <i class="fa fa-signal"></i> <span>Statuses</span>
                                                                                                              <span class="pull-right-container">
                                                                                                                   <i class="fa fa-angle-left pull-right"></i>
                                                                                                              </span>
                                                                                                         </a>
                                                                                                         <ul class="treeview-menu">
                                                                                                              <li><a href="{{ route('status.index') }}">
                                                                                                                   <i class="fa fa-check"></i> all statuses</a></li>
                                                                                                              </ul>
                                                                                                         </li>

                                                                                                         <li class="treeview">
                                                                                                              <a href="#">
                                                                                                                   <i class="fa fa-bars"></i> <span>Rollcall</span>
                                                                                                                   <span class="pull-right-container">
                                                                                                                        <i class="fa fa-angle-left pull-right"></i>
                                                                                                                   </span>
                                                                                                              </a>
                                                                                                              <ul class="treeview-menu">
                                                                                                                   <li><a href="{{ url('/employee_list') }}">
                                                                                                                        <i class="fa fa-check"></i> employee list</a></li>
                                                                                                                   </ul>
                                                                                                              </li>

                                                                                                              <li class="treeview">
                                                                                                                   <a href="#">
                                                                                                                        <i class="fa fa-users"></i> <span>Employees</span>
                                                                                                                        <span class="pull-right-container">
                                                                                                                             <i class="fa fa-angle-left pull-right"></i>
                                                                                                                        </span>
                                                                                                                   </a>
                                                                                                                   <ul class="treeview-menu">
                                                                                                                        <li><a href="{{ route('employees.create') }}">
                                                                                                                             <i class="fa fa-check"></i> create new employees</a></li>
                                                                                                                             <li><a href="{{ route('employees.index') }}">
                                                                                                                                  <i class="fa fa-check"></i> all employees</a></li>
                                                                                                                             </ul>
                                                                                                                        </li>

                                                                                                                        <li class="treeview">
                                                                                                                             <a href="#">
                                                                                                                                  <i class="fa fa-usd"></i> <span>Salaries</span>
                                                                                                                                  <span class="pull-right-container">
                                                                                                                                       <i class="fa fa-angle-left pull-right"></i>
                                                                                                                                  </span>
                                                                                                                             </a>
                                                                                                                             <ul class="treeview-menu">
                                                                                                                                  <li><a href="{{ route('salaries.index') }}">
                                                                                                                                       <i class="fa fa-check"></i> department salaries</a></li>
                                                                                                                                       <li><a href="{{ route('employeesalaries.index') }}">
                                                                                                                                            <i class="fa fa-check"></i> employee salaries</a></li>
                                                                                                                                       </ul>
                                                                                                                                  </li>
                                                                                                                                  <li class="treeview">
                                                                                                                                       <a href="#">
                                                                                                                                            <i class="fa fa-circle-o"></i> <span>Roles</span>
                                                                                                                                            <span class="pull-right-container">
                                                                                                                                                 <i class="fa fa-angle-left pull-right"></i>
                                                                                                                                            </span>
                                                                                                                                       </a>
                                                                                                                                       <ul class="treeview-menu">
                                                                                                                                            <li><a href="{{ route('salaries.index') }}">
                                                                                                                                                 <i class="fa fa-check"></i> all roles</a></li>
                                                                                                                                            </ul>
                                                                                                                                       </li>
                                                                                                                                  </section>
                                                                                                                                  <!-- /.sidebar -->
                                                                                                                             </aside>

                                                                                                                             <!-- =============================================== -->

                                                                                                                             <!-- Content Wrapper. Contains page content -->
                                                                                                                             <div class="content-wrapper">
                                                                                                                                  <!-- Content Header (Page header) -->
                                                                                                                                  <!-- <section class="content-header">
                                                                                                                                  <h3 class="text-center">@yield('header')</h3>
                                                                                                                             </section> -->

                                                                                                                             <!-- Main content -->
                                                                                                                             <section class="content">
                                                                                                                                  @yield('content')
                                                                                                                             </section>
                                                                                                                             <!-- /.content -->
                                                                                                                        </div>
                                                                                                                        <!-- /.content-wrapper -->

                                                                                                                        <footer class="main-footer">
                                                                                                                             <div class="pull-right hidden-xs">
                                                                                                                                  <b>Version</b> 2.4.0
                                                                                                                             </div>
                                                                                                                             <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
                                                                                                                             reserved.
                                                                                                                        </footer>

                                                                                                                        <!-- Control Sidebar -->
                                                                                                                        <aside class="control-sidebar control-sidebar-dark">
                                                                                                                             <!-- Create the tabs -->
                                                                                                                             <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                                                                                                                                  <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                                                                                                                                  <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                                                                                                                             </ul>
                                                                                                                             <!-- Tab panes -->
                                                                                                                             <div class="tab-content">
                                                                                                                                  <!-- Home tab content -->
                                                                                                                                  <div class="tab-pane" id="control-sidebar-home-tab">
                                                                                                                                       <h3 class="control-sidebar-heading">Recent Activity</h3>
                                                                                                                                       <ul class="control-sidebar-menu">
                                                                                                                                            <li>
                                                                                                                                                 <a href="javascript:void(0)">
                                                                                                                                                      <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                                                                                                                                      <div class="menu-info">
                                                                                                                                                           <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                                                                                                                                           <p>Will be 23 on April 24th</p>
                                                                                                                                                      </div>
                                                                                                                                                 </a>
                                                                                                                                            </li>
                                                                                                                                            <li>
                                                                                                                                                 <a href="javascript:void(0)">
                                                                                                                                                      <i class="menu-icon fa fa-user bg-yellow"></i>

                                                                                                                                                      <div class="menu-info">
                                                                                                                                                           <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                                                                                                                                           <p>New phone +1(800)555-1234</p>
                                                                                                                                                      </div>
                                                                                                                                                 </a>
                                                                                                                                            </li>
                                                                                                                                            <li>
                                                                                                                                                 <a href="javascript:void(0)">
                                                                                                                                                      <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                                                                                                                                      <div class="menu-info">
                                                                                                                                                           <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                                                                                                                                           <p>nora@example.com</p>
                                                                                                                                                      </div>
                                                                                                                                                 </a>
                                                                                                                                            </li>
                                                                                                                                            <li>
                                                                                                                                                 <a href="javascript:void(0)">
                                                                                                                                                      <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                                                                                                                                      <div class="menu-info">
                                                                                                                                                           <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                                                                                                                                           <p>Execution time 5 seconds</p>
                                                                                                                                                      </div>
                                                                                                                                                 </a>
                                                                                                                                            </li>
                                                                                                                                       </ul>
                                                                                                                                       <!-- /.control-sidebar-menu -->

                                                                                                                                       <h3 class="control-sidebar-heading">Tasks Progress</h3>
                                                                                                                                       <ul class="control-sidebar-menu">
                                                                                                                                            <li>
                                                                                                                                                 <a href="javascript:void(0)">
                                                                                                                                                      <h4 class="control-sidebar-subheading">
                                                                                                                                                           Custom Template Design
                                                                                                                                                           <span class="label label-danger pull-right">70%</span>
                                                                                                                                                      </h4>

                                                                                                                                                      <div class="progress progress-xxs">
                                                                                                                                                           <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                                                                                                                                      </div>
                                                                                                                                                 </a>
                                                                                                                                            </li>
                                                                                                                                            <li>
                                                                                                                                                 <a href="javascript:void(0)">
                                                                                                                                                      <h4 class="control-sidebar-subheading">
                                                                                                                                                           Update Resume
                                                                                                                                                           <span class="label label-success pull-right">95%</span>
                                                                                                                                                      </h4>

                                                                                                                                                      <div class="progress progress-xxs">
                                                                                                                                                           <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                                                                                                                                      </div>
                                                                                                                                                 </a>
                                                                                                                                            </li>
                                                                                                                                            <li>
                                                                                                                                                 <a href="javascript:void(0)">
                                                                                                                                                      <h4 class="control-sidebar-subheading">
                                                                                                                                                           Laravel Integration
                                                                                                                                                           <span class="label label-warning pull-right">50%</span>
                                                                                                                                                      </h4>

                                                                                                                                                      <div class="progress progress-xxs">
                                                                                                                                                           <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                                                                                                                                      </div>
                                                                                                                                                 </a>
                                                                                                                                            </li>
                                                                                                                                            <li>
                                                                                                                                                 <a href="javascript:void(0)">
                                                                                                                                                      <h4 class="control-sidebar-subheading">
                                                                                                                                                           Back End Framework
                                                                                                                                                           <span class="label label-primary pull-right">68%</span>
                                                                                                                                                      </h4>

                                                                                                                                                      <div class="progress progress-xxs">
                                                                                                                                                           <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                                                                                                                                      </div>
                                                                                                                                                 </a>
                                                                                                                                            </li>
                                                                                                                                       </ul>
                                                                                                                                       <!-- /.control-sidebar-menu -->

                                                                                                                                  </div>
                                                                                                                                  <!-- /.tab-pane -->
                                                                                                                                  <!-- Stats tab content -->
                                                                                                                                  <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                                                                                                                                  <!-- /.tab-pane -->
                                                                                                                                  <!-- Settings tab content -->
                                                                                                                                  <div class="tab-pane" id="control-sidebar-settings-tab">
                                                                                                                                       <form method="post">
                                                                                                                                            <h3 class="control-sidebar-heading">General Settings</h3>

                                                                                                                                            <div class="form-group">
                                                                                                                                                 <label class="control-sidebar-subheading">
                                                                                                                                                      Report panel usage
                                                                                                                                                      <input type="checkbox" class="pull-right" checked>
                                                                                                                                                 </label>

                                                                                                                                                 <p>
                                                                                                                                                      Some information about this general settings option
                                                                                                                                                 </p>
                                                                                                                                            </div>
                                                                                                                                            <!-- /.form-group -->

                                                                                                                                            <div class="form-group">
                                                                                                                                                 <label class="control-sidebar-subheading">
                                                                                                                                                      Allow mail redirect
                                                                                                                                                      <input type="checkbox" class="pull-right" checked>
                                                                                                                                                 </label>

                                                                                                                                                 <p>
                                                                                                                                                      Other sets of options are available
                                                                                                                                                 </p>
                                                                                                                                            </div>
                                                                                                                                            <!-- /.form-group -->

                                                                                                                                            <div class="form-group">
                                                                                                                                                 <label class="control-sidebar-subheading">
                                                                                                                                                      Expose author name in posts
                                                                                                                                                      <input type="checkbox" class="pull-right" checked>
                                                                                                                                                 </label>

                                                                                                                                                 <p>
                                                                                                                                                      Allow the user to show his name in blog posts
                                                                                                                                                 </p>
                                                                                                                                            </div>
                                                                                                                                            <!-- /.form-group -->

                                                                                                                                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                                                                                                                                            <div class="form-group">
                                                                                                                                                 <label class="control-sidebar-subheading">
                                                                                                                                                      Show me as online
                                                                                                                                                      <input type="checkbox" class="pull-right" checked>
                                                                                                                                                 </label>
                                                                                                                                            </div>
                                                                                                                                            <!-- /.form-group -->

                                                                                                                                            <div class="form-group">
                                                                                                                                                 <label class="control-sidebar-subheading">
                                                                                                                                                      Turn off notifications
                                                                                                                                                      <input type="checkbox" class="pull-right">
                                                                                                                                                 </label>
                                                                                                                                            </div>
                                                                                                                                            <!-- /.form-group -->

                                                                                                                                            <div class="form-group">
                                                                                                                                                 <label class="control-sidebar-subheading">
                                                                                                                                                      Delete chat history
                                                                                                                                                      <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                                                                                                                                 </label>
                                                                                                                                            </div>
                                                                                                                                            <!-- /.form-group -->
                                                                                                                                       </form>
                                                                                                                                  </div>
                                                                                                                                  <!-- /.tab-pane -->
                                                                                                                             </div>
                                                                                                                        </aside>
                                                                                                                        <!-- /.control-sidebar -->
                                                                                                                        <!-- Add the sidebar's background. This div must be placed
                                                                                                                        immediately after the control sidebar -->
                                                                                                                        <div class="control-sidebar-bg"></div>
                                                                                                                   </div>
                                                                                                                   <!-- ./wrapper -->

                                                                                                                   <!-- jQuery 3 -->
                                                                                                                   <!-- <script src="../../bower_components/jquery/dist/jquery.min.js"></script> -->
                                                                                                                   <!-- Bootstrap 3.3.7 -->
                                                                                                                   <!-- <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
                                                                                                                   <!-- SlimScroll -->
                                                                                                                   <!-- <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> -->
                                                                                                                   <!-- FastClick -->
                                                                                                                   <!-- <script src="../../bower_components/fastclick/lib/fastclick.js"></script> -->
                                                                                                                   <!-- AdminLTE App -->
                                                                                                                   <!-- <script src="../../dist/js/adminlte.min.js"></script> -->
                                                                                                                   <!-- AdminLTE for demo purposes -->
                                                                                                                   <!-- <script src="../../dist/js/demo.js"></script> -->

                                                                                                                   <script src="{{ asset('js/admin.js') }}"></script>

                                                                                                                   @stack('scripts')

                                                                                                              </body>
                                                                                                              </html>
