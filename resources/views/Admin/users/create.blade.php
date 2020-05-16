  @extends('layouts.navDashboard')
  @section('dashboard')


            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Add User</h1>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                               
                                <div class="card-body">

                                    <form method="POST" action="{{route('users.store')}}">
                                        @csrf
                                    
                                        <div class="form-group">
                                            <label class="form-label">ID User</label>
                                            <input type="text" class="form-control" placeholder="Enter the Title Of the Carousel" name="id">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" placeholder="Enter the name" name="name" value="{{ old('name') }}">
                                        </div>
                                        {!! $errors->first('name', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="Enter the Email" name="email" value="{{ old('email') }}" >
                                        </div>
                                        {!! $errors->first('email', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" placeholder="Enter the Password" name="password" value="{{ old('password') }}">
                                        </div>
                                        {!! $errors->first('password', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="form-label">Activate</label>
                                            <select class="browser-default custom-select" name="is_active" value="{{ old('is_active') }}">
                                                    <option selected disabled="disabled">Open this select menu</option>
                                                    <option value="0">Not Active</option>
                                                    <option value="1">Active</option>
                                                    
                                            </select>
                                        </div>
                                        {!! $errors->first('is_active', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="form-label w-100">Couverture image</label>
                                            <input type="file" name="photo_id" value="{{ old('photo_id') }}">
                                            <small class="form-text text-muted">Example block-level help text here.</small>
                                        </div>
                                        {!! $errors->first('photo_id', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" required="required">
              <span class="custom-control-label" >Check me out</span>
            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i> Add Users</button>
                                    </form>

                    

                                </div>
                            </div>
                        </div>
                       

                        

                        
            </main>

            
<?php echo View::make('layouts.footDashboard'); ?>

@endsection