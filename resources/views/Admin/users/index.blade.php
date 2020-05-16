@extends('layouts.navDashboard')
@section('dashboard')


<main class="content">
	<h2 class="mb-4">Users Form</h2>
    @if (session('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
		<div id="msg_delete"></div>
    	


    	
    	<!-- <div class="form-group col-lg-3 filter">
                <input type="text" id="myInput" class="form-control fil" placeholder="Search for Name" onkeyup="filter()"/>
                
            </div> -->
		


    <table class="table" id="myTable">
    	

        <thead>

        <tr>

			<th scope="col">ID User</th>
            <th scope="col">Cover</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Activate</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col"></th>
        </tr>
        
    </thead>
     <tbody>
		@if($users)

			@foreach($users as $user)
        <tr>

        

            <td>{{ $user->id }}</td>
            <td><a href="{{ route('users.edit', $user->id) }}">
            <img height="70px" src="{{asset('img/')}}/{{$user->photo_id}}" alt="" class="index_img"></a></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
            <td>{{ $user->created_at->diffForHumans()}}</td>
            <td>{{ $user->updated_at->diffForHumans() }}</td>


            
            <td>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary"><i class="far fa-edit"></i> Edit
                </a>
                <form action="{{ route('users.destroy', $user->id ) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" class="delete" onclick="confirmDelete();"><i class="far fa-trash-alt"></i> Del</button>
                </form>
            </td>
      
        </tr>
			@endforeach

        @endif


        
  </tbody>
</table>

        <a class="btn btn-default add mt-3" href="{{route('users.create')}}"><i class="fas fa-plus"></i> Add Users</a>

            </main>



    


<?php echo View::make('layouts.footDashboard'); ?>
@endsection
