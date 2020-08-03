@extends('layouts.navDashboard')
@section('dashboard')

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Profile</h1>

					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Details</h5>
								</div>
								<div class="card-body text-center">
									<img src="../img/18.jpg" alt="Habbar med" class="img-fluid rounded-circle mb-2" width="128" height="128">
									<h5 class="card-title mb-0">Habbar Mohamed</h5>
									<div class="text-muted mb-2">Web Developer</div>

									<div>
										<a class="btn btn-primary btn-sm" href="#">Follow</a>
										<a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Message</a>
									</div>
								</div>
								<hr class="my-0">
								<div class="card-body">
									<h5 class="h6 card-title">Skills</h5>
									<a href="#" class="badge badge-primary mr-1 my-1">HTML</a>
									<a href="#" class="badge badge-primary mr-1 my-1">JavaScript</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Css</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Bootstrap</a>
									<a href="#" class="badge badge-primary mr-1 my-1">PHP</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Mysql</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Laravel</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Wordpress</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Photoshop</a>
								</div>
								<hr class="my-0">
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm mr-1"></span> Lives in <a href="#">Casablanca, MO</a></li>

										<li class="mb-1"><span data-feather="briefcase" class="feather-sm mr-1"></span> Works at <a href="#">GitHub</a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm mr-1"></span> From <a href="#">Boston</a></li>
									</ul>
								</div>
								<hr class="my-0">
								<div class="card-body">
									<h5 class="h6 card-title">Elsewhere</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span class="fas fa-globe fa-fw mr-1"></span> <a href="#">staciehall.co</a></li>
										<li class="mb-1"><span class="fab fa-twitter fa-fw mr-1"></span> <a href="#">Twitter</a></li>
										<li class="mb-1"><span class="fab fa-facebook fa-fw mr-1"></span> <a href="#">Facebook</a></li>
										<li class="mb-1"><span class="fab fa-instagram fa-fw mr-1"></span> <a href="#">Instagram</a></li>
										<li class="mb-1"><span class="fab fa-linkedin fa-fw mr-1"></span> <a href="#">LinkedIn</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Activities</h5>
								</div>
								<div class="card-body h-100">

									<div class="media">
										<img src="img\avatars\avatar-5.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Ashley Briggs">
										<div class="media-body">
											<small class="float-right text-navy">5m ago</small>
											<strong>Ashley Briggs</strong> started following <strong>Habbar Mohamed</strong><br>
											<small class="text-muted">Today 7:51 pm</small><br>

										</div>
									</div>

									<hr>
									<div class="media">
										<img src="img\avatars\avatar.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Chris Wood">
										<div class="media-body">
											<small class="float-right text-navy">30m ago</small>
											<strong>Chris Wood</strong> posted something on <strong>Habbar Mohamed</strong>'s timeline<br>
											<small class="text-muted">Today 7:21 pm</small>

											<div class="border text-sm text-muted p-2 mt-1">
												Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
												pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
											</div>

											<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
										</div>
									</div>

									<hr>
									<div class="media">
										<img src="../img/18.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Habbar Mohamed">
										<div class="media-body">
											<small class="float-right text-navy">1h ago</small>
											<strong>Habbar Mohamed</strong> posted a new blog<br>

											<small class="text-muted">Today 6:35 pm</small>
										</div>
									</div>

									<hr>
									<div class="media">
										<img src="img\avatars\avatar-2.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Carl Jenkins">
										<div class="media-body">
											<small class="float-right text-navy">3h ago</small>
											<strong>Carl Jenkins</strong> posted two photos on <strong>Habbar Mohamed</strong>'s timeline<br>
											<small class="text-muted">Today 5:12 pm</small>

											<div class="row no-gutters mt-1">
												<div class="col-6 col-md-4 col-lg-4 col-xl-3">
													<img src="img\photos\unsplash-1.jpg" class="img-fluid pr-2" alt="Unsplash">
												</div>
												<div class="col-6 col-md-4 col-lg-4 col-xl-3">
													<img src="img\photos\unsplash-2.jpg" class="img-fluid pr-2" alt="Unsplash">
												</div>
											</div>

											<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
										</div>
									</div>

									<hr>
									<div class="media">
										<img src="img\avatars\avatar-2.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Carl Jenkins">
										<div class="media-body">
											<small class="float-right text-navy">1d ago</small>
											<strong>Carl Jenkins</strong> started following <strong>Habbar Mohamed</strong><br>
											<small class="text-muted">Yesterday 3:12 pm</small>

											<div class="media mt-1">
												<a class="pr-3" href="#">
                <img src="../img/18.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Habbar Mohamed">
              </a>
												<div class="media-body">
													<div class="border text-sm text-muted p-2 mt-1">
														Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr>
									<div class="media">
										<img src="../img/18.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Habbar Mohamed">
										<div class="media-body">
											<small class="float-right text-navy">1d ago</small>
											<strong>Habbar Mohamed</strong> posted a new blog<br>
											<small class="text-muted">Yesterday 2:43 pm</small>
										</div>
									</div>

									<hr>
									<div class="media">
										<img src="img\avatars\avatar.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Chris Wood">
										<div class="media-body">
											<small class="float-right text-navy">1d ago</small>
											<strong>Chris Wood</strong> started following <strong>Habbar Mohamed</strong><br>
											<small class="text-muted">Yesterdag 1:51 pm</small>
										</div>
									</div>

									<hr>
									<a href="#" class="btn btn-primary btn-block">Load more</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
							</ul>
						</div>
						<div class="col-6 text-right">
							<p class="mb-0">
								&copy; 2019 - <a href="index.html" class="text-muted">GameFace</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="{{ asset('js\app.js') }}"></script>

</body>

</html>
@endsection