@extends('layouts.navbar')
  @section('content')

    <?php $pageName = 'News'; ?> 
 
<body style="background-color: white">
<div class="mt-5"></div>
	<div class="container">
		<h2 style="    font-weight: bold;
    font-family: lato;font-variant: petite-caps;color: #5a5555; margin-top: 3em">Newest</h2>
		<div class="card" style="background-color: white !important; border: none !important">
		<div class="col-lg-12">
			<div class="row">
				
				<div class="col-lg-8">
					<img src="{{asset('img/latest-blog')}}/{{$newes->img_news}}" alt="" style="width: 100%">
					<h3 class="mt-3">{{$newes->title_news}}</h3>
					<div class="text-right mt-2 mb-3">
						by: 
						<span style="color: red; margin-right: 1em; font-weight: bold">	{{$newes->author_news}}</span> 
						<i class="far fa-clock" style="    color: #9ad4d4;"></i> <span style="margin-right: 1em">	{{$newes->date_news}}</span>   
						<i class="far fa-comment" style="    color: #9ad4d4;"></i><span> 0</span>
					</div>
					<div>
						<p class="pb-3">{{$newes->desc_news}}</p>
						
						
					</div>
					
					<div class="spacer"></div>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-4">
									<h4>Share This</h4>
								</div>
								<div class="col-lg-8">
									<div class="row">
									<div class="col-lg-2">
										<a href="">
										<i class="fab fa-facebook" style="font-size: 2em; color: #4267B2"></i>
										</a>
									</div>
									<div class="col-lg-2">
										<a href="">
										<i class="fab fa-twitter" style="font-size: 2em; color: #00acee"></i>
										</a>
									</div>
									<div class="col-lg-2">
										<a href="">
										<i class="fab fa-instagram" style="font-size: 2em; color: #C13584"></i>
										</a>
									</div>
									<div class="col-lg-2">
										<a href="">
										<i class="fab fa-telegram" style="font-size: 2em; color: #0088cc"></i>
										</a>
									</div>
									</div>
								</div>
							</div>
						</div>
						

					
				</div>


				<div class="col-lg-4">
					<div class="row">
						@foreach($news as $new)
						<div class="col-lg-6 p-1">
							<img src="{{asset('img/latest-blog')}}/{{$new->img_news}}" alt="" style="width: 20em; height: 10em;">
						</div>
						<div class="col-lg-6 pl-2">
							<a href="{{ route('newest', $new->id_news)}}" class="title-news">
							<h6>{{$new->title_news}}</h6>
							</a>
							<span>{{$new->date_news}}</span>
						</div>
						@endforeach()
					</div>
				</div>
			</div>
		</div>
	</div> 

	<div class="col-lg-8">
		<div class="form-group purple-border">
  			<label for="exampleFormControlTextarea4"><b>Take A Comment</b></label>
  			<textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
  			<div class="mt-2">
  				<input type="submit" class="btn btn-danger float-right">
  			</div>
  			
  			<div class="clearfix"></div>
		</div>
		
		<div class="row pt-3">
			<div class="col-lg-2 p-1">
				<div class="comment-img">
					<img src="{{asset('img/17.jpg')}}" alt="">
				</div>
				
			</div>
			<div class="col-lg-10">
				<h5>Christian Benteke</h5>
				<p class="comment-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae minima dolores impedit ducimus fugit aliquam, voluptatibus, corporis, maiores recusandae obcaecati nulla rerum sed magni aperiam ipsum ut, quod nesciunt omnis.</p>
				<a href="">
					<span class="float-right"><i class="far fa-thumbs-up"></i> Like</span>
				</a>
				<div class="clearfix"></div>
				<hr>
			</div>
			<hr>


			<div class="col-lg-2 p-1">
				<div class="comment-img">
					<img src="{{asset('img/19.jpg')}}" alt="">
				</div>
				
			</div>
			<div class="col-lg-10">
				<h5>John Grenier</h5>
				<p class="comment-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae minima dolores impedit ducimus fugit aliquam, voluptatibus, corporis, maiores recusandae obcaecati nulla rerum sed magni aperiam ipsum ut, quod nesciunt omnis.</p>
				<a href="">
					<span class="float-right"><i class="far fa-thumbs-up"></i> Like</span>
				</a>
				<div class="clearfix"></div>
				<hr>
			</div>

			


			<div class="col-lg-2 p-1">
				<div class="comment-img">
					<img src="{{asset('img/20.jpg')}}" alt="">
				</div>
				
			</div>
			<div class="col-lg-10">
				<h5>sharma Preety</h5>
				<p class="comment-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae minima dolores impedit ducimus fugit aliquam, voluptatibus, corporis, maiores recusandae obcaecati nulla rerum sed magni aperiam ipsum ut, quod nesciunt omnis.</p>
				<a href="">
					<span class="float-right"><i class="far fa-thumbs-up"></i> Like</span>
				</a>
				<div class="clearfix"></div>
				<hr>
			</div>

			


		</div>

		
		<div class="spacer"></div>
	</div>
                      





	</div>
</body>












  <?php echo View::make('layouts.footer'); ?>
    @endsection