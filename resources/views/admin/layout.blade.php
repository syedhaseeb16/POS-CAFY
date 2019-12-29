<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css') }}" >
	<script src="{{ asset('https://kit.fontawesome.com/585b051251.js') }}" crossorigin="anonymous"></script>
	<title>@yield('title')Max Admin</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
	@yield('head')
</head>
<body class="bg">
	@section('header')
	<div class="sticky-top">
		<!-- top bar  -->
		<div class="container-fluid " style="background: #1D7CA7;">
			<div class="container py-1">
				<div class="row">
					<div class="col-lg-12">
						<span class="text-center"><a class="small-text text-warning" href="/"><i class="far fa-hand-point-left"></i></a></span>
						<span class="h5 text-white mr-2 font-weight-bold"><i class="far fa-clock text-white "></i> 03:40 PM</span>
						<span class="h5 text-white font-weight-bold"><i class="far fa-calendar-alt text-white"></i> 23 December,2019</span>

						<?php
						if (session()->get('user')!="") {?>
							<div class="float-right">
								<div class="dropdown" style="z-index: 1;">
									<button type="button" class="btn btn-primary dropdown-toggle bg-transparent border-0" data-toggle="dropdown">
										<span class="h5 text-white font-weight-bold"><i class="far fa-user text-white "></i> <?php echo session()->get('user');?></span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/Logout">LogOut</a>
									</div>
								</div>

							</div>
							<?php
						}
						else
							{?>
								<div class="float-right">
									<span class="h5 text-white font-weight-bold"><i class="far fa-user text-white "></i> <?php echo "error";?>    &nbsp &nbsp<i class="fas fa-ellipsis-v text-white "></i></span>
								</div>

								<?php
							} 
							?>

							<div>

							</div>



						</div>
					</div>
				</div>
			</div>
			<!-- top bar  -->
			<!-- new nav bar -->
			<div class="container-fluid " style=" box-shadow: 0px 1px 8px #1D7CA7;background: #53B4DF; ">
				<div class="container pt-3">
					<div class="col-lg-5 logoimg">
						<img src="images/logo.png" width="180px">
					</div>
					<div class="col-lg-7">
						<nav class="navbar navbar-expand-lg navbar-dark m-0 p-0">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<!-- Nav links -->
								<ul class="nav nav-tabs process-model more-icon-preocess mx-auto">
									<li role="presentation" class="@yield('menu_active')"><a href="/admin"><i class="fa fa-hamburger"></i>
										<p>MENU</p>
									</a></li>
									<li role="presentation" class="@yield('m_active')"><a href="/management"><i class="fa fa-users"></i>
										<p>Managment</p>
									</a></li>
									<li role="presentation" class="@yield('s_active')"><a href="/statistics"><i class="fa fa-qrcode"></i>
										<p>Statistics</p>
									</a></li>
									<li role="presentation " class="@yield('i_active')"><a href="/items" ><i class="fa fa-newspaper-o" ></i>
										<p>Items</p>
									</a></li>
									<li role="presentation" class="@yield('mem_active')"><a href="/reserve" ><i class="fas fa-chair"></i>
										<p>Reservations</p>
									</a></li>
								</ul>
								<!-- Nav links -->
							</div>
						</nav>
					</div>
				</div>
			</div>
			<!-- new nav bar -->
		</div>
		@show

		@yield('content')



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- Bootstrap core JavaScript-->
		<script src="{{asset('man/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('man/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		@yield('footer')
	</body>
	</html>

