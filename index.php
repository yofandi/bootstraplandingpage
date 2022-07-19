<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Landing Pages</title>
	<!-- icon -->
	<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
	<!-- css bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- css custom -->
	<link rel="stylesheet" href="css/style.css">
	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/8c83acd824.js" crossorigin="anonymous"></script>
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">

		<div class="container">
			<a class="navbar-brand" href="#">Bootstrap 5</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#layanan">Layanan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#portofolio">Portofolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tentang">Tentang</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#staff">Staff</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#kontak">Kontak</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#discar" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
				</ul>
				<!-- <form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form> -->
			</div>
		</div>
	</nav>

	<div class="container-fluid banner">
		<div class="container text-center">
			<h4 class="display-3">Welcome</h4>
			<h3 class="display-1">- Kill This Love -</h3>
			<a href="#layanan" title="">
				<button type="button" class="btn btn-danger btn-lg">Cek Layanan</button>
			</a>
		</div>
	</div>

	<div class="container-fluid layanan pt-5 pb-5">
		<div class="container text-center">
			<h2 class="display-3" id="layanan">Layanan</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<div class="row pt-4">
				<div class="col-md-4">
					<span class="lingkaran"><i class="fa-solid fa-laptop-code fa-4x"></i></span>
					<h3 class="mt-3">Programming</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				</div>
				<div class="col-md-4">
					<span class="lingkaran"><i class="fa-brands fa-accusoft fa-4x"></i></span>
					<h3 class="mt-3">Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				</div>
				<div class="col-md-4">
					<span class="lingkaran"><i class="fa-solid fa-network-wired fa-4x"></i></span>
					<h3 class="mt-3">Networking</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid pt-5 pb-5 bg-light">
		<div class="container text-center">
			<h2 class="display-3" id="portofolio">Portofolio</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<div class="row pt-4 gx-4 gy-4">

				<div class="col-md-4 ">
					<div class="card crop-img">
						<img src="https://bikin.website/wp-content/themes/twentynineteen-child/img/feature-page/img_responsive.png" class="card-img-top" width="200px" height="200px">
						<div class="card-body">
							<h5 class="card-title">Lorem impsum</h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 ">
					<div class="card crop-img" >
						<img src="https://www.elsevier.com/__data/assets/image/0004/823261/information-system-supporting-science.jpg" class="card-img-top" width="200px" height="200px">
						<div class="card-body">
							<h5 class="card-title">Lorem impsum</h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 ">
					<div class="card crop-img" >
						<img src="https://trinetprimasolusi.net/wp-content/uploads/2019/11/Management-Information-System.jpg" class="card-img-top" width="200px" height="200px">
						<div class="card-body">
							<h5 class="card-title">Lorem impsum</h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container-fluid pt-5 pb-5" id="tentang">
		<div class="container">
			<h2 class="display-3 text-center">Tentang</h2>
			<p class="text-center">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			</p>
			<div class="clearfix pt-5">
				<img src="https://img.freepik.com/free-vector/about-us-website-banner-concept-with-thin-line-flat-design_56103-96.jpg?size=626&ext=jpg" class="col-md-6 float-md-end mb-3 crop-img" width="300px" height="300px" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>

	<div class="container-fluid pt-5 pb-5 bg-light">
		<div class="container text-center">
			<h2 class="display-3" id="staff">Tim Kami</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			<div class="row pt-4 gx-4 gy-4">
				<div class="col-md-4 text-center tim">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPBJZOCYujNOV4FeVMrg4CykxMnoR0wshpYg&usqp=CAU" class="rounded-circle mb-3" style="height: 20em; : 20em">
					<h4>Hitomi</h4>
					<p>Web Designer</p>
					<p>
						<a href="#hitomi"><span class="fa-stack fa-1x" style="flex-shrink: 0;"><i class="fas fa-circle fa-stack-2x"></i> <i class="fab fa-twitter fa-stack-1x fa-inverse" style="--fa-inverse:var(--fa-navy);"></i></span></a>

						<a href="#hitomi"><span class="fa-stack fa-1x" style="flex-shrink: 0;"><i class="fas fa-circle fa-stack-2x"></i> <i class="fab fa-instagram fa-stack-1x fa-inverse" style="--fa-inverse:var(--fa-navy);"></i></span></a>

						<a href="#hitomi"><span class="fa-stack fa-1x" style="flex-shrink: 0;"><i class="fas fa-circle fa-stack-2x"></i> <i class="fab fa-facebook fa-stack-1x fa-inverse" style="--fa-inverse:var(--fa-navy);"></i></span></a>
					</p>
				</div>

				<div class="col-md-4 text-center tim">
					<img src="https://japanesestation.com/wp-content/uploads/2017/10/news_xlarge_saitoasuka_201710.jpg" class="rounded-circle mb-3" style="height: 20em; : 20em">
					<h4>asuka</h4>
					<p>Software Enginer</p>
					<p>
						<a href="#asuka"><span class="fa-stack fa-1x" style="flex-shrink: 0;"><i class="fas fa-circle fa-stack-2x"></i> <i class="fab fa-twitter fa-stack-1x fa-inverse" style="--fa-inverse:var(--fa-navy);"></i></span></a>

						<a href="#asuka"><span class="fa-stack fa-1x" style="flex-shrink: 0;"><i class="fas fa-circle fa-stack-2x"></i> <i class="fab fa-instagram fa-stack-1x fa-inverse" style="--fa-inverse:var(--fa-navy);"></i></span></a>

						<a href="#asuka"><span class="fa-stack fa-1x" style="flex-shrink: 0;"><i class="fas fa-circle fa-stack-2x"></i> <i class="fab fa-facebook fa-stack-1x fa-inverse" style="--fa-inverse:var(--fa-navy);"></i></span></a>
					</p>
				</div>

				<div class="col-md-4 text-center tim">
					<img src="https://kpopping.com/documents/f4/5/1334/D-5EDsoU8AE7sDV.jpeg?v=97573" class="rounded-circle mb-3" style="height: 20em; : 20em">
					<h4>Kim So-jeong</h4>
					<p>Data Scientist</p>
					<p>
						<a href="#asuka"><span class="fa-stack fa-1x" style="flex-shrink: 0;"><i class="fas fa-circle fa-stack-2x"></i> <i class="fab fa-twitter fa-stack-1x fa-inverse" style="--fa-inverse:var(--fa-navy);"></i></span></a>

						<a href="#asuka"><span class="fa-stack fa-1x" style="flex-shrink: 0;"><i class="fas fa-circle fa-stack-2x"></i> <i class="fab fa-instagram fa-stack-1x fa-inverse" style="--fa-inverse:var(--fa-navy);"></i></span></a>

						<a href="#asuka"><span class="fa-stack fa-1x" style="flex-shrink: 0;"><i class="fas fa-circle fa-stack-2x"></i> <i class="fab fa-facebook fa-stack-1x fa-inverse" style="--fa-inverse:var(--fa-navy);"></i></span></a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid client pt-5 pb-5">
		<div class="container text-center">
			<div class="row pt-4 gx-4 gy-4">
				<div class="col">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Microsoft_logo_%282012%29.svg/1280px-Microsoft_logo_%282012%29.svg.png" style="height: 3em; : 3em">

					<img src="https://images.squarespace-cdn.com/content/v1/56e2e0c520c6472a2586add2/5f1034f1-d790-4715-9cfb-79c7417fc77f/260968365_296686665524227_5732143321030179452_n.png" style="height: 3em; : 3em">

					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/512px-Telegram_2019_Logo.svg.png" style="height: 3em; : 3em">
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid pt-5 pb-5 kontak">
		<div class="container">
			<h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
			<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			<div class="row pb-3">
				<div class="col-md-6">
					<input class="form-control form-control-lg mb-3" type="text" placeholder="Nama"></input>
					<input class="form-control form-control-lg mb-3" type="text" placeholder="Email"></input>
					<input class="form-control form-control-lg mb-3" type="text" placeholder="Phone"></input>
				</div>
				<div class="col-md-6">
					<textarea class="form-control form-control-lg" rows="5" placeholder=""></textarea>
				</div>
			</div>
			<div class="col-md-3 mx-auto text-center">
				<button class="btn btn-danger btn-lg" type="button">Kirim Pesan</button>
			</div>
		</div>
	</div>
	<div class="container text-center pt-5 pb-5">
	  all Right Reserved &copy; 2022
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>