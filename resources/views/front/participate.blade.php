  @extends('layouts.navbar')
  @section('content')
  <?php $pageName = 'Home'; ?> 
	
	<section class="page-info-section set-bg" data-setbg="img/tourCover.jpg">
		
		<div class="tour-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="spacer"></div>
						<div class="text-white">
							<h2 style="letter-spacing: 5px;">Tournaments</h2>

							<div class="pt-3">
								<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto, facere cumque, nesciunt excepturi dolor?</p>
							</div>
							<div class="pt-3">
								<a href="#join" class="btn btn-warning" style="padding: 1em 3em;margin-left: 2em;">JOIN NOW</a>
							</div>
						</div>
						
						
					</div>
					<div class=" col-lg-6 text-white">
						<div>
							<img src="img/nba.png" alt="">

						</div>
					</div>
					<div class="col-lg-3">
						<div class="spacer"></div>
						<div class="mt-5">
							<img src="img/trophy.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>





	<div class="spacer"></div>
	
	<div class="container">
		<div class=" p-3">
			<div class="row">
				<div class="col-lg-6" id="join">
					<h3 class="pb-3">Participate Now</h3>

				<form action="/participate" method="post">
					@csrf
					<label for="">Name</label>
					<div class="form-inline mb-3">
						<input type="text" class="form-control  mr-3" placeholder="First" style="flex: auto" name="first">
						<input type="text" class="form-control  ml-3" placeholder="Last" style="flex: auto" name="last">
					</div>
					@error('first')
                        <div class="badge badge-danger pl-3 pr-3">{{ $message }}</div>
					@enderror
					@error('last')
                        <div class="badge badge-danger pl-3 pr-3">{{ $message }}</div>
                	@enderror

					<label for="">Email</label>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="example@gmail.com" name="email">
					</div>
					@error('email')
                        <div class="badge badge-danger pl-3 pr-3">{{ $message }}</div>
                	@enderror

					<span class="p-4">
						<b>Will you be participating or just watching games?</b>
					</span>

					<div class="form-group">
						<div class="custom-control custom-radio">
						  	<input type="radio" class="custom-control-input" id="checked1" name="status"  value="Participating">
						  	<label class="custom-control-label" for="checked1">Participating </label>

						</div>
						<div class="custom-control custom-radio">
						  	<input type="radio" class="custom-control-input" id="checked2" name="status" value="Watching">
						  	<label class="custom-control-label" for="checked2">Watching </label>
						  	
						</div>
					</div>
					@error('status')
                        <div class="badge badge-danger pl-3 pr-3">{{ $message }}</div>
                	@enderror

					<span class="p-4">
						<b> Which tournaments will you participate or watching in?</b>
					</span>
					<div class="form-group" >
						<div class="custom-control custom-checkbox">
						    <input type="checkbox" class="custom-control-input" id="check1" name="game_tour[]" value="World of Warcraft">
						    <label class="custom-control-label" for="check1">World of Warcraft</label>
						</div>
						<div class="custom-control custom-checkbox">
						    <input type="checkbox" class="custom-control-input" id="check2"  name="game_tour[]" value="The Legend of League">
						    <label class="custom-control-label" for="check2">The Legend of League </label>
						</div>
						<div class="custom-control custom-checkbox">
						    <input type="checkbox" class="custom-control-input" id="check3" name="game_tour[]" value="Clash Of The Best Royale">
						    <label class="custom-control-label" for="check3">Clash Of The Best Royale</label>
						</div>
						<div class="custom-control custom-checkbox">
						    <input type="checkbox" class="custom-control-input" id="check4"  name="game_tour[]" value="Speed Of The Winner">
						    <label class="custom-control-label" for="check4">Speed Of The Winner </label>
						</div>
						
					</div>
					@error('game_tour')
                        <div class="badge badge-danger pl-3 pr-3">{{ $message }}</div>
                	@enderror


					<span class="pl-4 pb-3 pt-3">
						<b>Will you being staying overnight?</b>
					</span>
					<div class="form-group">
						<div class="custom-control custom-radio">
						  	<input type="radio" class="custom-control-input" id="yes" name="stay_over" value="Yes">
						  	<label class="custom-control-label" for="yes">Yes </label>

						</div>
						<div class="custom-control custom-radio">
						  	<input type="radio" class="custom-control-input" id="no" name="stay_over" value="No">
						  	<label class="custom-control-label" for="no">No </label>
						  	
						</div>
					</div>

					<div class="form-group">
						<div class="custom-control custom-checkbox">
						    <input type="checkbox" class="custom-control-input" id="checked0" required>
						    <label class="custom-control-label" for="checked0">I would like to receive email updates on future events </label>
						</div>
					</div>

					<div class="form-group">
						<label for="">Comments or Questions</label>
						<textarea name="comment" id="" cols="20" rows="10" class="form-control" style="height: 8em;"></textarea>
					</div>
					@error('comment')
                        <div class="badge badge-danger pl-3 pr-3">{{ $message }}</div>
                	@enderror

					<div class="form-group">
						
						<button class="send-contact btn-sm" type="submit">Send <i class="fa fa-bell"></i></button>
					</div>

					 <!-- Show Message success  -->
					 <div class="form-group">
						@if(session()->has('message'))
							<div class="alert alert-success">
								{{ session()->get('message') }}
							</div>
						@endif
					</div>

				</form>


				</div>

				<div class="col-lg-2"></div>

				<div class="col-lg-4">
						
					<div class="spacer"></div>

					<div class="mb-3">
						<img src="../img/tour1.jpg" alt="" width="90%">
					</div>

					<div class="mb-3">
						<img src="../img/tour2.jpg" alt="" width="90%">
					</div>

					<div>
						<img src="../img/tour3.jpg" alt="" width="90%">
					</div>

			
				</div>


			</div>
			
		</div>
	</div>





      <!-- Footer top section end -->

 <?php echo View::make('layouts.footer'); ?>

 @endsection