  @extends('layouts.navDashboard')
  @section('dashboard')

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Add Game</h1>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                               
                                <div class="card-body">

                                    <form method="POST" action="{{route('jeux.store')}}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <label class="form-label">Name Of Game</label>
                                            <input type="text" class="form-control" placeholder="Enter the Name Of the Game" name="name_jeu" value="{{ old('name_jeu') }}">
                                        </div>
                                        {!! $errors->first('name_jeu', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">Version</label>
                                            <input type="text" class="form-control" placeholder="Version Of the Game" name="version_jeu" value="{{ old('version_jeu') }}">
                                        </div>
                                        {!! $errors->first('version_jeu', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">Price</label>
                                            <input type="text" class="form-control" placeholder="Enter the Price Of the Game" name="price_jeu" value="{{ old('price_jeu') }}">
                                        </div>
                                        {!! $errors->first('price_jeu', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">Kind</label>
                                            <input type="text" class="form-control" placeholder="Enter the Type Of the Game" name="genre_jeu">
                                        </div> 
                                        {!! $errors->first('genre_jeu', '<p class="help-block help">:message</p>') !!}


                                        <div class="form-group">
                                            <label class="form-label">Composer</label>
                                            <input type="text" class="form-control" placeholder="Composer Of the Game" name="composer_jeu" value="{{ old('composer_jeu') }}">
                                        </div>
                                        {!! $errors->first('composer_jeu', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">Rewards</label>
                                            <input type="text" class="form-control" placeholder="Rewards Of the Game" name="rewards_jeu" value="{{ old('rewards_jeu') }}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Trailer</label>
                                            <input type="text" class="form-control" placeholder="Trailer Of the Game" name="trailer" value="{{ old('trailer') }}">
                                        </div>
                                        {!! $errors->first('trailer', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">  
                                            <label class="form-label">Rating</label>
                                            <select class="browser-default custom-select" name="n_rate" value="{{ old('n_rate') }}"> 
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                    <option value="2">2</option><option value="2.5">2.5</option>
                                                    <option value="3">3</option>
                                                    <option value="3.5">3.5</option>
                                                    <option value="4">4</option>
                                                    <option value="4.5">4.5</option>
                                                    <option value="5">5</option>
                                            </select>
                                        </div>
                                        {!! $errors->first('n_rate', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" placeholder="Enter Description Of the Game" rows="3" name="desc_jeu" value="{{ old('desc_jeu') }}"></textarea>
                                        </div>
                                        {!! $errors->first('desc_jeu', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">Exit</label>
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='date' class="form-control" name="sortie_jeu" />
                                            
                                            
                                            </div>
                                        </div>
                                        {!! $errors->first('sortie_jeu', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="form-label w-100">Couverture image</label>
                                            <input type="file" name="img_jeu" value="{{ old('img_jeu') }}">
                                            <small class="form-text text-muted">Example block-level help text here.</small>
                                        </div>
                                        {!! $errors->first('img_jeu', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">ID Category</label>
                                            <select class="browser-default custom-select" name="id_category">
                                            <option selected disabled="disabled">Open this select menu</option>
                                    @foreach($cats as $cat)
                                        <option value="{{$cat->id_cat}}">{{$cat->name_cat}}</option>
                                    @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" required="required">
              <span class="custom-control-label">Check me out</span>
            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success text-center" name="save"><i class="fas fa-plus"></i> ADD Game</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       

                        

                        
            </main>

           
<?php echo View::make('layouts.footDashboard'); ?>

@endsection