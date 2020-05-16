  @extends('layouts.navDashboard')
  @section('dashboard')


            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Edit Category</h1>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                               
                                <div class="card-body">

                                    <form method="POST" action="{{ route('categories.update', $category->id_cat) }}">
                                        @csrf
                                        @method('PUT')
                                        
                                        <div class="form-group">
                                            <label class="form-label">ID Category</label>
                                            <input type="text" class="form-control" placeholder="Edit ID" name="id" value="{{$category->id_cat}}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Name Of Category</label>
                                            <input type="text" class="form-control" placeholder="Edit Name" name="name_cat" value="{{$category->name_cat}}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Color Of Category</label>
                                            <input type="text" class="form-control" placeholder="Edit Color" name="color_cat" value="{{$category->color_cat}}">
                                        </div>


                                        
                                        
                                        
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label" required>Check me out</span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success float-right"><i class="far fa-edit"></i> Update Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       

                        

                        
            </main>

            
<?php echo View::make('layouts.footDashboard'); ?>
@endsection