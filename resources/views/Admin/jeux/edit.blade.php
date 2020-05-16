  @extends('layouts.navDashboard')
  @section('dashboard')

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Edit Game</h1>

            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                               
                        <div class="card-body">

                            <form method="POST" action="{{route('jeux.update', $jeux->id_jeu)}}">
                                        @csrf
                                        @method('PUT')
                                        
                                <div class="form-group">
                                    <label class="form-label">Name Of Game</label>
                                    <input type="text" class="form-control" placeholder="Edit the Name Of the Game" name="name_jeu" required="required" value="{{ $jeux->name_jeu}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Version</label>
                                    <input type="text" class="form-control" placeholder="Version Of the Game" name="version_jeu" required="required" value="{{ $jeux->version_jeu}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Price</label>
                                    <input type="text" class="form-control" placeholder="Enter the Price Of the Game" name="price_jeu" required="required"value="{{ $jeux->price_jeu}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kind</label>
                                    <input type="text" class="form-control" placeholder="Enter the Type Of the Game" name="genre_jeu" value="{{ $jeux->genre_jeu}}">
                                </div> 
                                      

                                <div class="form-group">
                                    <label class="form-label">Composer</label>
                                    <input type="text" class="form-control" placeholder="Version Of the Game" name="composer_jeu" value="{{ $jeux->composer_jeu}}">
                                </div>
                                  

                                <div class="form-group">
                                    <label class="form-label">Rewards</label>
                                    <input type="text" class="form-control" placeholder="Version Of the Game" name="rewards_jeu" value="{{ $jeux->rewards_jeu}}">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Trailer</label>
                                    <input type="text" class="form-control" placeholder="Trailer Of the Game" name="trailer" value="{{ $jeux->trailer}}">
                                </div>
                            

                                <div class="form-group">  
                                    <label class="form-label">Rating</label>
                                    <select class="browser-default custom-select" name="n_rate" required="required" value="{{ $jeux->n_rate}}">

                                            <option selected value="{{ $jeux->n_rate}}"></option>
                                            <option value="1">1</option>
                                            <option value="1.5">1.5</option>
                                            <option value="2">2</option>
                                            <option value="2.5">2.5</option>
                                            <option value="3">3</option>
                                            <option value="3.5">3.5</option>
                                            <option value="4">4</option>
                                            <option value="4.5">4.5</option>
                                            <option value="5">5</option>

                                    </select>
                                </div>
                                        
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" placeholder="Enter Description Of the Game" rows="3" name="desc_jeu" required="required" >{{ $jeux->desc_jeu}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Sortie</label>
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='date' class="form-control" name="sortie_jeu" value="{{ $jeux->sortie_jeu}}"/>
                                            
                                            
                                    </div>
                                </div>
                                        
                                <div class="form-group">
                                    <label class="form-label w-100">Couverture image</label>
                                    <input type="file" name="img_jeu" value="{{ $jeux->img_jeu}}">
                                    <small class="form-text text-muted">Example block-level help text here.</small>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">ID Category</label>
                                    <select class="browser-default custom-select" name="id_cat">
                                        @foreach($cats as $cat)
                                        <option value="{{$cat->id_cat}}"  {{($jeux->id_cat == $cat->id_cat) ? 'selected="selected"' : '' }}" >{{$cat->name_cat}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Check me out</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success text-center" name="save"><i class="far fa-edit"></i> Update Game</button>
                            </form>
                        </div>
                    </div>
                </div>
                       

                        

                        
        </main>

          
<?php echo View::make('layouts.footDashboard'); ?>
@endsection