<body class="bg-default">
	<!-- Navbar -->
	<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="dashboard.html">
				<img src="assets/img/brand/villakancil.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
				<div class="navbar-collapse-header">
					<div class="row">
						<div class="col-6 collapse-brand">
							<a href="dashboard.html">
								<img src="../assets/img/brand/blue.png">
							</a>
						</div>
						<div class="col-6 collapse-close">
							<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="dashboard.html" class="nav-link">
							<span class="nav-link-inner--text">Home</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url(); ?>absen" class="nav-link">
							<span class="nav-link-inner--text">Absensi</span>
						</a>
					</li>

				</ul>
				<hr class="d-lg-none" />
				<ul class="navbar-nav align-items-lg-center ml-lg-auto">
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="https://www.facebook.com/villa.soenda" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
							<i class="fab fa-facebook-square"></i>
							<span class="nav-link-inner--text d-lg-none">Facebook</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="https://www.instagram.com/villakancil/?hl=en" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
							<i class="fab fa-instagram"></i>
							<span class="nav-link-inner--text d-lg-none">Instagram</span>
						</a>
					</li>


				</ul>
			</div>
		</div>
	</nav>
	<!-- Main content -->
	<div class="main-content">
		<!-- Header -->
		<div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
			<div class="container">
				<div class="header-body text-center mb-7">
					<div class="row justify-content-center">
						<div class="col-xl-5 col-lg-6 col-md-8 px-5">
							<h1 class="text-white">Login Page </h1>
							<p class="text-lead text-white">Silahkan Log in dengan NIP dan Password.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="separator separator-bottom separator-skew zindex-100">
				<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
				</svg>
			</div>
		</div>
		<!-- Page content -->
		<div class="container mt--8 pb-5">
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-7">
					<div class="card bg-secondary border-0 mb-0">
						<div class="card-body px-lg-5 py-lg-5">
							<div class="text-center text-muted mb-4">
								<small>Log in Villa Kancil</small>
							</div>
							<div><?= $this->session->flashdata('message'); ?></div>
							<form role="form" method="post" action="login/login">
								<div class="form-group mb-3">
									<div class="input-group input-group-merge input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-circle-08"></i></span>
										</div>
										<input class="form-control" placeholder="Nomor Induk Pegawai" type="text" name="nip">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-merge input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
										</div>
										<input class="form-control" placeholder="Password" type="password" name="password">
									</div>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-primary my-4">Log in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>