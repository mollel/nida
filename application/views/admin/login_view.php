<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>admin/images/logo.png">

	<title>National identification Authority</title>
	<!--link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'-->

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>admin/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url(); ?>admin/fonts/font-awesome-4/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="<?php echo base_url(); ?>admin/../../assets/js/html5shiv.js"></script>
	  <script src="<?php echo base_url(); ?>admin/../../assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url(); ?>admin/css/style.css" rel="stylesheet" />	

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

	<div class="middle-login">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center"><img class="logo-img" src="<?php echo base_url(); ?>admin/images/logo.png" alt="logo"/>National Id Authority</h3>
			</div>
			<div>
           
				<form  style="margin-bottom: 0px !important;" class="form-horizontal" action="<?php echo base_url(); ?>site/validate_user" method="post" >
					<div class="content">
						<h4 class="title">Login Access</h4>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <?php echo $message;?>
										<input type="text" placeholder="Username" value="<?php echo set_value('username'); ?>" size="45"  name="username"class="form-control">
                                           <?php echo form_error('username'); ?>
                             	</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" value="<?php echo set_value('password'); ?>" size="45" name="password" class="form-control">
								        <?php echo form_error('username'); ?>
                                 	</div>
								</div>
							</div>
							
					</div>
					<div class="foot">
						<!--button class="btn btn-default" data-dismiss="modal" type="button">Register</button-->
						<button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="<?php echo base_url(); ?>admin/#">&copy; 2014 melleji registration system</a></div>
	</div> 
	
</div>

<script src="<?php echo base_url(); ?>admin/js/jquery.js"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>admin/js/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/js/jquery.flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/js/jquery.flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/js/jquery.flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/js/jquery.flot/jquery.flot.labels.js"></script>
</body>
</html>
