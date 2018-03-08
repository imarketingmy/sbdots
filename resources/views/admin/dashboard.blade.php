<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ secure_asset('assets/img/logo-fav.png') }}">
        <title>Proplenx</title>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}"/>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/lib/jqvmap/jqvmap.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
        <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}" type="text/css"/>
    </head>
    <body>
        <div class="be-wrapper be-fixed-sidebar">
            <nav class="navbar navbar-default navbar-fixed-top be-top-header">
                <div class="container-fluid">
                    <div class="navbar-header"><a href="{{ url('/admin') }}" class="navbar-brand"></a>
                    </div>
                    <div class="be-right-navbar">
                        <ul class="nav navbar-nav navbar-right be-user-nav">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="{{ secure_asset('assets/img/avatar.png') }}" alt="Avatar"><span class="user-name">{{ Auth::user()->name }}</span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li>
                                        <div class="user-info">
                                            <div class="user-name">{{ Auth::user()->name }}</div>
                                            <div class="user-position online">Online</div>
                                        </div>
                                    </li>
                                    <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="icon mdi mdi-power"></span> Logout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                        <div class="page-title"><span></span></div>
                        <ul class="nav navbar-nav navbar-right be-icons-nav">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                                <ul class="dropdown-menu be-notifications">
                                    <li>
                                        <div class="title">Notifications<span class="badge">3</span></div>
                                        <div class="list">
                                            <div class="be-scroller">
                                                <div class="content">
                                                    <ul>
                                                        <li class="notification notification-unread">
                                                            <a href="#">
                                                                <div class="image"><img src="assets/img/avatar2.png" alt="Avatar"></div>
                                                                <div class="notification-info">
                                                                    <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div>
                                                                    <span class="date">2 min ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="notification">
                                                            <a href="#">
                                                                <div class="image"><img src="assets/img/avatar3.png" alt="Avatar"></div>
                                                                <div class="notification-info">
                                                                    <div class="text"><span class="user-name">Joel King</span> is now following you</div>
                                                                    <span class="date">2 days ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="notification">
                                                            <a href="#">
                                                                <div class="image"><img src="assets/img/avatar4.png" alt="Avatar"></div>
                                                                <div class="notification-info">
                                                                    <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div>
                                                                    <span class="date">2 days ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="notification">
                                                            <a href="#">
                                                                <div class="image"><img src="assets/img/avatar5.png" alt="Avatar"></div>
                                                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer"> <a href="#">View all notifications</a></div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="be-left-sidebar">
                <div class="left-sidebar-wrapper">
                    <a href="#" class="left-sidebar-toggle">Dashboard</a>
                    <div class="left-sidebar-spacer">
                        <div class="left-sidebar-scroll">
                            <div class="left-sidebar-content">
                                <ul class="sidebar-elements">
                                    <li class="divider">Menu</li>
                                    <li class="active"><a href="index.html"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                                    </li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-face"></i><span>UI Elements</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="ui-alerts.html">Alerts</a>
                                            </li>
                                            <li><a href="ui-buttons.html">Buttons</a>
                                            </li>
                                            <li><a href="ui-panels.html">Panels</a>
                                            </li>
                                            <li><a href="ui-general.html">General</a>
                                            </li>
                                            <li><a href="ui-modals.html">Modals</a>
                                            </li>
                                            <li><a href="ui-notifications.html">Notifications</a>
                                            </li>
                                            <li><a href="ui-icons.html">Icons</a>
                                            </li>
                                            <li><a href="ui-grid.html">Grid</a>
                                            </li>
                                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                                            </li>
                                            <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                                            </li>
                                            <li><a href="ui-typography.html">Typography</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="charts-flot.html">Flot</a>
                                            </li>
                                            <li><a href="charts-sparkline.html">Sparklines</a>
                                            </li>
                                            <li><a href="charts-chartjs.html">Chart.js</a>
                                            </li>
                                            <li><a href="charts-morris.html">Morris.js</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="form-elements.html">Elements</a>
                                            </li>
                                            <li><a href="form-validation.html">Validation</a>
                                            </li>
                                            <li><a href="form-multiselect.html">Multiselect</a>
                                            </li>
                                            <li><a href="form-wizard.html">Wizard</a>
                                            </li>
                                            <li><a href="form-masks.html">Input Masks</a>
                                            </li>
                                            <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                                            </li>
                                            <li><a href="form-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="form-editable.html">X-editable</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="tables-general.html">General</a>
                                            </li>
                                            <li><a href="tables-datatables.html">Data Tables</a>
                                            </li>
                                            <li><a href="tables-filters.html"><span class="label label-primary pull-right">New</span>Table Filters</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-layers"></i><span>Pages</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="pages-blank.html">Blank Page</a>
                                            </li>
                                            <li><a href="pages-blank-header.html">Blank Page Header</a>
                                            </li>
                                            <li><a href="pages-login.html">Login</a>
                                            </li>
                                            <li><a href="pages-login2.html">Login v2</a>
                                            </li>
                                            <li><a href="pages-404.html">404 Page</a>
                                            </li>
                                            <li><a href="pages-sign-up.html">Sign Up</a>
                                            </li>
                                            <li><a href="pages-forgot-password.html">Forgot Password</a>
                                            </li>
                                            <li><a href="pages-profile.html">Profile</a>
                                            </li>
                                            <li><a href="pages-pricing-tables.html">Pricing Tables</a>
                                            </li>
                                            <li><a href="pages-pricing-tables2.html">Pricing Tables v2</a>
                                            </li>
                                            <li><a href="pages-timeline.html">Timeline</a>
                                            </li>
                                            <li><a href="pages-timeline2.html">Timeline v2</a>
                                            </li>
                                            <li><a href="pages-invoice.html"><span class="label label-primary pull-right">New</span>Invoice</a>
                                            </li>
                                            <li><a href="pages-calendar.html">Calendar</a>
                                            </li>
                                            <li><a href="pages-gallery.html">Gallery</a>
                                            </li>
                                            <li><a href="pages-code-editor.html"><span class="label label-primary pull-right">New    </span>Code Editor</a>
                                            </li>
                                            <li><a href="pages-booking.html"><span class="label label-primary pull-right">New</span>Booking</a>
                                            </li>
                                            <li><a href="pages-loaders.html"><span class="label label-primary pull-right">New</span>Loaders</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="divider">Features</li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="email-inbox.html">Inbox</a>
                                            </li>
                                            <li><a href="email-read.html">Email Detail</a>
                                            </li>
                                            <li><a href="email-compose.html">Email Compose</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="layouts-primary-header.html">Primary Header</a>
                                            </li>
                                            <li><a href="layouts-success-header.html">Success Header</a>
                                            </li>
                                            <li><a href="layouts-warning-header.html">Warning Header</a>
                                            </li>
                                            <li><a href="layouts-danger-header.html">Danger Header</a>
                                            </li>
                                            <li><a href="layouts-search-input.html"><span class="label label-primary pull-right">New</span>Search Input</a>
                                            </li>
                                            <li><a href="layouts-offcanvas-menu.html"><span class="label label-primary pull-right">New</span>Off Canvas Menu</a>
                                            </li>
                                            <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                                            </li>
                                            <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                                            </li>
                                            <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                                            </li>
                                            <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                                            </li>
                                            <li><a href="pages-blank-aside.html">Page Aside</a>
                                            </li>
                                            <li><a href="layouts-collapsible-sidebar.html">Collapsible Sidebar</a>
                                            </li>
                                            <li><a href="layouts-sub-navigation.html"><span class="label label-primary pull-right">New</span>Sub Navigation</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="maps-google.html">Google Maps</a>
                                            </li>
                                            <li><a href="maps-vector.html">Vector Maps</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-folder"></i><span>Menu Levels</span></a>
                                        <ul class="sub-menu">
                                            <li class="parent">
                                                <a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                    </li>
                                                    <li class="parent">
                                                        <a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                        <ul class="sub-menu">
                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent">
                                                <a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                    </li>
                                                    <li class="parent">
                                                        <a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                        <ul class="sub-menu">
                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="progress-widget">
                        <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
                        <div class="progress">
                            <div style="width: 60%;" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="be-content">
                <div class="main-content container-fluid">
                    
                </div>
            </div>
        </div>
        <script src="{{ secure_asset('assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/js/main.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/jqvmap/jquery.vmap.min.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
            	//initialize the javascript
            	App.init();
            
            });
        </script>
    </body>
</html>