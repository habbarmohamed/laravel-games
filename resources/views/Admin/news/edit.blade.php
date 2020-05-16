  @extends('layouts.navDashboard')
  @section('dashboard')


            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Edit News</h1>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                               
                                <div class="card-body">

                                    <form method="POST" action="{{route('news.update', $news->id_news)}}">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label class="form-label">Date News</label>
                                          <div class='input-group date' id='datetimepicker1'>
                                            <input type='date' class="form-control" name="date_news" value="{{ $news->date_news }}" />
                                            
                                             </span>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" placeholder="Enter Description Of the Game" rows="3" name="desc_news">{{ $news->desc_news }}</textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label w-100">Couverture image</label>
                                            <input type="file" name="img_news">
                                            <small class="form-text text-muted">Example block-level help text here.</small>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input">
              <span class="custom-control-label" required>Check me out</span>
            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success float-right"><i class="far fa-edit"></i> Update News</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       

                        

                        
            </main>

<?php echo View::make('layouts.footDashboard'); ?>

@endsection