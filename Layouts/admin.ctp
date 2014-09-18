<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>
		<?php echo $title_for_layout; ?> - <?php echo __d('croogo', 'Croogo'); ?>
		</title>
		<?php

		echo $this->Html->css(array(
			'/plugins/pace/pace-theme-flash',
			'/plugins/jquery-slider/css/jquery.sidr.light',
			'/plugins/boostrapv3/css/bootstrap.min',
			'/plugins/boostrapv3/css/bootstrap-rtl.min',
			'/plugins/boostrapv3/css/bootstrap-theme.min',
			'/plugins/font-awesome/css/font-awesome',
			'/css/animate.min',
			'/css/croogo-bootstrap',
			'/css/rtl/style',
			'/css/rtl/style2',
			'/css/rtl/responsive',
			'/css/custom-icon-set',

		));
		echo $this->Layout->js();

		echo $this->Html->script(array(
			'/plugins/jquery-1.8.3.min',
			'/plugins/jquery-ui/jquery-ui-1.10.1.custom.min',
			'/plugins/bootstrap/js/bootstrap.min',
			'/plugins/breakpoints',
			'/plugins/jquery-unveil/jquery.unveil.min',
			'/plugins/jquery-block-ui/jqueryblockui',
			//  // END CORE JS FRAMEWORK

			// // <!-- BEGIN PAGE LEVEL JS -->
			'/plugins/jquery-slider/jquery.sidr.min',
			// '/plugins/jquery-slimscroll/jquery.slimscroll.min',
			// '/plugins/pace/pace.min',
			// '/plugins/jquery-numberAnimate/jquery.animateNumbers',
			// '/plugins/jquery.cookie',
			// // END PAGE LEVEL PLUGINS 

			//  BEGIN CORE TEMPLATE JS 
			'/js/core',
			'/js/chat',
			'/js/demo',
		));

		echo $this->fetch('script');
		echo $this->fetch('css');

		?>
	</head>
	<body class="boxed-layout rtl">
	<!-- BEGIN HEADER -->
	<div class="container">
	  <?php echo $this->element('admin/header'); ?>
	  <!-- END HEADER -->
	  <!-- BEGIN CONTAINER -->
	  <div class="page-container row-fluid">
	    <!-- BEGIN SIDEBAR -->
	    <?php echo $this->element('admin/navigation'); ?>
	    <!-- END SIDEBAR -->
	    <!-- BEGIN PAGE CONTAINER-->
	    <div class="page-content">
	      <div class="clearfix"></div>
	        <?php echo $this->Layout->sessionFlash(); ?>
	        <?php echo $this->fetch('content'); ?>      
	    </div>
	  </div>

	</div>

	<!-- BEGIN CORE JS FRAMEWORK-->

	<!-- END CORE TEMPLATE JS -->
	</body>
</html>