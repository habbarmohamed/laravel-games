@extends('layouts.navbar')
  @section('content')

    <?php $pageName = 'Games'; ?> 
   
	<!-- Page info section -->
	

<div class="container">
	<div class="spacer"></div>
	<div class="row">
		<div class="col-lg-3">
			<div class="spacer"></div>
			<div class="assassin-img text-center">
				<img src="{{asset('img/creed.png')}}" alt="">
			</div>
		</div>

		<div class=" col-lg-6 mt-5">
			<h2 class="text-center mb-3" style="padding-top: 2em; ">Get The Game you Want</h2>
			<p class="text-center mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur vero, nihil nobis laboriosam, modi eos quisquam eius odit repellendus animi suscipit quis nulla voluptatem adipisci. Laudantium quidem libero nam voluptates!</p>
		</div>

		
		<div class="col-lg-3">
			<div class="spacer"></div>
			<div class="assassin-img text-center">
				<img src="{{asset('img/creed1.png')}}" alt="">
			</div>
		</div>
	</div>
</div>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						@foreach($jeux as $jeu)
						<div class="col-md-4">
							<a href="{{ route('games', $jeu->id_jeu)}}" style="text-decoration: none;">
							<div class="recent-game-item shadow2">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/{{$jeu->img_jeu}}">
									<div class="cata new" style="background-color: {{$jeu->category()->first()->color_cat}} !important">
                                {{$jeu->category()->first()->name_cat}}</div>
								</div>
								<div class="rgi-content">
									<h5>{{$jeu->name_jeu}}</h5>
									<p>{{substr($jeu->desc_jeu, 0, 350)}}...</p>
									
								<div class="rgi-extra" style="background-color: {{$jeu->category()->first()->color_cat}} !important">
                                
								    
                            	</div>
								</div>

							</div>	
						</a>
						</div>
						@endforeach
						
					</div>
					
				</div>
				<div class="mx-auto">{{ $jeux }}</div>
					
				<!-- sidebar -->
				
			</div>
		</div>
	</section>
	<!-- Page section end -->


	<!-- Footer top section -->
	

	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/battlefield.png" alt="" style="height: 37em">
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo text-white">
						<img src="{{asset('img/logohead.png')}}" STYLE="transform: translateY(-100PX)"  alt="">
					
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Last Article</h4>
						<div class="latest-blog">
							
							@foreach($news as $new)
                            <div class="lb-item">
                            	<a href="{{ route('newest', $new->id_news)}}" style="text-decoration: none;">
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
