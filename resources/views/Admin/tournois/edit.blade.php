  @extends('layouts.navDashboard')
  @section('dashboard')


            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Edit Tournament</h1>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                               
                                <div class="card-body">

                                    <form method="POST" action="{{route('tournois.update', $tournois->id_tour)}}">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label class="form-label">Type Of Tournament</label>
                                            <input type="text" class="form-control" placeholder="Enter the Type Of the Tournament" name="type_tour" value="{{ $tournois->type_tour }}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Title Of Tournament</label>
                                            <input type="text" class="form-control" placeholder="Enter the Title Of the Tournament" name="title_tour" value="{{ $tournois->title_tour }}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Writer Of Tournament</label>
                                            <input type="text" class="form-control" placeholder="Enter the Writer Of the Tournament" name="author_tour" value="{{ $tournois->author_tour }}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Price</label>
                                            <input type="text" class="form-control" placeholder="Enter the Price Of the Tournament" name="price_tour" value="{{ $tournois->price_tour }}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Start Tournament</label>
                                          <div class='input-group date' id='datetimepicker1'>
                                            <input type='date' class="form-control" name="start_tour" value="{{ $tournois-> start_tour }}" />
                                            
                                             </span>
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">End Tournament</label>
                                          <div class='input-group date' id='datetimepicker1'>
                                            <input type='date' class="form-control" name="end_tour" value="{{ $tournois->end_tour }}" />
                                            
                                             </span>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="form-label w-100">Couverture image</label>
                                            <input type="file"  name="img_tour">
                                            <small class="form-text text-muted">Example block-level help text here.</small>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input">
              <span class="custom-control-label">Check me out</span>
            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success float-right"><i class="far fa-edit"></i> Update Tournament</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       

                        

                        
            </main>

<?php echo View::make('layouts.footDashboard'); ?>

@endsection