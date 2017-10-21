<!DOCTYPE html>
<html>
	<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/camera.css">
	<link rel="stylesheet" href="css/owl.carousel.css">



	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src='js/camera.js'></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/script.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<style>
		.my_btn {
			display: inline-block;
			line-height: 2;

			border: solid #000 1px;
			border-radius: 5px;
			background: #fff;

			padding-left: 10px;
			padding-right: 10px;
			text-align: center;

			color: #000;

			font-size: 18px;

		}
		.my_btn i {
			line-height: 2;
			padding-right: 10px;
		}
		.my_btn_fb {
			border: solid #4267b2 1px !important;
			color: #4267b2 !important;
		}
		.my_btn_fb:hover {
			background: #4267b2 !important;
			color: #fff !important;
			text-decoration: none;
		}
		.my_btn:hover {
			background: #000;
			color: #fff;
			text-decoration: none;
		}
		.my_question {
			font-size: 16px;
			text-align: left;
			margin: 10px;
		}

		.my_answer_item {
			display: inline-block;
			border: solid #ddd 1px;
			border-radius: 10px;
			max-width: 200px;

			margin: 10px;
			padding: 10px;

			cursor: pointer;
		}

		.my_answer_item:hover {
			background: #ddd;
		}

	</style>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	<!--<![endif]-->
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
	 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
		 <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
	 </a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
	</head>
<body class="index">
<!--==============================header=================================-->
<?php include_once('layouts/header.php'); ?>
<!--=======content================================-->
 <?php pageContent(); ?>
<!--=======footer=================================-->
<?php include_once('layouts/footer.php'); ?>
<script>
	jQuery(function(){
		jQuery('#camera_wrap').camera({
			height: '34.58333333333333%',
			thumbnails: false,
			pagination: true,
			fx: 'simpleFade',
			loader: 'none',
			hover: false,
			navigation: false,
			playPause: false,
			minHeight: "139px",
		});
	});
</script>
<script>
	$(document).ready(function() {
		$(".owl-carousel").owlCarousel({
			navigation: true,
			pagination: false,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [750,1],
			itemsMobile : [479,1],
			navigationText: false
		});
	});
</script>
<script>
	$(document).ready(function() { 
			if ($('html').hasClass('desktop')) {
				$.stellar({
					horizontalScrolling: false,
					verticalOffset: 20,
					resposive: true,
					hideDistantElements: true,
				});
			}
		});
</script>
<script>
	$(document).ready(function() { 
			var $grid = $('.my_answer').masonry({
			  columnWidth: 80
			});
			// change size of item by toggling gigante class
			$grid.on( 'click', '.my_answer_item', function() {
			  $(this).toggleClass('gigante');
			  // trigger layout after item size changes
			  $grid.masonry('layout');
			});

			$('.my_answer_item').click(function(event) {
				/* Act on the event */
				$(this).find('input').attr('checked','checked');
			});
		});
</script>
</body>
</html>