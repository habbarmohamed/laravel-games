@extends('layouts.navbar')
  @section('content')

    <?php $pageName = 'Game'; ?> 


	<section class="speed" style="background-image: url('{{asset('img/recent-game')}}/{{$jeux->cover}}') !important">
    <div class="overlay"></div>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2 class=" mb-4" style="padding-top: 2em; margin-top: 3em">{{$jeux->name_jeu}}</h2>


    

						<div class="text mb-3">
						<p>Rediscover the Need for Speed

						Ready to own the streets? Get behind the wheel of iconic cars and floor it through Ventura Bay, a sprawling urban playground. Explore overlapping stories as you build your reputation – and your dream car – and become the ultimate racing icon. <a href="#more" class="btn btn-default text-center" style="    color: #122a3c; font-weight: bold; text-shadow: 1px 1px 4px white;">Read More</a></p>
						
						</div>
						<div class="form-group">
							<a href="{{$jeux->link}}" class="btn btn-info speed-button " style="background-color:#134e7f; ">Get The Game</a>
						</div>
						
						<b>PLATFORM: <i class="fab fa-apple"></i> <i class="fab fa-windows"></i> </b>
					</div>
				</div>
			</div>
		</div>


					
	


</section>
	
<section class="tabs">	
	<div class="container">
		<div class="card" style="margin-bottom: 5em;">
                        		
			<ul class="nav nav-pills mb-3 mx-auto" id="pills-tab" role="tablist">

  		<li class="nav-item tab-list">
    		<a class="nav-link tab active " id="overview-tab" data-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
  		</li>
  		<li class="nav-item tab-list">
    		<a class="nav-link tab " id="description-tab" data-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
  		</li>
  		<li class="nav-item tab-list">
    		<a class="nav-link tab " id="screenshots-tab" data-toggle="pill" href="#screenshots" role="tab" aria-controls="screenshots" aria-selected="false">Screenshots & Videos</a>
  		</li>
	</ul>

					<!-- Overview -->
			<div class="tab-content" id="pills-tabContent">
  				<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">

  					<h3 style="font-size: 23px; padding: 5px;">Overview</h3>
  					<div class="card pt-3 carte">
  						<div class="container">
  						<div class="row">
  						<div class="col-lg-6">
  							<div>
  								<h4 style="font-size:21px;">Genre</h4>	
  								<p style="font-size:19px;"><b style="color: #36a9a9">{{$jeux->genre_jeu}}</b></p>
  							</div>
  							<div>
  								<h4 style="font-size:21px;">Release Date</h4>	
  								<p style="font-size:19px;">{{$jeux->sortie_jeu}}</p>
  							</div>
  							<div>
  								<h4 style="font-size:21px;">Rating</h4>	
  								<p style="font-size:19px;">+12</p>
  							</div>
  							<div>
  								<h4 style="font-size:21px;">Publisher</h4>	
  								<p style="font-size:19px;"><b style="color: #36a9a9">Electronics Arts</b></p>
  							</div>
  						</div>
  						<div class="col-lg-6">
  							<div>
  								<h4 style="font-size:21px;">Developer</h4>	
  								<p style="font-size:19px;"><b style="color: #36a9a9">{{$jeux->composer_jeu}}</b></p>
  							</div>
  							<div>
  								<h4 style="font-size:21px;">Supported languages</h4>
  								<p style="font-size:19px;">Deutsch (DE), English (US), Español (ES), Français (FR), Italiano, Português (BR)</p>
  							</div>
  							<div>
  								<h4 style="font-size:21px;">Game links</h4>	
  								<div style="font-size:19px;"><b style="color: #36a9a9">Official Site</b></div>
  								<div style="font-size:19px;"><b style="color: #36a9a9">Forums</b></div>
  							</div>
  							
  							
  						</div>
  					</div>
  					</div>
  				</div>
  			</div>


					<!-- Description -->

  				<div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
  					<h3 style="font-size: 23px; padding: 5px;">Description</h3>
  					<div class="card pt-3 carte">
  						<div class="container">
  						<div class="row">
  						<div class="col-lg-6">
  							<div>	
  								<p><b>{{substr($jeux->desc_jeu , 0 , 10)}}</b> {{substr($jeux->desc_jeu, 0, 600)}}</p>
  							</div>
  							<div>
  								<h4>GAME FEATURES:</h4>	
  								<p> Get an unlocked frame rate and experience Need for Speed at 4K resolution, only on PC. Plus, feel the thrill of street racing with steering wheel and peripheral support from a range of manufacturers including Logitech, Thrustmaster and Fanatec.</p>
  							</div>
  							<div>
  								
  								<p><b>Rich authentic customization.</b> Build a car to reflect your character with extensive visual and performance customization options. Because your ride should look as </p>
  							</div>
  						
  						</div>

  						<div class="col-lg-6">
  							<div>
  								<p>good as it handles.</p>
  							</div>
  							<div>
  								
  								<p><b>West Coast playground.</b> Discover Ventura Bay. From the dense city streets to the winding roads that lead you to the harbor and through the canyons, this is your home turf.</p>
  							</div>
  							<div>
								<p><b>Play your way.</b> Need for Speed returns with 5 unique ways to play: Speed, Style, Build, Crew and Outlaw, enabling you to earn reputation and ultimately win your way.</p>
  							</div>
  							<div>
  								<p><b>Living Game.</b> Take on Ventura Bay’s slickest street racers with free updates in Eddie’s challenge and become an expert photographer with Snapshot Pro. Plus, earn Ken Block’s Hoonicorn and Morohoshi-San’s Diablo.</p>
  							</div>
  							<div>
  								<p><b>Be part of the story.</b> Step into a richly created world and be part of an immersive story that takes you all over Ventura Bay.</p>
  							</div>
  							
  							
  						</div>
  					</div>
  					</div>
  				</div>
  				</div>

						<!-- Screenshots -->

  				<div class="tab-pane fade" id="screenshots" role="tabpanel" aria-labelledby="screenshots-tab">
  					<h3 style="font-size: 23px; padding: 5px;">Screenshots & Videos</h3>

  					<div class="card pt-3 carte">
  					<div class="container">
  						<div class="row">

  							<div class="col-lg-3"><img src="{{ asset('img/speed2.jpg')}}" alt="">
  							</div>
  							<div class="col-lg-3"><img src="{{ asset('img/speed3.jpg')}}" alt="">
  							</div>
  							<div class="col-lg-3"><img src="{{ asset('img/speed4.jpg')}}" alt="">
  							</div>
  							<div class="col-lg-3"><img src="{{ asset('img/speed5.jpg')}}" alt="">
  							</div>
  						
  							<div class="col-lg-3 mt-2"><img src="{{ asset('img/speed2.jpg')}}" alt="">
  							</div>
  							<div class="col-lg-3 mt-2"><img src="{{ asset('img/speed3.jpg')}}" alt="">
  							</div>
  							<div class="col-lg-3 mt-2"><img src="{{ asset('img/speed4.jpg')}}" alt="">
  							</div>
  							<div class="col-lg-3 mt-2"><img src="{{ asset('img/speed5.jpg')}}" alt="">
  							</div>

  						</div>
  						
  						</div>
  					</div>

  				</div>
		</div>
        </div>
        </div>

       </div>

