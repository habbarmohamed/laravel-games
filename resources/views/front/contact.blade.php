  @extends('layouts.navbar')
  @section('content')

  <?php $pageName = 'Contact'; ?> 


   
 	<!-- Page info section -->
	
	<!-- Page info section -->


	<!-- Page section -->
	<div class="spacer">	
	</div>
	<h2 style="margin-top: 3em; text-align: center;">Contact Us </h2>
	<section class="page-section spad contact-page">
		<div class="container-fluid">
			<div style="height: 28em;margin-bottom: 2em;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.444842285168!2d-7.610409684796995!3d33.59376068073325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd6323aed1e1%3A0x778d1acefe1d1296!2sBoulevard%20Mohammed%20V%2C%20Casablanca%2020250!5e0!3m2!1sfr!2sma!4v1575287557023!5m2!1sfr!2sma" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					
			</div>
		</div>

		<div class="container">

			<div class="row">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="comment-title">Contact us</h4>
					<p class=" text-center"><b>Contact us</b> to see all the new Games and Tournaments</p>
					<div class="row">
						<div class="col-md-12">
							<ul class="contact-info-list">
								<li>
									<div class="cf-left">Address</div>
									<div class="cf-right text-right">Bd Mohammed V, Casablanca</div>
								</li>
									<br>
								<li>
									<div class="cf-left">Mobile</div>
									<div class="cf-right text-right">0643-990943</div>
								</li>
									<br>
								<li><div class="cf-left">E-mail</div>
									<div class="cf-right text-right">GF.com</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="social-links">
						<a href="http://www.pinterest.com"><i class="fab fa-pinterest"></i></a>
						<a href="http://www.facebook.com"><i class="fab fa-facebook"></i></a>
						<a href="http://www.twitter."><i class="fab fa-twitter"></i></a>
						<a href="http://www.twitter.com"><i class="fab fa-dribbble"></i></a>
						<a href="#"><i class="fab fa-behance"></i></a>
						<a href="#"><i class="fab fa-linkedin"></i></a>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-6">
					<div class="contact-form-warp">
						<h4 class="comment-title">Take a Answer</h4>


						<form class="comment-form" action="/contact" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-5">
									<input type="text" placeholder="Nom" class="form-control" name="name">
								</div>
								<div class="col-md-5">
									<input type="email" placeholder="Email" class="form-control" name="email">
								</div>
								<div class="col-lg-10">
									<div class="form-group">
									<input type="text" placeholder="Sujet" class="form-control" name="subject">
									<textarea placeholder="Message" class="form-control" name="message" style="height: 10em"></textarea>
									<button class="send-contact btn-sm" type="submit">Send</button>
									</div>

									 <!-- Show Message success  -->
                                    <div class="form-group">
                                        @if(session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                    </div>
								</div>
							</div>
						</form>


					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->


	
	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			
			<div class="row">

				<div class="col-lg-6 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						
						<h4 class="fw-title">Last Games</h4>
						<div class="latest-blog">
							@foreach($jeux  as $jeu)
							<div class="lb-item">
								<a href="{{ route('games', $jeu->id_jeu)}}">
								<div class="lb-thumb set-bg" data-setbg="{{asset('img/recent-game')}}/{{$jeu->img_jeu}}"></div>
								<div class="lb-content">
									<div class="lb-date">{{$jeu->name_jeu}} <span>	
										({{$jeu->n_rate}}) <span class="fa fa-star checked"></span></span></div>
									<p>{{substr ($jeu->desc_jeu ,0, 150)}}...</p>
								</a>
								</div>
							</div>
							@endforeach
							
							
						</div>
						
					</div>
				</div>


				
				<div class="col-lg-6 col-md-6" style="z-index:2">
                    <div class="footer-widget mb-5 mb-md-0">
                        <h4 class="fw-title">Last Article</h4>
                        <div class="latest-blog">
                           @foreach($news as $new)
							<div class="lb-item">
							<a href="{{ route('newest', $new->id_news)}}" style="text-decoration: none">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/{{$new->img_news}}"></div>
								<div class="lb-content">
									<div class="lb-date">{{$new->date_news}}</div>
									<p>{{substr ($new->desc_news ,0, 150)}}...</p>
								
								</div>
							</a>
							</div>
							@endforeach
                            
                            
                        </div>
                    </div>
                </div>
				
				
	</section>

	
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	
	<!-- Footer section end -->
		<!-- Footer top section end -->
		<?php echo View::make('layouts.footer'); ?>
    @endsection

