<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>L&H Ingenieria &mdash; Obras </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="L&H Ingenieria obras" />
	<meta name="keywords" content="" />
	<meta name="author" content="sourcesSistemas" />

  <!-- 
	//////////////////////////////////////////////////////


		
	Website: 		sourcesSistemas.com.ar


	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />  -->

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="<?php echo base_url().'/epic/'?>css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="<?php echo base_url().'/epic/'?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url().'/epic/'?>css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url().'/epic/'?>css/magnific-popup.css">

	<link rel="stylesheet" href="<?php echo base_url().'/epic/'?>css/style.css">

	<!-- jQuery -->
	<script src="<?php echo base_url().'/epic/'?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url().'/epic/'?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url().'/epic/'?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url().'/epic/'?>js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url().'/epic/'?>js/jquery.magnific-popup.min.js"></script>
	
	<!-- Main JS -->
	<script src="<?php echo base_url().'/epic/'?>js/main.js"></script>



	<!-- Modernizr JS -->
	<script src="<?php echo base_url().'/epic/'?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<!-- Loader -->
	<div class="fh5co-loader"></div>

	<div id="fh5co-logo">
		<a href="<?php echo base_url();?>index.php/main" class="transition"><i class="icon-reply"></i><em><span class="icon-home"></span></em></a>
	</div>

	<div id="fh5co-main" role="main">
		

		<div class="container">
			
			<div class="fh5co-grid">
				
				<div class="fh5co-col-1">

					<div class="fh5co-intro padding-right">
<!--						<h1>I'm Jean Smith <em>&amp;</em> I'm a Photographer. I love capture life. <a href="about.html" class="transition"><em>About Me</em></a></h1>-->
<!--						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
							<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
							<li><a href="#"><i class="icon-instagram-with-circle"></i></a></li>
							<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
						</ul>
-->
					</div>
<?php 
if($result['izq']!= null){
foreach ($result['izq'] as $key){
				echo '	<div class="fh5co-item">';
				echo '		<a href="'.base_url().'/index.php/epic/'.$link.'?id_obra='.$key['id_obra'].'" class="transition animate-box">';
				echo '			<img src="../../../uploadFiles/uploads/'.$key['image']['url'].'" alt="imagen obra">';
				echo '			<div class="fh5co-item-text-wrap">';
				echo '				<div class="fh5co-item-text">';
				echo '					<h2>'.$key['obra'].'</h2>';
				echo '				</div>';
				echo '			</div>';
				echo '		</a>';
				echo '	</div>';
}

}
?>


				</div>

				<div class="fh5co-col-2">


<?php 

if($result['der']!= null){
foreach ($result['der'] as $key){
				echo '	<div class="fh5co-item">';
				echo '		<a href="'.base_url().'/index.php/epic/'.$link.'?id_obra='.$key['id_obra'].'" class="transition animate-box">';
				echo '			<img src="../../../uploadFiles/uploads/'.$key['image']['url'].'" alt="imagen obra">';
				echo '			<div class="fh5co-item-text-wrap">';
				echo '				<div class="fh5co-item-text">';
				echo '					<h2>'.$key['obra'].'</h2>';
				echo '				</div>';
				echo '			</div>';
				echo '		</a>';
				echo '	</div>';
}
}
?>




					<div id="fh5co-footer" class="padding-left">
                        <p><small> 2017 L&H Ingenieria. All Rights Reserved. <br> Powered by: sourcesSistemas </small></p>
<!--						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
							<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
							<li><a href="#"><i class="icon-instagram-with-circle"></i></a></li>
							<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
						</ul>-->
					</div>
				</div>
			</div>
		</div>
<br/>
<br/>
<br/>
	</div>
	
	</body>
</html>

