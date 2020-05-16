@extends('layouts.navDashboard')
@section('dashboard')


<main class="content">
	<h2 class="mb-4">News Form</h2>
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

			<th scope="col">ID News</th>
            <th scope="col">Cover</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
        </tr>
        
    </thead>
     <tbody>

        @foreach($news as $new)
        <tr>

        

            <td>{{ $new->id_news }}</td>
            <td width="100"><img height="70px" src="../../img/latest-blog/{{$new->img_news}}" alt="" class="index_img"></td>
            <td>{{substr($new->desc_news ,0,250) }}...</td>
            <td>{{ $new->date_news }}</td>
            

            
            <td>
                <a href="{{ route('news.edit', $new->id_news) }}" class="btn btn-primary"><i class="far fa-edit"></i> Edit
                </a>
                <form action="{{ route('news.destroy', $new->id_news ) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" class="delete" data-confirm="Are you sure to delete this item?"><i class="far fa-trash-alt"></i> Del</button>
                </form>
            </td>
        
        </tr>
        @endforeach

        
  </tbody>
</table>
        <a class="btn btn-default add mt-3" href="{{route('news.create')}}"><i class="fas fa-plus"></i> Add News</a>
            </main>


<?php echo View::make('layouts.footDashboard'); ?>

@endsection