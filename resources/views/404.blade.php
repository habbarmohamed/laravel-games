@extends('layouts.navbar')
@section('content')

<?php $pageName = '404'; ?> 


<!-- Page info section -->
	
<section class="page-info-section set-bg" data-setbg="img/page-top-bg/x.jpg" style="height: 100vh !important;">
		
    <div class="pi-content" style="top: 10em !important;">
        <div class="container">
            <div class="row">
                <div class="text-white text-center mx-auto pt-5">
                    <h2 class="pt-5">
                        <img src="{{asset('img/play.png')}}" height="100" width="100">
                        404, Sorry There's nothing in here
                    </h2>
                    <div class="text-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- Page info section -->




<!-- Footer top section end -->
<?php echo View::make('layouts.footer'); ?>
@endsection