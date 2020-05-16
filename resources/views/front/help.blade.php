@extends('layouts.navbar')
  @section('content')

  <?php $pageName = 'Help_us'; ?> 
   
	<!-- Page info section -->
	
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/x.jpg" style="height: 410px !important;">
		
		<div class="pi-content" style="top: 10em !important;">
			<div class="container">
				<div class="row">
					<div class="text-white text-center mx-auto">
						<h3><img src="{{asset('img/play.png')}}" height="60" width="60">GFace Support Center</h3>
						<div class="text-center">
							<form class="form-wrapper cf">
								<input type="text" placeholder="HI, HOW CAN WE HELP?" required>
								<button type="submit">Search</button>
						  </form>
						  <div class="byline"><p>search box by
							   <a href="http://speckyboy.com/2012/02/15/how-to-build-a-stylish-css3-search-box/">SpeckyBoy</a>
								featured on 
								<a href="http://thecodeblock.com/search-box-tutorials-using-css3-jquery/">
									THE CODE BLOCK</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<div class="spacer"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="text-center">
					<img src="img/support1.png" alt="">
					<h5 class="m-3 text-uppercase">GFace Technical issues</h5>
					<p class="text-muted text-center m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="text-center">
					<img src="img/support2.png" alt="">
					<h5 class="m-3 text-uppercase">GFace Downloads & Installing</h5>
					<p class="text-muted text-center m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="text-center">
					<img src="img/support3.png" alt="">
					<h5 class="m-3 text-uppercase">GFace Policies & General Info</h5>
					<p class="text-muted text-center m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</div>
		</div>
	</div>


	<div class="spacer"></div>
	<div class="text-center text-muted">
		<h2 >Meet our key support staff</h2>
		<small>If you want proof that we’re not all robots, look no further. :)</small>
		<div class="m-3">
			<a href="" class="btn btn-warning">OUR TEAM</a>
		</div>
		<div>
			<img src="img/team.png" alt="team">
		</div>
		
	</div>
	
	


	


	

	
	<!-- Footer top section end -->
<?php echo View::make('layouts.footer'); ?>
    @endsection