</section>	


<!-- End section -->
<!-- trailer section -->

<div class="container-fluid pb-3" style="background-color: black;"> 
  <div class="text-center p-3">
      <h3 style="color: white">Watch Trailer</h3> 
  </div>
  <div class="col-lg-8 offset-lg-2">
      <iframe width="100%" height="500" src="{{$jeux->trailer}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
  </div>

</div>


	<div class="container-fluid">
		<div style="font-family:lato; font-size: 25px" class="pt-5 pb-2">You Might Also Like</div>
		<div class="row">
       
      @foreach($random as $rand)
 			<div class="col-lg-2 p-1">
        <a href="{{ route('games', $rand->id_jeu)}}" style="text-decoration: none;">
				<div class=" carte2" style="background-color:white; ">
					<div class="card-hover">
						<img src="{{asset('img/recent-game')}}/{{$rand->img_jeu ?? ''}}" alt="" style="height:17em;">
						<h6 class="pt-3" style="padding: 5px 10px">{{$rand->name_jeu}}</h6>
					</div>
					<div class="pt-3 text-right" style="color:orange ; padding:5px">
						<span style="color: red">{{$rand->price_jeu}}$</span>
					</div>
          <div class="text-center pb-2">
            <span style="font-weight: bold;color: {{$rand->category()->first()->color_cat}} !important">{{$rand->category()->first()->name_cat}}</span>
          </div>
				</div>
      </a>
			</div>
  @endforeach
	

		</div>
    </div>
		<!-- fin Rech associes -->

  <div class="container">
		<div class="mt-5 mb-7" id="#more">
		<h5 style="padding-bottom: .5em">{{$jeux->name_jeu}}™ Terms and Conditions</h5>
		<p>YOU MUST BE 16+ TO PLAY. PERSISTENT INTERNET CONNECTION, EA ACCOUNT, ACCEPTANCE OF (I) PRODUCT AND ORIGIN END USER LICENSE AGREEMENTS (EULAS), (II) TERMS OF SERVICE AND (III) PRIVACY AND COOKIE POLICY, INSTALLATION OF THE ORIGIN CLIENT SOFTWARE www.origin.com/about, AND REGISTRATION WITH ENCLOSED SINGLE-USE SERIAL CODE REQUIRED TO PLAY. SERIAL CODE REGISTRATION IS LIMITED TO ONE EA ACCOUNT PER SERIAL CODE. SERIAL CODES ARE NON-TRANSFERABLE ONCE USED AND SHALL BE VALID, AT A MINIMUM, SO LONG AS ONLINE FEATURES ARE AVAILABLE. EA PRIVACY AND COOKIE POLICY AND TERMS OF SERVICE CAN BE FOUND AT www.ea.com. EULAS AND ADDITIONAL DISCLOSURES CAN BE FOUND AT www.ea.com/1/product-eulas. EA MAY RETIRE GAME AFTER 30 DAYS NOTICE POSTED ON www.ea.com/1/service-updates. EA MAY PROVIDE CERTAIN INCREMENTAL CONTENT AND/OR UPDATES FOR NO ADDITIONAL CHARGE, IF AND WHEN AVAILABLE.</p>

		<h5 style="padding-bottom: .5em">{{$jeux->name_jeu}}™ Deluxe Edition Terms and Conditions</h5>
		<p class="mb-5">YOU MUST BE 16+ TO PLAY. PERSISTENT INTERNET CONNECTION, EA ACCOUNT, ACCEPTANCE OF (I) PRODUCT AND ORIGIN END USER LICENSE AGREEMENTS (EULAS), (II) TERMS OF SERVICE AND (III) PRIVACY AND COOKIE POLICY, INSTALLATION OF THE ORIGIN CLIENT SOFTWARE www.origin.com/about, AND REGISTRATION WITH ENCLOSED SINGLE-USE SERIAL CODE REQUIRED TO PLAY. SERIAL CODE REGISTRATION IS LIMITED TO ONE EA ACCOUNT PER SERIAL CODE. SERIAL CODES ARE NON-TRANSFERABLE ONCE USED AND SHALL BE VALID, AT A MINIMUM, SO LONG AS ONLINE FEATURES ARE AVAILABLE. EA PRIVACY AND COOKIE POLICY AND TERMS OF SERVICE CAN BE FOUND AT www.ea.com. EULAS AND ADDITIONAL DISCLOSURES CAN BE FOUND AT www.ea.com/1/product-eulas. EA MAY RETIRE GAME AFTER 30 DAYS NOTICE POSTED ON www.ea.com/1/service-updates. EA MAY PROVIDE CERTAIN INCREMENTAL CONTENT AND/OR UPDATES FOR NO ADDITIONAL CHARGE, IF AND WHEN AVAILABLE.</p>

		</div>

                  <div class="row mb-3">
                    <div class="offset-lg-2"></div>
                      <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="social-top-footer text-center">
                          <i class="fab fa-facebook fb"></i>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="social-top-footer text-center">
                          <i class="fab fa-twitter tw"></i>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="social-top-footer text-center">
                          <i class="fab fa-instagram in"></i>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="social-top-footer text-center">
                          <i class="fab fa-telegram tl"></i>
                        </div>
                      </div>
                  </div>

    </div>



	






  <?php echo View::make('layouts.footer'); ?>
  @endsection