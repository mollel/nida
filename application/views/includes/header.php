<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
Version: 1.1.2
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Melleji| Admin</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
   	<link href="<?php echo base_url(); ?>admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>admin/assets/css/metro.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>admin/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>admin/assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>admin/assets/css/style_responsive.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>admin/assets/css/style_default.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/uniform/css/uniform.default.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/bootstrap-daterangepicker/daterangepicker.css" />
	<link href="<?php echo base_url(); ?>admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>admin/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>admin/assets/data-tables/DT_bootstrap.css" />
    <link href="<?php echo base_url(); ?>admin/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="<?php echo base_url(); ?>admin/favicon.ico" />  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" /> 
	<link href="<?php echo base_url();?>admin/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin/assets/css/jquery.datetimepicker.css"/>
    </head>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
			<a class="brand" href="<?php echo base_url(); ?>registration/admin_dashboard"><h1>National Identification Authority( NIDA )</h1></a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="<?php echo base_url(); ?>admin/assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="breadcrumb">
							<!--li>
								<i class="icon-home"></i>
								<a href="<?php echo base_url(); ?>admin/index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="<?php echo base_url(); ?>admin/#">Dashboard</a></li-->
                            You have logged in as System admin
							<li class="pull-right no-text-shadow">
								<div id="dashboard-report-range" class="  no-tooltip-on-touch-device "  data-placement="top" data-original-title="Change dashboard date">
									<i class="icon-calendar"></i>
									<span></span>
									<!--i class="icon-angle-down"></i-->
								</div>
							</li>
						</ul>					
				<ul class="nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->	
					<!--li class="dropdown" id="header_notification_bar">
						<a href="<?php echo base_url(); ?>admin/#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">6</span>
						</a>
						<ul class="dropdown-menu extended notification">
							<li>
								<p>You have 14 new notifications</p>
							</li>
							<li>
								<a javascript:;" onclick="App.onNotificationClick(1)">
								<span class="label label-success"><i class="icon-plus"></i></span>
								New user registered. 
								<span class="time">Just now</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								Server #12 overloaded. 
								<span class="time">15 mins</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="label label-warning"><i class="icon-bell"></i></span>
								Server #2 not respoding.
								<span class="time">22 mins</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="label label-info"><i class="icon-bullhorn"></i></span>
								Application error.
								<span class="time">40 mins</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								Database overloaded 68%. 
								<span class="time">2 hrs</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								2 user IP blocked.
								<span class="time">5 hrs</span>
								</a>
							</li>
							<li class="external">
								<a href="<?php echo base_url(); ?>admin/#">See all notifications <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li-->
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<!--li class="dropdown" id="header_inbox_bar">
						<a href="<?php echo base_url(); ?>admin/#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope-alt"></i>
						<span class="badge">5</span>
						</a>
						<ul class="dropdown-menu extended inbox">
							<li>
								<p>You have 12 new messages</p>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="photo"><img src="<?php echo base_url(); ?>admin/./assets/img/avatar2.jpg" alt="" /></span>
								<span class="subject">
								<span class="from">Lisa Wong</span>
								<span class="time">Just Now</span>
								</span>
								<span class="message">
								Vivamus sed auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="photo"><img src="<?php echo base_url(); ?>admin/./assets/img/avatar3.jpg" alt="" /></span>
								<span class="subject">
								<span class="from">Richard Doe</span>
								<span class="time">16 mins</span>
								</span>
								<span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="photo"><img src="<?php echo base_url(); ?>admin/./assets/img/avatar1.jpg" alt="" /></span>
								<span class="subject">
								<span class="from">Bob Nilson</span>
								<span class="time">2 hrs</span>
								</span>
								<span class="message">
								Vivamus sed nibh auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li class="external">
								<a href="<?php echo base_url(); ?>admin/#">See all messages <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li-->
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<!--li class="dropdown" id="header_task_bar">
						<a href="<?php echo base_url(); ?>admin/#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-tasks"></i>
						<span class="badge">5</span>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li>
								<p>You have 12 pending tasks</p>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="task">
								<span class="desc">New release v1.2</span>
								<span class="percent">30%</span>
								</span>
								<span class="progress progress-success ">
								<span style="width: 30%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="task">
								<span class="desc">Application deployment</span>
								<span class="percent">65%</span>
								</span>
								<span class="progress progress-danger progress-striped active">
								<span style="width: 65%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="task">
								<span class="desc">Mobile app release</span>
								<span class="percent">98%</span>
								</span>
								<span class="progress progress-success">
								<span style="width: 98%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="task">
								<span class="desc">Database migration</span>
								<span class="percent">10%</span>
								</span>
								<span class="progress progress-warning progress-striped">
								<span style="width: 10%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="task">
								<span class="desc">Web server upgrade</span>
								<span class="percent">58%</span>
								</span>
								<span class="progress progress-info">
								<span style="width: 58%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/#">
								<span class="task">
								<span class="desc">Mobile development</span>
								<span class="percent">85%</span>
								</span>
								<span class="progress progress-success">
								<span style="width: 85%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li class="external">
								<a href="<?php echo base_url(); ?>admin/#">See all tasks <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li-->
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
                    
					<li class="dropdown user">
						<a href="<?php echo base_url(); ?>admin/#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" src="<?php echo base_url(); ?>admin/assets/img/avatar1_small.jpg" />
						<span class="username">melleji mollel</span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url(); ?>admin/extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
							<li><a href="<?php echo base_url(); ?>admin/calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
							<li><a href="<?php echo base_url(); ?>admin/#"><i class="icon-tasks"></i> My Tasks</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url(); ?>registration/logout"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->	
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">