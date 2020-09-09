<?php 
	include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test task on Bootstrap</title>
	<script src="TeskTaskOnBootstrap.js"></script>
	<link rel="stylesheet" href="TestTaskOnBootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body >

	<header id="slide-out1" style="flex-direction:column;" class="d-none bg-white container col-10 position-absolute my-nav-wrapper"> 
	
		<div style="margin-top:100px; margin-bottom:70px;">
			<a class="ml-3 text-dark nav-link font-weight-bold" href="#"><h5 style="font-size:1.35em; line-height:2">Услуги</h5></a>
			<a class="ml-3 text-dark nav-link font-weight-bold" href="#"><h5 style="font-size:1.35em; line-height:2">Портфолио</h5></a>
			<a class="ml-3 text-dark nav-link font-weight-bold" href="#"><h5 style="font-size:1.35em; line-height:2">Отзывы</h5></a>
			<a class="ml-3 text-dark nav-link font-weight-bold" href="#"><h5 style="font-size:1.35em; line-height:2">Вакансии</h5></a>
			<a class="ml-3 text-dark nav-link font-weight-bold" href="#"><h5 style="font-size:1.35em; line-height:2">Контакты</h5></a>	
		</div>
		<div style="height:100vh; background-color: #211F2A">
			<a class="ml-3 mt-4 text-white nav-link d-flex flex-column justify-content-end" href="#">
				<h6   style="font-size:1.1em; ">Ростов-на-Дону,</h6>
				<h6   style="font-size:1.1em; ">Ленина, 21</h6>
				<span style="font-size:1.4em; line-height:2.1" class="font-weight-bold">8(863)243-15-10</span>
			</a>
		</div>
	 
	</header>
			
	<button type="button" data-toggle="collapse" data-target="#slide-out" class="d-flex d-md-none navbar-toggler custom-toggler">
		<div class="btn-wrapper">
			<div class="menu-btn-burger"></div>
		</div>
	</button>

	<nav style="position:relative; z-index:15;" class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
		
		<div class="container col-10"> 
 
			<div class="col-0.1"></div>

			<a href="#" class="navbar-brand col-md-order-1">
				<img width="48" height="48" src="rededge_logo.png" alt="">	
			</a>

			<div class="collapse navbar-collapse col-md-order-2" >
				<ul class="nav navbar-nav ml-5 MyNavigation">

					<li class="nav-item mx-2">
						<a class="nav-link font-weight-bold" href="#"><h5 class="text-dark" style="font-size:1.35em">Услуги</h5></a>
					</li>
			 		
			 		<li class="nav-item mx-2">
						<a class="nav-link font-weight-bold" href="#"><h5 class="text-dark" style="font-size:1.35em">Портфолио</h5></a>
					</li>

			 		<li class="nav-item mx-2">
						<a class="nav-link font-weight-bold" href="#"><h5 class="text-dark" style="font-size:1.35em">Отзывы</h5></a>
					</li>

				 	<li class="nav-item mx-2">
						<a class="nav-link font-weight-bold" href="#"><h5 class="text-dark" style="font-size:1.35em">Вакансии</h5></a>
					</li>	

					<li class="nav-item mx-2">
						<a class="nav-link font-weight-bold" href="#"><h5 class="text-dark" style="font-size:1.35em">Контакты</h5></a>
					</li>	

				</ul>
			</div>
			
			<div class="navbar-brand col-md-order-3">
				<ul class="nav navbar-nav CityInfo">
					<li class="">
						<a class="text-dark nav-link d-flex flex-column justify-content-end" href="#">
							<span class="text-dark font-weight-bold">8(863)243-15-10</span>
							<h6>Ростов-на-Дону</h6>
						</a>	
					</li>	
				</ul>
			</div>
		</div>
 
	</nav>

	<div style="background: linear-gradient(0deg, rgba(53, 53, 53, 0.5), rgba(53, 53, 53, 0.5)), url('Rectangle2.png') no-repeat; background-size:cover; width:2000px; height: 600px; z-index:3; left:0px;" class="d-none d-md-block container-fluid position-relative"> 	 
		<div class="container col-10 w-100 h-100">
				<div class="col-5 w-100 h-100">
					<div class="h-100 w-100 row d-flex align-items-center">
						<div class="container">
							<div class="text-white"><h1>Рекламно-информационное агентство</h1></div>
							<div class="text-white mb-4"><h5>Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</h5></div>
							<form class="" action="">
								<input class="mb-3 mr-3 form-control-lg" placeholder="Номер телефона" type="text">
								<button style="background-color: #D51522; width: 256px;" class="mb-2 btn btn-danger btn-lg">Обратный звонок</button>
							</form>
						</div>  
				 
					</div>	
				</div>
			</div>	
			
			 
		</div>

		<?php 
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<div class='dboutput1' style='display:none'>".$row["NewsInfo"]."</div>";
					echo "<div class='dboutput2' style='display:none'>".$row["NewsData"]."</div>";
				}
			}
		?>
		
			<div class="d-none d-md-block" style="margin-top:90px"> 
				<div class="container-fluid position-relative mb-5 d-flex justify-content-center">
					<h1 class="text-black font-weight-bold">Новости</h1>
				</div>		 
			</div>

				<div id="carouselExampleIndicators" class="carousel slide d-none d-md-block" data-ride="carousel">
					<div style="position:absolute; top:15;" class="d-block w-100 h-100 d-flex justify-content-around">	
						<div class="col-3 h-100" style=" box-shadow: -25px -25px 0px 0px rgba(213,21,34,1)"></div>
						<div class="col-3 h-100"></div>					
						<div class="col-3 h-100" style="box-shadow: 25px 25px 0px 0px rgba(111,97,160,1)"></div>
					</div>
					<div class="MyInnerCarousel carousel-inner">
						<div class="carousel-item active"></div>
						<div class="carousel-item"></div>
					  	<div class="carousel-item"></div>
					</div>
					<ol class="carousel-indicators MyIndicators">
					  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
				</div>
			</div>

		<div class="MyFooter footer mt-auto w-100 h-100 container-fluid d-none d-md-block">
			<div class="container col-10">
				<div class="row">
					<a href="#" class="col mt-5 mb-5">
						<img width="64" height="64" src="rededge_logo.png" alt="">	
					</a>
					<div class="col-8 d-flex align-items-center">
						<div class="row">
							<a class="nav-link font-weight-bold" href="#"><h5 class="text text-white">Услуги</h5></a>
							<a class="nav-link font-weight-bold" href="#"><h5 class="text text-white">Портфолио</h5></a>
							<a class="nav-link font-weight-bold" href="#"><h5 class="text text-white">Отзывы</h5></a>
							<a class="nav-link font-weight-bold" href="#"><h5 class="text text-white">Вакансии</h5></a>
							<a class="nav-link font-weight-bold" href="#"><h5 class="text text-white">Контакты</h5></a>
						</div>
					</div>	 
				</div>
			</div>
		</div>
 
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

 