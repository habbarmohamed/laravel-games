  @extends('layouts.navbar')
  @section('content')
 

  <?php $pageName = 'Home'; ?> 
   

<!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel text-center">

            @foreach($sliders as $slider)
                    
            <div class="hs-item set-bg" data-setbg="img/slider/{{$slider->img_slider}}">
                <div class="hs-text text-center">
                    <div class="container">
                        <h2 class="title_slider">{{ $slider->title_slider}}
                        </h2>
                        <div class="text">
                        <p>{{ $slider->desc_slider}}</p>

                         </div>   
                        <a href="#" class="site-btn ">
                            <i class="fas fa-angle-double-down iconbtn"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Hero section end -->


    


    <!-- Feature section -->
    <section class="feature-section spad wow bounceInUp">
        <div class="container-fluid">
            <div class="row">
                @foreach($lastjeu as $jeu)
                        
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="feature-item set-bg" data-setbg="img/recent-game/{{$jeu->img_jeu}}">
                        <span class="cata new" style="background-color:{{$jeu->category()->first()->color_cat}} !important">
                            {{$jeu->category()->first()->name_cat}}
                        </span>
                        <div class="fi-content text-white">
                            <h6><a href="{{route('games', $jeu->id_jeu)}}">Suspendisse ut ipsum tem justo por, maquillage</a></h6>
                            <p>{{substr($jeu->desc_jeu, 0, 60)}}...</p>
                            <a href="#" class="fi-comment">3 Commentaire</a>
                            


                        </div>
                    </div>
                </div>
                       
                @endforeach
                
                
            </div>
        </div>
    </section>
    <!-- Feature section end -->
    

   


    <!-- Recent game section  -->
    <section class="recent-game-section spad set-bg fix" data-setbg="img/recent-game-bg.png">
        <div class="container">
            <div class="section-title">
                <div class="cata new">New</div>
                <h2>Recent Game</h2>
            </div>
            <div class="row wow bounceInRight" data-wow-duration="2s" data-wow-delay=".3s"">
                @foreach($jeux as $jeu)
                @if($loop->index < 3 )
                <div class="col-lg-4 col-md-6 ">
                    <a href="{{ route('games', $jeu->id_jeu)}}" style="text-decoration: none">
                    <div class="recent-game-item shadow">
                        <div class="rgi-thumb set-bg" data-setbg="{{asset('img/recent-game/')}}/{{$jeu->img_jeu}}">
                            <div class="cata new" style="background-color: {{$jeu->category()->first()->color_cat}} !important">
                                {{$jeu->category()->first()->name_cat}}</div>
                            <!-- {{ App\Category::where('id_cat',$jeu->id_cat)->first()->name_cat }}</ -->
                        </div>
                        <div class="rgi-content">
                            <h5 class="animate-h5">{{$jeu->name_jeu}}</h5>
                            <p>{{$jeu->desc_jeu}}</p>
                            <a href="#" class="comment">3 Comments</a>
                            <div class="rgi-extra" style="background-color: {{$jeu->category()->first()->color_cat}} !important">    
                            </div>
                        </div>
                    </div> 
                    </a> 
                </div>
                @endif
                    @endforeach

             
            </div>
        </div>
    </section>
    <!-- Recent game section end -->


    <!-- Tournaments section -->
    <section class="tournaments-section spad wow fadeIn" data-wow-duration="2s">
        <div class="container">
            <div class="tournament-title">Tournament</div>
            <div class="row">

                @foreach($tournois as $tournoi)
               
                <div class="col-md-6 mb-4">
                    <a href="" onclick="showInfoModal({{$tournoi->id_tour}});" style="text-decoration: none" data-toggle="modal" data-target="#myTour">
                    <div class="tournament-item mb-4 mb-lg-0">
                        <div class="ti-notic">{{$tournoi->type_tour}}</div>
                        <div class="ti-content">
                            
                            <div class="ti-thumb set-bg" id="modal_img{{$tournoi->id_tour}}" data-setbg="{{asset('img/tournament')}}/{{$tournoi->img_tour}}"></div>
                            <div class="ti-text">
                                <h4 id="modal_title{{$tournoi->id_tour}}">{{$tournoi->title_tour}}</h4>
                                <ul>
                                    <li><span>Début du tournoi: </span> <span id="modal_debut{{$tournoi->id_tour}}" > {{$tournoi->start_tour}}</span></li>
                                    <li><span>Fin du tournoi:</span> {{$tournoi->end_tour}}</li>
                                    <li><span>Participants:</span> 10 equipe</li>
                                    <li><span>Auteur du tournoi:</span> {{$tournoi->author_tour}}</li>
                                </ul>
                                <p><span>Prix :</span> 1ère place <span  id="modal_price{{$tournoi->id_tour}}" >{{ $tournoi->price_tour}}$</span>, 2ème place: 1000 $, 3ème place: 500 $</p>
                            </div>
                        </div>
                   
                    </div>
                </a>
                </div>
                
                 @endforeach
                 
            </div>
        </div>
    </section>
    <!-- Tournaments section bg -->


    <!-- Review section -->
    <section class="review-section spad set-bg" data-setbg="img/review-bg.png">
        <div class="container">
            <div class="section-title">
                <div class="cata new">New</div>
                <h2>Best Games</h2>
            </div>
            <div class="row">
                @foreach($bestjeu as $jeu)
                <div class="col-lg-3 col-md-6 p-2 wow zoomIn" data-wow-delay="0.5s">
                   <a href="{{ route('games', $jeu->id_jeu)}}" style="text-decoration: none">
                    <div class="review-item shadow">
                        <div class="review-cover set-bg" data-setbg="../../img/recent-game/{{$jeu->img_jeu}}">
                            <div class="score yellow">{{$jeu->n_rate}}</div>
                        </div>
                        <div class="review-text" style="padding-bottom: 5em;overflow: hidden;">
                            <h5>{{$jeu->name_jeu}}</h5>
                            <p>{{substr($jeu->desc_jeu, 0, 230)}}...</p>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
                
              
                
            </div>
        </div>
    </section>

    <!-- social media -->
    <div class="container">
        <div class="row">
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

    <div class="spacer"></div>
    <!-- Review section end -->


    <!-- Footer top section -->
    <section class="footer-top-section">
        <div class="container">
            <div class="footer-top-bg wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
             
                <img src="img/pubg.png" class="footer-img" style="
                width: 45%;">

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-logo text-white">
                        <img src="img/logog.png" STYLE="transform: translateY(-100PX)"  alt="">
                        
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
                </div>
                </div>
                
    </section>

    







                    <!-- Modal Tournament -->

