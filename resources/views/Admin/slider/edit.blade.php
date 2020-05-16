  @extends('layouts.navDashboard')
  @section('dashboard')


            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Edit Carousel</h1>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                               
                                <div class="card-body">

                                    <form method="POST" action="{{route('slider.update', $slider->id_slider)}}">
                                        @csrf
                                        @method('PUT')
                                        
                                        <div class="form-group">
                                            <label class="form-label">Title Of Carousel</label>
                                            <input type="text" class="form-control" placeholder="Enter the Title Of the Carousel" name="title_slider" value="{{ $slider->title_slider }}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Link</label>
                                            <input type="text" class="form-control" placeholder="Enter the Link" name="lien_slider" value="{{ $slider->lien_slider }}">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" placeholder="Enter Description Of the Game" rows="3" name="desc_slider">{{ $slider->desc_slider }}</textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label w-100">Couverture image</label>
                                            <input type="file" name="img_carousel" value="{{$slider->img_carousel}}">
                                            <small class="form-text text-muted">Example block-level help text here.</small>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input">
              <span class="custom-control-label" required>Check me out</span>
            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success float-right"><i class="far fa-edit"></i> Update Carousel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       

                        

                        
            </main>

          
<?php echo View::make('layouts.footDashboard'); ?>

@endsection