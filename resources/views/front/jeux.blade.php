@extends('layouts.navbar')
  @section('content')

  <?php $pageName = 'Game'; ?> 
   
	<!-- Page info section -->
	
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/4.png">
		
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Game reviews</h2>
						<div>
						<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam esse dolore fugiat minima natus facilis deserunt praesentium possimus quasi ducimus numquam beatae, in repellat quibusdam aperiam temporibus, eum voluptates, obcaecati.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<div class="spacer"></div>
	<h2 class="text-center">
		<img src="{{asset('img/play.png')}}" height="60" width="60"> All Games
	</h2>


	<section class="page-section review-page spad">
		<div class="container">
			<div class="row">
				@foreach($jeux as $jeu)
				<div class="col-md-6 mb-3">
					<a href="{{ route('games', $jeu->id_jeu)}}" style="text-decoration: none;">
					<div class="review-item shadow1  ">
						<div class="review-cover set-bg" data-setbg="../../img/recent-game/{{$jeu->img_jeu}}">
							<div class="transp">
								<div class="text-center">
									<a href="{{ route('games', $jeu->id_jeu)}}" class="eye-click mb-1"><i class="far fa-eye" style="position:absolute;left: 11.5px;"></i></a>
									
								</div>
								
							</div>
							<div class="score yellow">
								{{$jeu->n_rate}}
							</div>
						</div>
						<div class="review-text">
							<h4>{{$jeu->name_jeu}}</h4>
							<span style="font-weight: bold;color: {{$jeu->category()->first()->color_cat}} !important">( {{$jeu->category()->first()->name_cat}} )</span>
							<p>{{substr($jeu->desc_jeu, 0, 400)}} <br>
								
							</p>
							<a href="{{ route('games', $jeu->id_jeu)}}" class="see-info float-right">See Info <i class="fas fa-arrow-right"></i></a>

						</div>
					</div>
					</a>

				</div>
				@endforeach
				
				
			</div>
			
		</div>
	</section>
	<!-- Page section end -->


	<!-- Review section -->
	<section class="review-section review-dark spad set-bg" data-setbg="img/review-bg-2.jpg">
		<div class="container">
			<div class="section-title">
				<div class="cata new">new</div>
				<h2 class="text-white">Recent Reviews</h2>
			</div>
			<div class="row">
				@foreach($nbrjeux as $nbrjeu)
	
				<div class="col-lg-3 col-md-6 p-1">
					<a href="{{ route('games', $nbrjeu->id_jeu)}}" style="text-decoration: none;">
					<div class="review-item shadow " style="height: 40em;">
						<div class="review-cover set-bg" data-setbg="img/recent-game/{{$nbrjeu->img_jeu}}">
							<div class="score purple">{{$nbrjeu->n_rate}}</div>
						</div>
						<div class="review-text">
							<h5  class="text-white">{{$nbrjeu->name_jeu}}</h5>
							<p>{{substr($nbrjeu->desc_jeu, 0, 230)}}</p>
						</div>
					</div>
				</a>
				</div>
					
				@endforeach
		</div>
	</section>
	<!-- Review section end -->

	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/messi.png" alt="" style="
                width: 70%;">
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo text-white">
						<img src="{{asset('img/logohead.png')}}" STYLE="transform: translateY(-100PX)"  alt="">
					
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
<?php echo View::make('layouts.footer'); ?>
    @endsection