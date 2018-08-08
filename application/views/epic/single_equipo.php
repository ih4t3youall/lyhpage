
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>L&H Ingenieria &mdash; Equipo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="e" />
	<meta name="author" content="sourceSystemas" />
  <!-- 
	//////////////////////////////////////////////////////

		
	Website: 		www.sourceSistemas.com


	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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
		<a href="<?php echo base_url();?>index.php/epic/<?php echo $link?>" class="transition"><i class="icon-reply"></i><em><span class="icon-home"></span></em></a>
	</div>

	<div id="fh5co-main" role="main">
		
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-push-4 fh5co-heading">
					<h1>Obra: <?php echo $result[0]['obra']?></h1>
					<p>Cliente: <?php echo $result[0]['cliente']?></p>
					<p>Lugar: <?php echo $result[0]['lugar']?></p>
					<p>Planta: <?php echo $result[0]['planta']?></p>
					<p>Antecedentes: <?php echo $result[0]['antecedentes']?></p>
				</div>
			</div>
			
			<div class="fh5co-grid">
				
				<div class="fh5co-col-1">
					<div class="fh5co-heading padding-right">
						<h2>Descripcion de tareas:</h2> <p><?php echo $result[0]['desc_tar_realiz']?></p>
						<!--<p><?php //echo $result[0]['texto']?></p>-->
					</div>
					
<?php 
if($images['izq'] != null){



foreach($images['izq'] as $key){
echo '					<div class="fh5co-item">';
echo '						<a href="'.base_url().'../../../uploadFiles/uploads/'.$key['url'].'" class="image-popup animate-box">';
echo '							<img src="'.base_url().'../../../uploadFiles/uploads/'.$key['url'].'" alt="image load fail">';
echo '							<div class="fh5co-item-text-wrap">';
echo '								<div class="fh5co-item-text">';
echo '									<h2><i class="icon-search2"></i></h2>';
echo '								</div>';
echo '							</div>';
echo '						</a>';
echo '					</div>';
}
?>

				</div>
				<div class="fh5co-col-2">

<?php
}
if($images['der'] != null){
foreach($images['der'] as $key){
echo '					<div class="fh5co-item">';
echo '						<a href="'.base_url().'../../../uploadFiles/uploads/'.$key['url'].'" class="image-popup animate-box">';
echo '							<img src="'.base_url().'../../../uploadFiles/uploads/'.$key['url'].'" alt="image load fail">';
echo '							<div class="fh5co-item-text-wrap">';
echo '								<div class="fh5co-item-text">';
echo '									<h2><i class="icon-search2"></i></h2>';
echo '								</div>';
echo '							</div>';
echo '						</a>';
echo '					</div>';



}
}
?>

					<div id="fh5co-footer" class="padding-left">
						<p><small> 2017 L&H Ingenieria. All Rights Reserved. <br> Powered by: sourcesSistemas </small></p>

					</div>
				</div>
			</div>
		</div>
</br>
</br>
</br>
</br>
	</div>

	</body>
</html>

