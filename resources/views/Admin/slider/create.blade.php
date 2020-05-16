  @extends('layouts.navDashboard')
  @section('dashboard')


            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Add Carousel</h1>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                               
                                <div class="card-body">

                                    <form method="POST" action="{{route('slider.store')}}">
                                        @csrf
                                        
                                        
                                        <div class="form-group">
                                            <label class="form-label">Title Of Carousel</label>
                                            <input type="text" class="form-control" placeholder="Enter the Title Of the Carousel" name="title_slider" value="{{ old('title_slider') }}">
                                        </div>
                                        {!! $errors->first('title_slider', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">Link</label>
                                            <input type="text" class="form-control" placeholder="Enter the Link" name="lien_slider" value="{{ old('lien_slider') }}">
                                        </div>
                                        {!! $errors->first('lien_slider', '<p class="help-block help">:message</p>') !!}
                                        
                                        
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" placeholder="Enter Description Of the Game" rows="3" name="desc_slider" value="{{ old('desc_slider') }}"></textarea>
                                        </div>
                                        {!! $errors->first('desc_slider', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="form-label w-100">Couverture image</label>
                                            <input type="file" name="img_slider" value="{{ old('img_slider') }}">
                                            <small class="form-text text-muted">Example block-level help text here.</small>
                                        </div>
                                        {!! $errors->first('img_slider', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" required="required">
              <span class="custom-control-label">Check me out</span>
            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i> Add Carousel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       

                        

                        
            </main>

           
<?php echo View::make('layouts.footDashboard'); ?>

@endsection