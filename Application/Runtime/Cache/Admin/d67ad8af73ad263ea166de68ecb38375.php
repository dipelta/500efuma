<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.2
Version: 1.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>我的傻逼主页-后台管理系统</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<link href="/Template/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES --> 
	<link href="/Template/admin/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/Template/admin/css/pages/lock.css" rel="stylesheet" type="text/css" />
	<link href="/Template/admin/css/custom.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/css/logo.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
	<div class="page-lock">
		<div class="page-logo" style="margin-bottom: 5px;">
			<span id="logowhite">500e</span>
			<span id="logored">FUMA</span>
		</div>
		<div class="page-body">
			<img class="page-lock-img" src="<?php echo ($admin_info['headimg']); ?>" alt="">
			<div class="page-lock-info">
				<h1><?php echo ($admin_info['name']); ?></h1>
				<span class="email"><?php echo ($admin_info['email']); ?></span>
				<span class="locked">注销状态</span>
				<form class="form-inline" method="post" action="<?php echo U('Admin/lock'); ?>">
					<div class="input-group input-medium">
						<input type="hidden" name="status" value="lock">
						<input type="password" class="form-control" placeholder="Password" name="password" value="">
						<span class="input-group-btn">        
						<button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
						</span>
					</div>
					<!-- /input-group -->
					<div class="relogin">
						<a href="login.html">不是当前账户 ?</a>
					</div>
				</form>
			</div>
		</div>
		<div class="page-footer">
			<?php echo date('Y',time()); ?> &copy; Admin . 500efuma  By Saki.
		</div>
	</div>
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="/Template/admin/plugins/respond.min.js"></script>
	<script src="/Template/admin/plugins/excanvas.min.js"></script> 
	<![endif]-->   
	<script src="/Template/admin/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="/Template/admin/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>    
	<script src="/Template/admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/Template/admin/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="/Template/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/Template/admin/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/Template/admin/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/Template/admin/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="/Template/admin/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->   
	<script src="/Template/admin/scripts/app.js"></script>  
	<script src="/Template/admin/scripts/lock.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   Lock.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>