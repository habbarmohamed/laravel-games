  @extends('layouts.navDashboard')
  @section('dashboard')


            <main class="content">
                <div class="container-fluid ">

                    <h1 class="h3 mb-3">Edit User</h1>

                    <div class="row">

                        <div class="col-lg-3">
                            <div class="card body_profile">
                               <!--  <div class="file_upload">
                                    <div class="upload_img">
                                        <img src="../../../img/{{$users->photo_id}}" alt="" value="{{$users->photo_id}}" height="100%">

                                        
                                    </div>
                                    
                                        
                                    
                                </div> -->
                        <form method="POST" action="{{ route('users.update', $users->id) }}">
                                @csrf
                                @method('PUT')

                                <div id="profile-container">
                                    <img id="profileImage" class="profile_image" src="{{asset('/img')}}/{{$users->photo_id}}" name="photo_id"  value="{{$users->photo_id}}"/>
                                    <span>Choose your Pic</span>
                                    
                                </div>

                                    <input id="imageUpload" class="overlay_file" type="file" name="photo_id" value="{{$users->photo_id}}" capture>

                                    <div class="name_profile text-center">{{$users->name}}
                                        <span>
                                            @if($users->is_active == 1)
                                                <img src="{{asset('img/verify.png')}}" alt="" width="20px" height="20px">
                 
                                            @else
                                            
                                            @endif
                                        </span>
                                    </div>
                                

                            </div>
                        </div>

                        <div class="col-lg-9 ">
                            <div class="card">
                               
                                <div class="card-body">           
                                        <div class="form-group">
                                            <label class="form-label">ID User</label>
                                            <input type="text" class="form-control" placeholder="Enter the Title Of the Carousel" name="id" value="{{$users->id}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" placeholder="Enter the Link" name="name" value="{{$users->name}}">
                                        </div>
                                        {!! $errors->first('name', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="Enter the Email" name="email" value="{{$users->email}}">
                                        </div>
                                        {!! $errors->first('email', '<p class="help-block help">:message</p>') !!}

                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" placeholder="Enter the Password" name="password" value="{{$users->password}}">
                                        </div>
                                        {!! $errors->first('password', '<p class="help-block help">:message</p>') !!}
                                        
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <br>
                                            <input type="text" class="form-control" id="status"  value="{{$users->is_active ? 'Active' : 'Not Active'}}" disabled>
                                            <select class="custom-select b-0" name="is_active" onchange="showStatus(event);">
                                                <option selected disabled="disabled" >Manage his Activate</option>
                                                <option value="0">Not Active</option>
                                                <option value="1">Active</option>


                                            </select>

                        </div>
                                        
                                        <!-- <div class="form-group">
                                            <label class="form-label w-100">Couverture image</label>
                                            <input type="file" name="photo_id" value="{{$users->photo_id}}">
                                            <small class="form-text text-muted">Example block-level help text here.</small>
                                        </div>
                                         -->
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input">
              <span class="custom-control-label" required>Check me out</span>
            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success float-right"><i class="far fa-edit"></i> Edit Users</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>
                       

                        

                        
            </main>
 <script>


    function showStatus(e) {
        document.getElementById("status").value = e.target.value;
    }
 </script>
            
<?php echo View::make('layouts.footDashboard'); ?>

@endsection