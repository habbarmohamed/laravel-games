@extends('layouts.navDashboard')
@section('dashboard')


<main class="content">
	<h2 class="mb-4">Carousel Form</h2>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif


        

    <table class="table" id="myTable">
        <thead>

        <tr>

			<th scope="col">ID</th>
            <th scope="col">Cover</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Link</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col"></th>
        </tr>
        
    </thead>
     <tbody>

        @foreach($sliders as $slider)
        <tr>

        

            <td>{{ $slider->id_slider}}</td>
            <td><img height="70px" src="../../img/slider/{{$slider->img_slider}}" alt="" class="index_img"></td>
            <td>{{ $slider->title_slider}}</td>
            <td>{{ $slider->desc_slider}}</td>
            <td>{{ $slider->lien_slider}}</td>
            <td>{{ $slider->created_at->diffForHumans() }}</td>
            <td>{{ $slider->updated_at->diffForHumans() }}</td>

            
            <td>
                <a href="{{ route('slider.edit', $slider->id_slider)}}" class="btn btn-primary"><i class="far fa-edit"></i> Edit
                </a>
                <form action="{{ route('slider.destroy', $slider->id_slider ) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" class="delete" data-confirm="Are you sure to delete this item?"><i class="far fa-trash-alt"></i> Del</button>
                </form>
            </td>
            
        </tr>
        @endforeach

        
  </tbody>
</table>
        <a class="btn btn-default add mt-3" href="{{route('slider.create')}}"><i class="fas fa-plus"></i> Add Carousel</a>
            </main>

           


<?php echo View::make('layouts.footDashboard'); ?>
@endsection