@extends('layouts.navbar')
  @section('content')

    <?php $pageName = 'News'; ?> 
  
<body style="background-color: white;">

  <section id="news" style="background-image: url(../img/recent-game-bg.png);">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">

               <div class="container">
                  <h2 class="pt-5 text-center" style="    font-size: 3em;font-family: lato;font-variant-caps: petite-caps; margin-top: 1em">News</h2>
                  <p class="lead text-center">Lorem ipsum dolor sit amet, quodsi audiam mel cu,<br> eu sonet tamquam contentiones qui. Na his vidit verterem, vix alienum lucilius at.<br> Apeirian eleifend ex pro, ad sea purto prompta labores. Dicunt contentiones id sit.</p>
               </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto new-blog">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                           <div class="row">
                           @foreach($news as $new)
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="blog">
                                 <div class="blog-img">
                                    <img src="{{asset('img/latest-blog')}}/{{$new->img_news}}" alt="service-img" />
                                 </div>
                                 <div>
                                    <span class="date">{{$new->date_news}}</span>
                                    <h3 class="blog-heading"><a href="{{ route('newest', $new->id_news)}}" style="text-decoration: none">{{$new->title_news}}</a></h3>
                                    <p>{{substr($new->desc_news ,0, 200)}}
                                    </p>
                                    <div class="center"><a href="{{ route('newest', $new->id_news)}}" class="read-more-bt btn-cust">Read More</a></div>
                                 </div>
                              </div>
                           </div>

                           @endforeach()
                                 
                                                                           
                                                      
                           </div>
                           <div class="text-center">
                              {{$news->links()}}
                           </div>

                        </div>
                        


                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mx-auto tab-news" style="background-color: white;">
                           <div class="row">
                              <ul class="nav nav-tabs" role="tablist" >
                                 <li class="nav-item">
                                    <a class="nav-link active" href="#News" role="tab" data-toggle="tab">Most Read</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#Follow" role="tab" data-toggle="tab">Follow</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#Reviews" role="tab" data-toggle="tab">Reviews</a>
                                 </li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane active" id="News">
                                    <ul class="featured-posts">
                                       
                                       
                                       @foreach($tabnews as $tabnew)
                                          @if($loop->index <= 3 )
                                       <li>
                                          <div class="ImageWrapper">
                                             <a href="#">
                                             <img class="img-responsive" src="{{asset('img/latest-blog')}}/{{$tabnew->img_news}}" alt="#" style="width: 100%;">
                                             </a>
                                          </div>
                                          <h6><a title="" href="{{ route('newest', $tabnew->id_news)}}">
                                    <?php $pieces = explode(":", $tabnew->title_news);
                                    echo $pieces[0]; ?></a></h6>

                                          <span class="meta">
                                          <a href="{{ route('news', $new->id_news)}}" title=""><i class="far fa-clock"></i>{{$tabnew->date_news}}</a>
                                          <a href="#" title=""><i class="fa fa-user"></i> {{$tabnew->author_news}}</a>
                                          </span><!-- end meta -->
                                          <p>Now for manner company parlors.</p>
                                       </li>
                                          @endif
                                       @endforeach()


                                    </ul>
                                 </div>
                                 <div role="tabpanel" class="tab-pane fade" id="Follow">
                                    <ul class="social-site">
                                       <li class="facebook-wrap">
                                          <span class="social-media">
                                          <i class="fab fa-facebook"></i>
                                          </span><!-- end pull-left -->
                                          <span class="count">
                                          26, 000 Fans
                                          </span><!-- end count -->
                                          <a href="#">
                                             <span class="social-button">
                                             LIKE
                                             </span><!-- end pull-right -->
                                          </a>
                                       </li>
                                       <li class="twitter-wrap">
                                          <span class="social-media">
                                          <i class="fab fa-twitter"></i>
                                          </span><!-- end pull-left -->
                                          <span class="count">
                                          1000 Followers
                                          </span><!-- end count -->
                                          <a href="#">
                                             <span class="social-button">
                                             FOLLOW
                                             </span><!-- end pull-right -->
                                          </a>
                                       </li>
                                       <li class="google-plus-wrap">
                                          <span class="social-media">
                                          <i class="fab fa-google-plus"></i>
                                          </span><!-- end pull-left -->
                                          <span class="count">
                                          23, 400 Followers
                                          </span><!-- end count -->
                                          <a href="#">
                                             <span class="social-button">
                                             FOLLOW
                                             </span><!-- end pull-right -->
                                          </a>
                                       </li>
                                       <li class="dribbble-wrap">
                                          <span class="social-media">
                                          <i class="fab fa-dribbble"></i>
                                          </span><!-- end pull-left -->
                                          <span class="count">
                                          986 Followers
                                          </span><!-- end count -->
                                          <a href="#">
                                             <span class="social-button">
                                             FOLLOW
                                             </span><!-- end pull-right -->
                                          </a>
                                       </li>
                                       <li class="youtube-wrap">
                                          <span class="social-media">
                                          <i class="fab fa-youtube"></i>
                                          </span><!-- end pull-left -->
                                          <span class="count">
                                          1000 Subscribers 
                                          </span><!-- end count -->
                                          <a href="#">
                                             <span class="social-button">
                                             SUBSCRIBE
                                             </span><!-- end pull-right -->
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div role="tabpanel" class="tab-pane fade" id="Reviews">
                                    <ul class="featured-posts">
                                       
                                       @foreach($jeux as $jeu)
                                       <li>
                                          <div class="ImageWrapper">
                                             <a href="">
                                             <img class="img-responsive" src="{{asset('img/recent-game')}}/{{$jeu->img_jeu}}" alt="">
                                             </a>
                                          </div>
                                          <h6><a title="" href="{{url('/jeux')}}">{{$jeu->name_jeu}}</a></h6>
                                          <span class="meta">
                                          <a href="#" title=""><i class="far fa-clock"></i> {{$jeu->sortie_jeu}}</a>
                                          <a href="#" title=""><i class="fa fa-user"></i> {{$jeu->composer_jeu}}</a>
                                          </span><br><!-- end meta -->
                                          <span class="rating clearfix">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          </span>
                                       </li>
                                       @endforeach()
                                    </ul>
                                 </div>
                              </div>
                              <div class="advert">
                                 <a href="/jeux" style="text-decoration: none">
                                    <h3>The Best Is Here</h3>
                                    <div class="advert-ban">
                                       <img src="{{asset('img/latest-blog/1.jpg')}}" alt="#">
                                       <div class="text-adver">Discover The Best</div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end news Section -->

      <section id="contact">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="contact-section">
                     <div class="left-contact">
                        <div class="social-icon">
                           <ul>
                              <li class="gp"><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                              <li class="fb"><a href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
                              <li class="be"><a href="#"><i class="fab fa-behance" aria-hidden="true"></i></a></li>
                              <li class="tw"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                              <li class="in"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                        <!-- <div class="map">
                          <div id="googleMap" style="width:100%;height:100%;"></div>
                        </div> -->
                        <div class="map">
                           <div class="gmap_canvas" style="width: 100%; height: 100%">
                              <iframe style="height: 100%; width: 100" id="gmap_canvas" src="https://maps.google.com/maps?q=casablanca%20ain%20chock&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                           </div>


                              <style>
                              .mapouter{
                                 position:relative;
                                 text-align:right;
                                 height:892px;
                                 width:404px;
                              }
                              .gmap_canvas {
                                 overflow:hidden;
                                 background:none!important;
                                 height:892px;
                                 width:404px;
                              }
                           </style>

                           
                           </div>
                     </div>
                     <form class="contact-form">
                        <div class="inner-section-form">
                           <h3>GET IN TOUCH WITH US</h3>
                           <form id="contact-form" method="post" action="contact.php" >
                              <div class="messages"></div>
                              <div class="controls">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="form_name">Firstname *</label>
                                          <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Firstname is required.">
                                          <div class="help-block with-errors"></div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="form_name">Lastname *</label>
                                          <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Firstname is required.">
                                          <div class="help-block with-errors"></div>
                                       </div>
                                    </div>

                                    </div>
                                 </div>
                              
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="form_message">Comment *</label>
                                          <textarea id="form_message" name="message" class="form-control" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                          <div class="help-block with-errors"></div>
                                       </div>
                                    </div>
                                    <div class="offset-md-8 col-md-4">
                                       <input type="submit" class="btn btn-warning btn-send" value="Take a Comment" style="width: 100%">
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end contact section --> 
     
  </body>

<?php echo View::make('layouts.footer'); ?>
    @endsection