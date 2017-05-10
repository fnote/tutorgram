<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>admin dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css2/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css2/elegant-icons-style.css" rel="stylesheet" />
    <link href="css2/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css2/owl.carousel.css" type="text/css">
    <link href="css2/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css2/fullcalendar.css">
    <link href="css2/widgets.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">
    <link href="css2/style-responsive.css" rel="stylesheet" />
    <link href="css2/xcharts.min.css" rel=" stylesheet">
    <link href="css2/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================

    ======================================================= -->
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo">TUTOR <span class="lite">GRAM</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- task notificatoin start -->
                <li id="task_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-task-l"></i>
                        <span class="badge bg-important">6</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 6 pending letter</p>
                        </li>
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<div class="task-info">--}}
                        {{--<div class="desc">Design PSD </div>--}}
                        {{--<div class="percent">90%</div>--}}
                        {{--</div>--}}
                        {{--<div class="progress progress-striped">--}}
                        {{--<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">--}}
                        {{--<span class="sr-only">90% Complete (success)</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<div class="task-info">--}}
                        {{--<div class="desc">--}}
                        {{--Project 1--}}
                        {{--</div>--}}
                        {{--<div class="percent">30%</div>--}}
                        {{--</div>--}}
                        {{--<div class="progress progress-striped">--}}
                        {{--<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">--}}
                        {{--<span class="sr-only">30% Complete (warning)</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<div class="task-info">--}}
                        {{--<div class="desc">Digital Marketing</div>--}}
                        {{--<div class="percent">80%</div>--}}
                        {{--</div>--}}
                        {{--<div class="progress progress-striped">--}}
                        {{--<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">--}}
                        {{--<span class="sr-only">80% Complete</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<div class="task-info">--}}
                        {{--<div class="desc">Logo Designing</div>--}}
                        {{--<div class="percent">78%</div>--}}
                        {{--</div>--}}
                        {{--<div class="progress progress-striped">--}}
                        {{--<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">--}}
                        {{--<span class="sr-only">78% Complete (danger)</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<div class="task-info">--}}
                        {{--<div class="desc">Mobile App</div>--}}
                        {{--<div class="percent">50%</div>--}}
                        {{--</div>--}}
                        {{--<div class="progress progress-striped active">--}}
                        {{--<div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">--}}
                        {{--<span class="sr-only">50% Complete</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--</a>--}}
                        {{--</li>--}}
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- task notificatoin end -->
                <!-- inbox notificatoin start-->
                <li id="mail_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-l"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 5 new messages</p>
                        </li>
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>--}}
                        {{--<span class="subject">--}}
                        {{--<span class="from">Greg  Martin</span>--}}
                        {{--<span class="time">1 min</span>--}}
                        {{--</span>--}}
                        {{--<span class="message">--}}
                        {{--I really like this admin panel.--}}
                        {{--</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>--}}
                        {{--<span class="subject">--}}
                        {{--<span class="from">Bob   Mckenzie</span>--}}
                        {{--<span class="time">5 mins</span>--}}
                        {{--</span>--}}
                        {{--<span class="message">--}}
                        {{--Hi, What is next project plan?--}}
                        {{--</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>--}}
                        {{--<span class="subject">--}}
                        {{--<span class="from">Phillip   Park</span>--}}
                        {{--<span class="time">2 hrs</span>--}}
                        {{--</span>--}}
                        {{--<span class="message">--}}
                        {{--I am like to buy this Admin Template.--}}
                        {{--</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>--}}
                        {{--<span class="subject">--}}
                        {{--<span class="from">Ray   Munoz</span>--}}
                        {{--<span class="time">1 day</span>--}}
                        {{--</span>--}}
                        {{--<span class="message">--}}
                        {{--Icon fonts are great.--}}
                        {{--</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox notificatoin end -->
                <!-- alert notification start-->
                <li id="alert_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-l"></i>
                        <span class="badge bg-important">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 1 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><i class="icon_profile"></i></span>
                                messages
                                <span class="small italic pull-right">5 mins</span>
                            </a>
                        </li>
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<span class="label label-warning"><i class="icon_pin"></i></span>--}}
                        {{--John location.--}}
                        {{--<span class="small italic pull-right">50 mins</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<span class="label label-danger"><i class="icon_book_alt"></i></span>--}}
                        {{--Project 3 Completed.--}}
                        {{--<span class="small italic pull-right">1 hr</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<span class="label label-success"><i class="icon_like"></i></span>--}}
                        {{--Mick appreciated your work.--}}
                        {{--<span class="small italic pull-right"> Today</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- alert notification end-->
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                {{--<img alt="" src="img/avatar1_small.jpg">--}}
                            </span>
                        <span class="username">admin</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#"><i class="icon_profile"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                        </li>
                        <li>
                            <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                        </li>
                        <li>
                            <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                        </li>
                        <li>
                            <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="index.html">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_document_alt"></i>
                        <span>Forms</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{url('student')}}">Students</a></li>
                        <li><a class="" href="{{url('lecturer')}}">lecturers</a></li>
                        <li><a class="" href="{{url('course')}}">Manage Course</a></li>
                    </ul>
                </li>


                <li>
                    <a class="" href="chart-chartjs.html">
                        <i class="icon_piechart"></i>
                        <span>Reports</span>

                    </a>

                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_table"></i>
                        <span>attendance</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="basic_table.html">Basic Table</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_documents_alt"></i>
                        <span>Payments</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="profile.html">last week</a></li>
                        <li><a class="" href="login.html"><span>Last month</span></a></li>
                        <li><a class="" href="blank.html">last day</a></li>

                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                    </ol>
                </div>
            </div>



            <!-- Today status end -->



            <div class="row" style="margin-left: 20%;">
                <div class="col-md-6">
                    <h3>Lecturer admission</h3>
                    <form action="{{route('createLecturer')}}" method="post">


                        <div class="form-group {{$errors->has('firstname') ? 'has-error' : ''}}">
                            <label for="firstname">first name</label>
                            <input class="form-control" type="text" name="firstname" id="firstname" value="{{Request::old('firstname')}}">
                        </div>

                        <div class="form-group {{$errors->has('lastname') ? 'has-error' : ''}}">
                            <label for="lastname">last name</label>
                            <input class="form-control" type="text" name="lastname" id="lastname" value="{{Request::old('lastname')}}">
                        </div>

                        <div class="form-group {{$errors->has('phone') ? 'has-error' : ''}}">
                            <label for="phone">phone</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{Request::old('password')}}">
                        </div>


                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="password">email</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{Request::old('email')}}">
                        </div>

                        <div class="form-group {{$errors->has('lecturer_id') ? 'has-error' : ''}}">
                            <label for="lecturer_id">lecturer_id</label>
                            <input class="form-control" type="text" name="lecturer_id" id="lecturer_id" value="{{Request::old('lecturer_id')}}">
                        </div>

                        <div class="form-group {{$errors->has('courses_teaching') ? 'has-error' : ''}}">
                            <label for="courses_teaching">courses_teaching</label>
                            <input class="form-control" type="text" name="courses_teaching" id="courses_teaching" value="{{Request::old('courses_teaching')}}">
                        </div>

                        <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                            <label for="password">assigned password</label>
                            <input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}">
                        </div>


                        <button type="submit" class="btn btn-primary">submit </button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form>

                </div>
            </div>











            <!-- statics end -->





            <!-- Buttons -->






            <!-- javascripts -->
            <script src="js2/jquery.js"></script>
            <script src="js2/jquery-ui-1.10.4.min.js"></script>
            <script src="js2/jquery-1.8.3.min.js"></script>
            <script type="text/javascript" src="js2/jquery-ui-1.9.2.custom.min.js"></script>
            <!-- bootstrap -->
            <script src="js2/bootstrap.min.js"></script>
            <!-- nice scroll -->
            <script src="js2/jquery.scrollTo.min.js"></script>
            <script src="js2/jquery.nicescroll.js" type="text/javascript"></script>
            <!-- charts scripts -->
            <script src="assets/jquery-knob/js2/jquery.knob.js"></script>
            <script src="js2/jquery.sparkline.js" type="text/javascript"></script>
            <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
            <script src="js2/owl.carousel.js" ></script>
            <!-- jQuery full calendar -->
            <<script src="js2/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
            <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
            <!--script for this page only-->
            <script src="js2/calendar-custom.js"></script>
            <script src="js2/jquery.rateit.min.js"></script>
            <!-- custom select -->
            <script src="js2/jquery.customSelect.min.js" ></script>
            <script src="assets/chart-master/Chart.js"></script>

            <!--custome script for all page-->
            <script src="js2/scripts.js"></script>
            <!-- custom script for this page-->
            <script src="js2/sparkline-chart.js"></script>
            <script src="js2/easy-pie-chart.js"></script>
            <script src="js2/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="js2/jquery-jvectormap-world-mill-en.js"></script>
            <script src="js2/xcharts.min.js"></script>
            <script src="js2/jquery.autosize.min.js"></script>
            <script src="js2/jquery.placeholder.min.js"></script>
            <script src="js2/gdp-data.js"></script>
            <script src="js2/morris.min.js"></script>
            <script src="js2/sparklines.js"></script>
            <script src="js2/charts.js"></script>
            <script src="js2/jquery.slimscroll.min.js"></script>
            <script>

                //knob
                $(function() {
                    $(".knob").knob({
                        'draw' : function () {
                            $(this.i).val(this.cv + '%')
                        }
                    })
                });

                //carousel
                $(document).ready(function() {
                    $("#owl-slider").owlCarousel({
                        navigation : true,
                        slideSpeed : 300,
                        paginationSpeed : 400,
                        singleItem : true

                    });
                });

                //custom select box

                $(function(){
                    $('select.styled').customSelect();
                });

                /* ---------- Map ---------- */
                $(function(){
                    $('#map').vectorMap({
                        map: 'world_mill_en',
                        series: {
                            regions: [{
                                values: gdpData,
                                scale: ['#000', '#000'],
                                normalizeFunction: 'polynomial'
                            }]
                        },
                        backgroundColor: '#eef3f7',
                        onLabelShow: function(e, el, code){
                            el.html(el.html()+' (GDP - '+gdpData[code]+')');
                        }
                    });
                });

            </script>

</body>
</html>
