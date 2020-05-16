  @extends('layouts.navDashboard')
  @section('dashboard')


            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Add Category</h1>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                               
                                <div class="card-body">

                                    <form method="POST" action="{{route('categories.store')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label">ID Category</label>
                                            <select class="browser-default custom-select" name="id_cat">
                                            
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label">Name Of Category</label>
                                            <input type="text" class="form-control" placeholder="Name Of Category" name="name_cat" value="{{ old('name_cat') }}">
                                        </div>
                                        {!! $errors->first('name_cat', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">Color Of Category</label>
                                            <input type="text" class="form-control" placeholder="Name Of Category" name="color_cat" value="{{ old('color_cat') }}">
                                        </div>
                                        {!! $errors->first('color_cat', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" required="required"> 
              <span class="custom-control-label">Check me out</span>
            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i> Add Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       

                        

                        
            </main>

            
<?php echo View::make('layouts.footDashboard'); ?>

@endsection