<?php
include('security.php');

$sql = 'select * from fossu1 where id=1'; // change this id as per your need
$result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
?>

<?php include('resultserver.php')?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>castvote</title>

		<meta name="description" content="Large &amp; Small" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="result.php" class="navbar-brand">
						<small>
							F.C.A.H & P.T
						</small>
					</a>
				</div>

							
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				
                                            
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								
								<a href="#">F.C.A.H & P.T Online Voting Platform</a>
							</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Vote <i class="ace-icon fa fa-check green"></i>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									 <br> &copy; F.C.A.H & P.T 
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box widget-color-dark">
											<div class="widget-header">
											<center>
											<!------ first candidate ----->

											<form method="post" action="result.php">
												<h5 class="widget-title bigger lighter">Click the button below</h5>
													</div>

											<div class="widget-body">
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
                                                    <?php
														if(mysqli_num_rows($result) > 0 )        
														{
															while($row = mysqli_fetch_array($result))
															{
														?>
														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>Name </strong>
															<?php echo $row['fullname']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>state </strong>
															<?php echo $row['state_of_origin']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>Dept </strong>
															<?php echo $row['department']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>level </strong>
															<?php echo $row['level']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check "></i>
															<button name="fcheck1" type="submit">click me</button>
														</li>
                                                        <?php
																} 
															}
															else {
																echo "No Record Found";
															}
															?>

													</ul>

													<hr />
													<div class="price">
														
														<small></small>
													</div>
												</div>

												<div>
													<a href="#" class="btn btn-block btn-inverse">
														<span>to cast your vote</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									</center>



									<!------ second candidate ----->
								
									<?php
									$sql = 'select * from fossu1 where id=2'; // change this id as per your need
									$result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
								
									?>
									<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box widget-color-blue">
											<div class="widget-header">
											<h5 class="widget-title bigger lighter">Click the button below</h5>
													</div>

											<div class="widget-body">
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
                                                    <?php
														if(mysqli_num_rows($result) > 0 )        
														{
															while($row = mysqli_fetch_array($result))
															{
														?>
														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>Name </strong>
															<?php echo $row['fullname']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>state </strong>
															<?php echo $row['state_of_origin']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>Dept </strong>
															<?php echo $row['department']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>level </strong>
															<?php echo $row['level']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check "></i>
															<button name="fcheck2" type="submit">click me</button>
														</li>
                                                        <?php
																} 
															}
															else {
																echo "No Record Found";
															}
															?>

													</ul>

													<hr />
													<div class="price">
														
														<small></small>
													</div>
												</div>

												<div>
													<a href="#" class="btn btn-block btn-inverse">
														<span>to cast your vote</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									</center>


									<!------ third candidate ----->
									<center>
									<?php
									$sql = 'select * from fossu1 where id=3'; // change this id as per your need
									$result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
								
									?>
									<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box widget-color-blue">
											<div class="widget-header">
											<h5 class="widget-title bigger lighter">Click the button below</h5>
													</div>

											<div class="widget-body">
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
                                                    <?php
														if(mysqli_num_rows($result) > 0 )        
														{
															while($row = mysqli_fetch_array($result))
															{
														?>
														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>Name </strong>
															<?php echo $row['fullname']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>state </strong>
															<?php echo $row['state_of_origin']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>Dept </strong>
															<?php echo $row['department']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>level </strong>
															<?php echo $row['level']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check "></i>
															<button name="fcheck3" type="submit">click me</button>
														</li>
                                                        <?php
																} 
															}
															else {
																echo "No Record Found";
															}
															?>


													</ul>

													<hr />
													<div class="price">
														
														<small></small>
													</div>
												</div>

												<div>
													<a href="#" class="btn btn-block btn-inverse">
														<span>to cast your vote</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									</center> 
									

									<!------ fourth candidate ----->
									<center>
									<?php
									$sql = 'select * from fossu1 where id=4'; // change this id as per your need
									$result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
							
									?>
									<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box widget-color-blue">
											<div class="widget-header">
											<h5 class="widget-title bigger lighter">Click the button below</h5>
													</div>

											<div class="widget-body">
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
                                                    <?php
														if(mysqli_num_rows($result) > 0 )        
														{
															while($row = mysqli_fetch_array($result))
															{
														?>
														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>Name </strong>
															<?php echo $row['fullname']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>state </strong>
															<?php echo $row['state_of_origin']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>Dept </strong>
															<?php echo $row['department']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>level </strong>
															<?php echo $row['level']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check "></i>
															<button name="fcheck4" type="submit">click me</button>
														</li>
                                                        <?php
																} 
															}
															else {
																echo "No Record Found";
															}
															?>

													</ul>

													<hr />
													<div class="price">
														
														<small></small>
													</div>
												</div>

												<div>
													<a href="#" class="btn btn-block btn-inverse">
														<span>to cast your vote</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									</center> 
									

									<!------ fifth candidate ----->
									<center>
									<?php
									$sql = 'select * from fossu1 where id=5'; // change this id as per your need
									$result = mysqli_query($connection, $sql) or die('Error ' . mysqli_error($connection));
									
									?>
									<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box widget-color-blue">
											<div class="widget-header">
											<h5 class="widget-title bigger lighter">Click the button below</h5>
													</div>

											<div class="widget-body">
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
                                                    <?php
														if(mysqli_num_rows($result) > 0 )        
														{
															while($row = mysqli_fetch_array($result))
															{
														?>
														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>Name </strong>
															<?php echo $row['fullname']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>state </strong>
															<?php echo $row['state_of_origin']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>Dept </strong>
															<?php echo $row['department']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															<strong>level </strong>
															<?php echo $row['level']; ?>
														</li>

														<li>
															<i class="ace-icon fa fa-check "></i>
															<button name="fcheck5" type="submit">click me</button>
														</li>
                                                        <?php
																} 
															}
															else {
																echo "No Record Found";
															}
															?>


													</ul>

													<hr />
													<div class="price">
														
														<small></small>
													</div>
												</div>

												<div>
													<a href="#" class="btn btn-block btn-inverse">
														<span>to cast your vote</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									</center> 
									----->

									
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">F.C.A.H & P.T</span>
							&copy; 2021
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
