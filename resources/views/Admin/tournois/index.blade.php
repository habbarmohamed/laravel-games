@extends('layouts.navDashboard')
@section('dashboard')


<main class="content">
	<h2 class="mb-4">Tournament Form</h2>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif

    <div id="msg_delete"></div>

      
       

    <table class="table" id="myTable">
        <thead>

        <tr>

			<th scope="col">ID</th>
            <th scope="col">Cover</th>
            <th scope="col">Title</th>
            <th scope="col">Type</th>
            <th scope="col">Author</th>
            <th scope="col">Start</th>
            <th scope="col">End</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
        </tr>
        
    </thead>
     <tbody>
        
        @foreach($tournois as $tournoi)

        <tr>

        

            <td>{{ $tournoi-> id_tour}}</td>
            <td><img height="70px" src="../../img/tournament/{{$tournoi->img_tour}}" alt="" class="index_img"></td>
            <td>{{ $tournoi-> title_tour}}</td>
            <td>{{ $tournoi-> type_tour}}</td>
            <td>{{ $tournoi-> author_tour}}</td>
            <td>{{ $tournoi-> start_tour}}</td>
            <td>{{ $tournoi-> end_tour}}</td>
            <td>{{ $tournoi-> price_tour}}</td>
            
            <td>
                <a href="{{ route('tournois.edit', $tournoi->id_tour)}}" class="btn btn-primary"><i class="far fa-edit"></i> Edit
                </a>
                <form action="{{ route('tournois.destroy', $tournoi->id_tour ) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i> Del</button>
                </form>
            </td>
            
        </tr>
        @endforeach

        
  </tbody>
</table>
        <a class="btn btn-default add mt-3" href="{{route('tournois.create')}}"><i class="fas fa-plus"></i> Add Tournament</a>
            </main>




<?php echo View::make('layouts.footDashboard'); ?>
@endsection