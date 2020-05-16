@extends('layouts.navDashboard')
@section('dashboard')


<main class="content">
	<h2 class="mb-4">Categories Form</h2>
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

			<th scope="col">ID Category</th>
            <th scope="col">Name Category</th>
            <th scope="col">Color Category</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col"></th>
        </tr>
        
    </thead>
     <tbody>

        @foreach($category as $categories)
        <tr>

        

            <td>{{ $categories->id_cat }}</td>
            <td>{{ $categories->name_cat }}</td>
            <td>{{ $categories->color_cat }}</td>
            <td>{{ $categories->created_at }}</td>
            <td>{{ $categories->updated_at }}</td>

            
            <td>
                <a href="{{ route('categories.edit', $categories->id_cat)}}" class="btn btn-primary"><i class="far fa-edit"></i> Edit
                </a>
                <form action="{{ route('categories.destroy', $categories->id_cat ) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" class="delete" onclick="confirmDelete();"><i class="far fa-trash-alt"></i> Del</button>
                </form>
            </td>
            
        </tr>
        @endforeach

        
  </tbody>
</table>
        <a class="btn btn-default add mt-3" href="{{route('categories.create')}}"><i class="fas fa-plus"></i> Add Category</a>
            </main>



<?php echo View::make('layouts.footDashboard'); ?>
@endsection