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

									<div class="mx-auto">
										<a class="btn btn-primary" href="file.doc"  download="proposed_file_name" style="width: 100px; background-color:
										transparent; color: #47bac1"; ><i class="fas fa-user-check"></i> Follow</a>

										
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
										<li class="mb-1"><span data-feather="home" class="feather-sm mr-1"></span> Lives in <a href="#">Oslo, Norway</a></li>

										<li class="mb-1"><span data-feather="briefcase" class="feather-sm mr-1"></span> Works at <a href="#">GitHub</a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm mr-1"></span> From <a href="#">Casablanca</a></li>
									</ul>
								</div>
								<hr class="my-0">
								<div class="card-body">
									<h5 class="h6 card-title">Elsewhere</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span class="fa fa-globe "></span> <a href="#">staciehall.co</a></li>
										<li class="mb-1"><span class="fab fa-twitter "></span> <a href="#">Twitter</a></li>
										<li class="mb-1"><span class="fab fa-facebook "></span> <a href="#">Facebook</a></li>
										<li class="mb-1"><span class="fab fa-instagram "></span> <a href="#">Instagram</a></li>
										<li class="mb-1"><span class="fab fa-linkedin "></span> <a href="#">LinkedIn</a></li>
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
									
								</div>
								<div class="card-body h-100">
									<div>
										<img src="../../img/couverture.jpg" height="200px
										" alt="" width="100%" style="margin-bottom: 30px;">
									</div>
								<div class="card">
                        		<div class="row profile_state text-center">
                            		<div class="col-lg-3 col-6">
                                		<div class="body2">
                                    		<i class="fa fa-thumbs-up"></i>
                                    		<h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700">2365</h5>
                                    		<small>Experience</small>
                                		</div>
                            		</div>
                            	<div class="col-lg-3 col-6">
                                	<div class="body2">
                                    <i class="fa fa-star"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                                    <small>Awards</small>
                                </div>
                            		</div>
                            		<div class="col-lg-3 col-6">
                               			 <div class="body2">
                                   		 <i class="fa fa-user"></i>
                                    	<h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                                    <small>Clients</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="body2">
                                    <i class="fa fa-bug"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                    <small>Surgery</small>
                                </div>
                            </div>
                        </div>
                    </div>
   <div class="card">
                        		
			<ul class="nav nav-pills mb-3 mx-auto" id="pills-tab" role="tablist">
  		<li class="nav-item">
    		<a class="nav-link tab active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Story</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link tab" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Portfolio</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link tab" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  		</li>
	</ul>
			<div class="tab-content" id="pills-tabContent">
  				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Hi, my name is Habbar Mohamed. Web Developer. i’m here to share my story and how i learnt web development. Story projects I collaborate on range from creating a complete story platform (mapping out the right & resonant voice, positioning, core messaging and more) for a client's market-facing communications. To providing story lines for narratives, campaigns, key presentations; pitches; film and book projects. To framing and writing top-line content for web sites, capital-raising materials, video and audio scripts. To curating a body of new or existing or evolving story elements. 

				All projects are informed at the outset by an intensive, strategic story briefing I prepare and lead. Likewise, whenever possible, by informal, anecdotal input-gathering among a cross-section of clients' clients, prospects, healthy skeptics, other influencers.</div>
  				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  					<!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Contact me</strong>
    </h5>

    <!--Card content-->
    <div class="card-body col-lg-12">

        <!-- Form -->
        <form class="col-lg-10 mx-auto text-center" style="color: #757575;" action="#!">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form contact-tabs">
                    	<label for="materialRegisterFormFirstName">First name</label>
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form contact-tabs">
                    	<label for="materialRegisterFormLastName">Last name</label>
                        <input type="email" id="materialRegisterFormLastName" class="form-control">
                        
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form contact-tabs mt-0">
            	<label for="materialRegisterFormEmail">E-mail</label>
                <input type="email" id="materialRegisterFormEmail" class="form-control">
                
            </div>

            <!-- Phone number -->
            <div class="md-form contact-tabs">
            	<label for="materialRegisterFormPhone">Phone number</label>
                <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                
                <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Optional - for two step authentication
                </small>
            </div>

			<!-- Message -->
			<div class="md-form">
  				<label for="exampleFormControlTextarea4">Message</label>
  				<textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>

                
            </div>

            <!-- Newsletter -->
            <div class="form-check">
            	<input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
            	<label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                
                
            </div>

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect col-lg-3 mx-auto" type="submit">Send</button>

            <!-- Social register -->
            <p>or Send Message with:</p>

            <a type="button" class="btn btn-default">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn btn-default">
                <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn btn-default">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn btn-default">
                <i class="fab fa-github"></i>
            </a>
            <hr>
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>

        </form>

    </div>
</div>
  				</div>
		</div>
                    		</div>
									

									
							
	</div>
						</div>
					</div>

				</div>
			</main>

<?php echo View::make('layouts.footDashboard'); ?>
</html>
@endsection