<?php 
	include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test task on Bootstrap</title>
	<link rel="stylesheet" href="TestTaskOnBootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body >

	<header class="d-none bg-white container col-10 position-absolute my-nav-wrapper"> 
		<div class="My-nav-list">
			<a class="ml-3 text-dark nav-link font-weight-bold" href="#"><h4 class="mb-3">Услуги</h4></a>
			<a class="ml-3 text-dark nav-link font-weight-bold" href="#"><h4 class="mb-3">Портфолио</h4></a>
			<a class="ml-3 text-dark nav-link font-weight-bold" href="#"><h4 class="mb-3">Отзывы</h4></a>
			<a class="ml-3 text-dark nav-link font-weight-bold" href="#"><h4 class="mb-3">Вакансии</h4></a>
			<a class="ml-3 text-dark nav-link font-weight-bold" href="#"><h4 class="mb-3">Контакты</h4></a>	
		</div>
		<div class="My-nav-footer">
			<a class="ml-3 mt-4 text-white nav-link d-flex flex-column justify-content-end" href="#">
				<h5>Ростов-на-Дону,</h5>
				<h5>Ленина, 21</h5>
				<span class="font-weight-bold mt-2"><h3>8(863)243-15-10</h3></span>
			</a>
		</div>
	</header>

	<div class="My-main-wrapper">	
		<button type="button" data-toggle="collapse" class="d-flex d-md-none navbar-toggler custom-toggler"> 
			<div class="btn-wrapper">
				<div class="menu-btn-burger"></div>
			</div>
		</button>

		<nav class="navbar navbar-expand-md navbar-light bg-light My-header-custom" role="navigation">
			<div class="container-fluid d-flex justify-content-center">	 
			<div class="col-10 d-flex"> 
				<div class=""></div>
				<a href="#" class="mx-auto navbar-brand col-md-order-1 d-flex align-items-center">
					<img class="Main-logo" src="rededge_logo.png" alt="">	
				</a>
				<div class="collapse navbar-collapse col-md-order-2" >
					<ul class="nav navbar-nav ml-5 MyNavigation">
						<li class="nav-item mx-3">
							<a class="nav-link font-weight-bold" href="#"><h4 class="text-dark">Услуги</h4></a>
						</li>		 		
						<li class="nav-item mx-3">
							<a class="nav-link font-weight-bold" href="#"><h4 class="text-dark">Портфолио</h4></a>
						</li>
						<li class="nav-item mx-3">
							<a class="nav-link font-weight-bold" href="#"><h4 class="text-dark">Отзывы</h4></a>
						</li>
						<li class="nav-item mx-3">
							<a class="nav-link font-weight-bold" href="#"><h4 class="text-dark">Вакансии</h4></a>
						</li>	
						<li class="nav-item mx-3">
							<a class="nav-link font-weight-bold" href="#"><h4 class="text-dark">Контакты</h4></a>
						</li>	
					</ul>
				</div>		
				<div class="ml-auto navbar-brand col-md-order-3">
					<ul class="nav navbar-nav CityInfo">
						<li>
							<a class="text-dark nav-link d-flex flex-column justify-content-end" href="#">
								<span class="text-dark font-weight-bold">8(863)243-15-10</span>
								<h6 class="ml-auto">Ростов-на-Дону</h6>
							</a>	
						</li>	
					</ul>
				</div>
			</div>


			</div>
		</nav>

		<div class="d-none d-md-flex justify-content-center container-fluid position-relative My-connect-form"> 	 
			<div class="h-100 col-10">
					<div class="d-flex justify-content-end col-6 h-100">
						<div class="h-100 w-100 row d-flex align-items-center">
							<div class="container-fluid">
								<div class="text-white"><h1 class="My-main-info-custom">Рекламно-информационное агентство</h1></div>
								<div class="col-10 d-flex justify-content-start text-white mb-4 My-info-custom">
									<h5 class="My-info-custom font-weight-normal">Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</h5>
								</div>
								<form class="mt-5" action="">
									<input class="mb-3 mr-3 form-control-lg My-input-custom" placeholder="Номер телефона" type="text">
									<button class="mb-2 btn btn-danger btn-lg My-button-custom">Обратный звонок</button>
								</form>
							</div>  
					
						</div>	
					</div>
				</div>		 
			</div>

			<?php 
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<div class='dboutput1'>".$row["NewsInfo"]."</div>";
						echo "<div class='dboutput2'>".$row["NewsData"]."</div>";
					}
				}
			?>
		
			<div class="d-none d-md-block mt-5"> 
				<div class="container-fluid position-relative mb-5 d-flex justify-content-center">
					<h1 class="text-black font-weight-bold">Новости</h1>
				</div>		 
			</div>

			<div id="carouselExampleIndicators" class="carousel slide d-none d-md-block col-10 mx-auto" data-ride="carousel">
				<div class="d-block w-100 h-100 d-flex justify-content-around position-absolute">	
					<div class="col-3 h-100 My-frame-custom-start" ></div>
					<div class="col-3 h-100"></div>					
					<div class="col-3 h-100 My-frame-custom-end"></div>
				</div>
				<div class="MyInnerCarousel carousel-inner">
					<div class="carousel-item active"></div>
					<div class="carousel-item"></div>
					<div class="carousel-item"></div>
				</div>
				<ol class="carousel-indicators MyIndicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="mr-3 active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1" class="mr-3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2" class="mr-3"></li>
				</ol>
			</div>

			</div>
	</div>

 

	<div class="MyFooter footer w-100 h-100 container-fluid d-none d-md-flex justify-content-center">
		<div class="d-flex col-10">
			<div class="row">
				<a href="#" class="col-1 mt-5 mb-5">
					<img class="My-logo-footer" src="rededge_logo.png" alt="">	
				</a>
				<div class="col-10 d-flex justify-content-center align-items-center">
					<div class="d-flex flex-row">
						<a class="nav-link" href="#"><h5 class="text text-white font-weight-normal">Услуги</h5></a>
						<a class="nav-link" href="#"><h5 class="text text-white font-weight-normal">Портфолио</h5></a>
						<a class="nav-link" href="#"><h5 class="text text-white font-weight-normal">Отзывы</h5></a>
						<a class="nav-link" href="#"><h5 class="text text-white font-weight-normal">Вакансии</h5></a>
						<a class="nav-link" href="#"><h5 class="text text-white font-weight-normal">Контакты</h5></a>
					</div>
				</div>	 
			</div>
		</div>
	</div>
	<script src="TeskTaskOnBootstrap.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>

 