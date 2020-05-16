  @extends('layouts.navDashboard')
  @section('dashboard')


            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Add News</h1>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                               
                                <div class="card-body">

                                    <form method="POST" action="{{route('news.store')}}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <label class="form-label">Date News</label>
                                            <div class='input-group date' id='datetimepicker1'>
                                            <input type='date' class="form-control" name="date_news" value="{{ old('date_news') }}"/>
                                            </div>
                                        </div>
                                        {!! $errors->first('date_news', '<p class="help-block help">:message</p>') !!}
                                        
                                        
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" placeholder="Enter Description Of the Game" rows="3" name="desc_news" value="{{ old('desc_news') }}"></textarea>
                                        </div>
                                        {!! $errors->first('desc_news', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="form-label w-100">Couverture image</label>
                                            <input type="file" name="img_news" value="{{ old('img_news') }}">
                                            <small class="form-text text-muted">Example block-level help text here.</small>
                                        </div>
                                        {!! $errors->first('img_news', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" required="required">
              <span class="custom-control-label">Check me out</span>
            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i> Add News</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       

                        

                        
            </main>

            
<?php echo View::make('layouts.footDashboard'); ?>

@endsection