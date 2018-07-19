<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('')}}/assets/css/pace.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('')}}/assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thế Thái ADM</title>
    <!-- CSS -->
    <link href="{{asset('')}}/assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}/assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}/assets/vendors/weather-icons-master/weather-icons.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}/assets/vendors/weather-icons-master/weather-icons-wind.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>



</head>

<body class="header-light sidebar-dark sidebar-expand">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <img class="logo-expand" alt="" src="{{asset('')}}/assets/demo/logo-expand.png">
                    <img class="logo-collapse" alt="" src="{{asset('')}}/assets/demo/logo-collapse.png">
                    <!-- <p>OSCAR</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon">menu</i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            <form class="navbar-search hidden-xs-down" role="search"><i class="material-icons list-icon">search</i> 
                <input type="text" class="search-query" placeholder="Search anything..."> <a href="javascript:void(0);" class="remove-focus"><i class="material-icons">clear</i></a>
            </form>
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Button: Create New -->
           {{--  <div class="btn-list dropdown hidden-xs hidden-sm-down"><a href="javascript:void(0);" class="btn btn-primary dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon fs-24">playlist_add</i> Create New</a>
                <div class="dropdown-menu dropdown-left animated flipInY"><span class="dropdown-header">Create new ...</span>  <a class="dropdown-item" href="index.html#">Projects</a>  <a class="dropdown-item" href="index.html#">User Profile</a>  <a class="dropdown-item" href="index.html#"><span class="badge badge-pill badge-primary float-right">7</span> To-do Item</a> 
                    <a
                    class="dropdown-item" href="index.html#"><span class="badge badge-pill badge-color-scheme float-right">23</span> Mail</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="index.html#"><i class="material-icons list-icon icon-muted pull-right">settings</i> <strong>Settings</strong></a>
                </div>
            </div> --}}
            <!-- /.btn-list -->
            <!-- Right Menu -->
            <ul class="nav navbar-nav hidden-sm-down">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">mail_outline</i> <span class="badge badge-border bg-primary">3</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card dropdown-card-dark animated flipInY">
                        <div class="card">
                            <header class="card-header">New messages <span class="mr-l-10 badge badge-border badge-border-inverted bg-primary">3</span>
                            </header>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="index.html#" class="media"><span class="d-flex user--online thumb-xs"><img src="{{asset('')}}/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex user--offline thumb-xs"><img src="{{asset('')}}/assets/demo/users/user6.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Emily Lee</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Hi John!</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex user--online thumb-xs"><img src="{{asset('')}}/assets/demo/users/user2.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Christopher Palmer</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Like the illustration and the indicator style. Best of luck ...</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex user--online thumb-xs"><img src="{{asset('')}}/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex user--offline thumb-xs"><img src="{{asset('')}}/assets/demo/users/user6.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Emily Lee</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Hi John!</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex user--offline thumb-xs"><img src="{{asset('')}}/assets/demo/users/user2.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Christopher Palmer</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Like the illustration and the indicator style. Best of luck ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"><a href="index.html#" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">event_available</i> <span class="badge badge-border bg-primary">9</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card dropdown-card-dark animated flipInY">
                        <div class="card">
                            <header class="card-header">New notifications <span class="mr-l-10 badge badge-border badge-border-inverted bg-primary">4</span>
                            </header>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="index.html#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex user--online thumb-xs"><img src="{{asset('')}}/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="media-heading">To Do</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Meeting with Nathan McCullum on Friday 8 AM ...</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li><a href="javascript:void(0);" class="right-sidebar-toggle ripple"><i class="material-icons list-icon">comment</i></a>
                </li>
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><span class="avatar thumb-sm"><img src="{{asset('')}}/assets/demo/users/user-image.png" class="rounded-circle" alt=""> <i class="material-icons list-icon">expand_more</i></span></a>
                    <div
                    class="dropdown-menu dropdown-left dropdown-card dropdown-card-wide dropdown-card-dark text-inverse">
                        <div class="card">
                            <header class="card-heading-extra">
                                <div class="row">
                                    <div class="col-8">
                                        <h3 class="mr-b-10 sub-heading-font-family fw-300">Thế Thái</h3><span class="user--online">Available <i class="material-icons list-icon">expand_more</i></span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end"><a href="http://dharansh.in/oscarhtml/default/logout.html" class="mr-t-10"><i class="material-icons list-icon">power_settings_new</i> Logout</a>
                                    </div>
                                    <!-- /.col-4 -->
                                </div>
                                <!-- /.row -->
                            </header>
                            <section class="card-header text-inverse">New notifications <span class="badge badge-border badge-border-inverted bg-danger mr-l-10">4</span>
                            </section>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="index.html#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex user--online thumb-xs"><img src="{{asset('')}}/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects and finally added a case study for thus great project ...</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="media-heading">To Do</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Meeting with Nathan McCullum on Friday 8 AM to discuss about an ongoing project ...</span></span></a>
                                </li>
                                <li><a href="index.html#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                            </ul>
                        </div>
    </div>
    </li>
    </ul>
    <!-- /.navbar-right -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled clearfix">
            <!-- User Details -->
            <div class="side-user">
                <a class="col-sm-12 media clearfix" href="javascript:void(0);">
                    <figure class="media-left media-middle user--online thumb-sm mr-r-10 mr-b-0">
                        <img src="{{asset('')}}/assets/demo/users/user-image.png" class="media-object rounded-circle" alt="">
                    </figure>
                    <div class="media-body hide-menu">
                        <h4 class="media-heading mr-b-5 text-uppercase">Thế Thái</h4><span class="user-type fs-12">Edit Profile (...)</span>
                    </div>
                </a>
                <div class="clearfix"></div>
                <ul class="nav in side-menu">
                    <li><a href="page-profile.html"><i class="list-icon material-icons">face</i> My Profile</a>
                    </li>
                    <li><a href="app-inbox.html"><i class="list-icon material-icons">mail_outline</i> Inbox</a>
                    </li>
                    <li><a href="page-lock-screen.html"><i class="list-icon material-icons">settings</i> Lock Screen</a>
                    </li>
                    <li><a href="page-login.html"><i class="list-icon material-icons">settings_power</i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.side-user -->
            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="menu-item"><a href="{{route('manager.index')}}" class="ripple"><i class="list-icon material-icons">playlist_add</i> <span class="hide-menu">Tables</span></a></li>

                    

                <li class="menu-item-has-children active"><a href="javascript:void(0);" class="ripple"><span class="color-color-scheme"><i class="fa fa-product-hunt"></i> <span class="hide-menu">Product Manager</span></span></a>
                    <ul class="list-unstyled sub-menu">
                        <li class="menu-item"><a href="{{route('manager.product')}}" class="ripple"><span class="hide-menu">Product</span></a></li>
                        
                          <li class="menu-item"><a href="{{route('manager.productGallary')}}" class="ripple"><span class="hide-menu">Product Gallary</span></a></li>



                    </ul>
                </li>
                <li class="menu-item-has-children active"><a href="javascript:void(0);" class="ripple"><span class="color-color-scheme"><i class="material-icons">reorder</i><span class="hide-menu">Order Manager</span></span></a>
                    <ul class="list-unstyled sub-menu">
                        <li class="menu-item"><a href="{{route('manager.order')}}" class="ripple"><span class="hide-menu">Order</span></a></li>
                        
                          <li class="menu-item"><a href="{{route('manager.order')}}" class="ripple"><span class="hide-menu">Order detail</span></a></li>



                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">playlist_add</i> <span class="hide-menu">Tables</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="tables-basic.html">Basic Tables</a>
                        </li>
                        <li><a href="tables-data-table.html">Data Table</a>
                        </li>
                        <li><a href="tables-bootstrap.html">Bootstrap Tables</a>
                        </li>
                        <li><a href="tables-responsive.html">Responsive Tables</a>
                        </li>
                        <li><a href="tables-editable.html">Editable Tables</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">lightbulb_outline</i> <span class="hide-menu">UI Elements <span class="badge badge-border badge-border-inverted bg-primary pull-right">9</span></span></a>
                    <ul
                    class="list-unstyled sub-menu">
                        <li><a href="ui-typography.html">Typography</a>
                        </li>
                        <li><a href="ui-buttons.html">Buttons</a>
                        </li>
                        <li><a href="ui-cards.html">Cards</a>
                        </li>
                        <li><a href="ui-tabs.html">Tabs</a>
                        </li>
                        <li><a href="ui-panels.html">Panels</a>
                        </li>
                        <li><a href="ui-accordions.html">Accordions</a>
                        </li>
                        <li><a href="ui-modals.html">Modals</a>
                        </li>
                        <li><a href="ui-icon-boxes.html">Icon Boxes</a>
                        </li>
                        <li><a href="ui-lists.html">Lists &amp; Media Object</a>
                        </li>
                        <li><a href="ui-user-cards.html">User Cards</a>
                        </li>
                        <li><a href="ui-grid.html">Grid</a>
                        </li>
                        <li><a href="ui-progress.html">Progress Bars</a>
                        </li>
                        <li><a href="ui-notifications.html">Notifications &amp; Alerts</a>
                        </li>
                        <li><a href="ui-pagination.html">Pagination</a>
                        </li>
                        <li><a href="ui-media.html">Media</a>
                        </li>
                        <li><a href="ui-carousel.html">Carousel</a>
                        </li>
                        <li><a href="ui-bootstrap.html">Bootstrap Elements</a>
                        </li>
                        </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">developer_board</i> <span class="hide-menu">Forms</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="form-elements.html">Elements</a>
                        </li>
                        <li><a href="form-material.html">Material Design</a>
                        </li>
                        <li><a href="form-validation.html">Form Validation</a>
                        </li>
                        <li><a href="form-dropzone.html">File Upload</a>
                        </li>
                        <li><a href="form-pickers.html">Picker</a>
                        </li>
                        <li><a href="form-select.html">Select and Multiselect</a>
                        </li>
                        <li><a href="form-tags-categories.html">Tags and Categories</a>
                        </li>
                        <li><a href="form-addons.html">Addons</a>
                        </li>
                        <li><a href="form-editors.html">Editors</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">tune</i> <span class="hide-menu">Charts</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="charts-flot.html">Flot Charts</a>
                        </li>
                        <li><a href="charts-morris.html">Morris Charts</a>
                        </li>
                        <li><a href="charts-js.html">Chart-js</a>
                        </li>
                        <li><a href="charts-sparkline.html">Sparkline Charts</a>
                        </li>
                        <li><a href="charts-knob.html">Knob Charts</a>
                        </li>
                    </ul>
                </li>
                <li class="list-divider"></li>
                <li><a href="index.html#" class="ripple"><i class="list-icon material-icons">notifications_none</i> <span class="hide-menu">Updates</span></a>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">widgets</i> <span class="hide-menu">Widgets</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="widgets.html">Content Widgets</a>
                        </li>
                        <li><a href="widgets-statistics.html">Statistics Widgets</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">add_location</i> <span class="hide-menu">Maps</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="maps-google.html">Google Maps</a>
                        </li>
                        <li><a href="maps-vector.html">Vector Maps</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">lightbulb_outline</i> <span class="hide-menu">Icons</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="icons-material-design.html">Material Design</a>
                        </li>
                        <li><a href="icons-font-awesome.html">Font Awesome</a>
                        </li>
                        <li><a href="icons-mono-social.html">Social Icons</a>
                        </li>
                        <li><a href="icons-weather.html">Weather Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">folder_open</i> <span class="hide-menu">Sample Pages <span class="badge badge-border badge-border-inverted bg-info pull-right">3</span></span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="page-blank.html">Blank Page</a>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);">Email Templates</a>
                            <ul class="list-unstyled sub-menu">
                                <li><a href="email-templates/basic.html">Basic</a>
                                </li>
                                <li><a href="email-templates/billing.html">Billing</a>
                                </li>
                                <li><a href="email-templates/friend-request.html">Friend Request</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="page-lightbox.html">Lightbox Popup</a>
                        </li>
                        <li><a href="page-sitemap.html">Sitemap</a>
                        </li>
                        <li><a href="page-search-results.html">Search Results</a>
                        </li>
                        <li><a href="page-custom-scroll.html">Custom Scroll</a>
                        </li>
                        <li><a href="page-utility-classes.html">Utility Classes</a>
                        </li>
                        <li><a href="page-animations.html">Animations</a>
                        </li>
                        <li><a href="page-faq.html">FAQ</a>
                        </li>
                        <li><a href="page-pricing-table.html">Pricing</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">card_travel</i> <span class="hide-menu">Profile Pages</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="page-profile.html">Profile</a>
                        </li>
                        <li><a href="page-login.html">Login Page</a>
                        </li>
                        <li><a href="page-login2.html">Login Page 2</a>
                        </li>
                        <li><a href="page-register.html">Sign Up</a>
                        </li>
                        <li><a href="page-register2.html">Sign Up 2</a>
                        </li>
                        <li><a href="page-register-3-step.html">3 Step Sign Up</a>
                        </li>
                        <li><a href="page-forgot-pwd.html">Forgot Password</a>
                        </li>
                        <li><a href="page-email-confirm.html">Confirm Email</a>
                        </li>
                        <li><a href="page-lock-screen.html">Lock Screen</a>
                        </li>
                        <li><a href="page-timeline.html">Timeline</a>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);">Error Pages</a>
                            <ul class="list-unstyled sub-menu">
                                <li><a href="page-error-403.html">Error 403</a>
                                </li>
                                <li><a href="page-error-404.html">Error 404</a>
                                </li>
                                <li><a href="page-error-500.html">Error 500</a>
                                </li>
                                <li><a href="page-error-503.html">Error 503</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">shopping_cart</i> <span class="hide-menu">E-Commerce</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="ecommerce-products.html">Products</a>
                        </li>
                        <li><a href="ecommerce-horizontal-products.html">Horizontal Products</a>
                        </li>
                        <li><a href="ecommerce-invoice.html">Invoice</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">filter_list</i> <span class="hide-menu">Multi-level Menu</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="index.html">Second Level Item</a>
                        </li>
                        <li><a href="index.html">Second Level Item</a>
                        </li>
                        <li class="menu-item-has-children"><a href="index.html">Third Level</a>
                            <ul class="list-unstyled sub-menu">
                                <li><a href="index.html">Third Level Item</a>
                                </li>
                                <li><a href="index.html">Third Level Item</a>
                                </li>
                                <li><a href="index.html">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="page-login.html"><i class="list-icon material-icons">settings_power</i> <span class="hide-menu">Log Out</span></a>
                </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->

		<main class="main-wrapper clearfix">
 			@yield('main')           
        </main>

        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
        <aside class="right-sidebar scrollbar-enabled">
            <div class="sidebar-chat" data-plugin="chat-sidebar">
                <div class="sidebar-chat-info">
                    <h3>Chat</h3>
                    <p class="text-muted">You can chat with your family and friends in this space.</p>
                </div>
                <div class="chat-list">
                    <h6 class="sidebar-chat-subtitle">Online</h6>
                    <div class="list-group row">
                        <a href="javascript:void(0)" class="list-group-item user--online thumb-xs" data-chat-user="Julein Renvoye">
                            <img src="{{asset('')}}/assets/demo/users/user1.jpg" class="rounded-circle" alt=""> <span class="name">Julien Renvoye</span>  <span class="username">@jrenvoye</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--online thumb-xs" data-chat-user="Eddie Lebanovkiy">
                            <img src="{{asset('')}}/assets/demo/users/user2.jpg" class="rounded-circle" alt=""> <span class="name">Eddie Lebanovskiy</span>  <span class="username">@elebano</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--away thumb-xs" data-chat-user="Cameron Moll">
                            <img src="{{asset('')}}/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> <span class="name">Cameron Moll</span>  <span class="username">@cammoll</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--busy thumb-xs" data-chat-user="Bill S Kenny">
                            <img src="{{asset('')}}/assets/demo/users/user7.jpg" class="rounded-circle" alt=""> <span class="name">Bill S Kenny</span>  <span class="username">@billsk</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--busy thumb-xs" data-chat-user="Trent Walton">
                            <img src="{{asset('')}}/assets/demo/users/user6.jpg" class="rounded-circle" alt=""> <span class="name">Trent Walton</span>  <span class="username">@trentwalton</span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.chat-list -->
                <div class="chat-list">
                    <h6 class="sidebar-chat-subtitle">Offline</h6>
                    <div class="list-group row">
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Julien Renvoye">
                            <img src="{{asset('')}}/assets/demo/users/user1.jpg" class="rounded-circle" alt=""> <span class="name">Julien Renvoye</span>  <span class="username">@jrenvoye</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Eddie Lebaovskiy">
                            <img src="{{asset('')}}/assets/demo/users/user2.jpg" class="rounded-circle" alt=""> <span class="name">Eddie Lebanovskiy</span>  <span class="username">@elebano</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Cameron Moll">
                            <img src="{{asset('')}}/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> <span class="name">Cameron Moll</span>  <span class="username">@cammoll</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Bill S Kenny">
                            <img src="{{asset('')}}/assets/demo/users/user7.jpg" class="rounded-circle" alt=""> <span class="name">Bill S Kenny</span>  <span class="username">@billsk</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Trent Walton">
                            <img src="{{asset('')}}/assets/demo/users/user6.jpg" class="rounded-circle" alt=""> <span class="name">Trent Walton</span>  <span class="username">@trentwalton</span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.chat-list -->
            </div>
            <!-- /.sidebar-chat -->
        </aside>
        <!-- CHAT PANEL -->
        <div class="chat-panel" hidden>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <button type="button" class="minimize" aria-label="Minimize"><span aria-hidden="true"><i class="material-icons">expand_more</i></span>
                    </button> <span class="user-name">John Doe</span>
                </div>
                <!-- /.card-header -->
                <div class="card-block custom-scroll">
                    <div class="messages custom-scroll-content scrollbar-enabled">
                        <div class="current-user-message">
                            <img class="user-image" width="30" height="30" src="{{asset('')}}/assets/demo/users/user1.jpg" alt="">
                            <div class="message">
                                <p>Lorem ipsum dolor sit amet?</p><small>10:00 am</small>
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.current-user-message -->
                        <div class="other-user-message">
                            <img class="user-image" width="30" height="30" src="{{asset('')}}/assets/demo/users/user2.jpg" alt="">
                            <div class="message">
                                <p>Etiam rhoncus. Maecenas tempus, tellus eget condi mentum rhoncus</p><small>10:00 am</small>
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.other-user-message -->
                        <div class="current-user-message">
                            <img class="user-image" width="30" height="30" src="{{asset('')}}/assets/demo/users/user1.jpg" alt="">
                            <div class="message">
                                <img src="{{asset('')}}/assets/demo/chat-message.jpg" alt=""> <small>10:00 am</small>
                            </div>
                            <!-- .,message -->
                        </div>
                        <!-- /.current-user-message -->
                        <div class="current-user-message">
                            <img class="user-image" width="30" height="30" src="{{asset('')}}/assets/demo/users/user1.jpg" alt="">
                            <div class="message">
                                <p>Maecenas nec odio et ante tincidunt tempus.</p><small>10:00 am</small>
                            </div>
                            <!-- .,message -->
                        </div>
                        <!-- /.current-user-message -->
                        <div class="other-user-message">
                            <img class="user-image" width="30" height="30" src="{{asset('')}}/assets/demo/users/user2.jpg" alt="">
                            <div class="message">
                                <p>Donec sodales :)</p><small>10:00 am</small>
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.other-user-message -->
                    </div>
                    <!-- /.messages -->
                    <form action="javascript:void(0)" method="post">
                        <textarea name="message" style="resize: none" placeholder="Type message and hit enter"></textarea>
                        <ul class="list-unstyled list-inline chat-extra-buttons">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="material-icons">insert_emoticon</i></a>
                            </li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="material-icons">attach_file</i></a>
                            </li>
                        </ul>
                        <button class="btn btn-color-scheme btn-circle submit-btn" type="submit"><i class="material-icons">send</i>
                        </button>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer text-center clearfix">2017 © Oscar Admin brought to you by UnifatoThemes</footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="{{asset('')}}/assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script src="{{asset('')}}/assets/vendors/charts/utils.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
    <script src="{{asset('')}}/assets/vendors/charts/excanvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mithril/1.1.1/mithril.js"></script>
    <script src="{{asset('')}}/assets/vendors/theme-widgets/widgets.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clndr/1.4.7/clndr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script src="{{asset('')}}/assets/js/theme.js"></script>
    <script src="{{asset('')}}/assets/js/custom.js"></script>

    @yield('footer')

</body>

</html>