<div id="myTour" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

     
                
        <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
                <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">CONDITION OF PARTICIPATION</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">×</span>
                    </button>
                </div>

        <!--Body-->
                <div class="modal-body">
                    <div class="container">
                        <div class="text-center">
                            <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                            <h4 id="modal_title" style="padding-bottom: 1em"></h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <p class="line-sp"><b>Equipment : </b>This tournament is exclusively on computer, any team must be composed of 5 players (1 possible substitute).</p>

                                <p class="line-sp"><b>Age : </b>minimum 12 years (minors must provide signed parental authorization). </p>

                                <p class="line-sp"><b>Admission price : </b><span id="modal_price"></span> by team.  </p>

                                <p class="line-sp"><b>Validation of team participation: </b> Tickets are sold by team. The team must have taken their ticket at the latest for the <span id="modal_debut" ></span>.</p>

                            </div>
                        <div class="col-lg-5">
                            <div class="height-img" style="height: 14em; padding: 5px;">
                                <img id="modal_img" src="" class="img_fluid" style="height: 100%; width: 100%">
                            </div>
                        </div>

                    </div>
                </div>

                </div>

        <!--Footer-->
                <div class="modal-footer">
                    <a type="button" class="btn btn-info waves-effect waves-light" href="{{url('participate')}}">Participate now
                        <i class="far fa-gem ml-1"></i>
                    </a>
                    <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No, thanks</a>
                </div>
            </div>
      <!--/.Content-->
    </div>
            </div>
            </div>


   





    </div>
</div>



                    <!-- End Modal Tournament -->


    <!-- Footer top section end -->
    <?php echo View::make('layouts.footer'); ?>

    @endsection

