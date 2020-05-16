@extends('layouts.navDashboard')
@section('dashboard')


<main class="content">
	<h2 class="mb-4">Game Form</h2>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif

    @if (\Session::has('message'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('message') !!}</li>
        </ul>
    </div>
    @endif

    
                
            


<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
        
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Cover</th>
            <th scope="col">Name</th>
            <th scope="col">Version</th>
            <th scope="col">Kind</th>
            <th scope="col">Price</th>
            <th scope="col">Rating</th>
            <th scope="col">Description</th>
            <th scope="col">Composer</th>
            <th scope="col">Exit</th>
            <th scope="col"></th>
        </tr>

        
    </thead>
     <tbody>

        @foreach($jeux as $jeu)
        <tr>

        

            <td>{{ $jeu->id_jeu }}</td>
            <td style="width: 100px"><img height="70px" src="../../img/recent-game/{{$jeu->img_jeu}}" alt="" class="index_img"></td>
            <td>{{ $jeu->name_jeu }}</td>
            <td>{{ $jeu->version_jeu }}</td>
            <td>{{ $jeu->genre_jeu }}</td>
            <td>{{ $jeu->price_jeu }}</td>
            <td>{{ $jeu->n_rate }}</td>
            <td>{{substr($jeu->desc_jeu, 0, 30)}}...</td>
            <td>{{ $jeu->composer_jeu }}</td>
            <td>{{ $jeu->sortie_jeu }}</td>

            
            <td>
                <a href="{{ route('jeux.edit', $jeu->id_jeu)}}" class="btn btn-primary" style="padding: 0 !important;width: 3em !important;"><i class="far fa-edit" ></i>
                </a>
                <form action="{{ route('jeux.destroy', $jeu->id_jeu ) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger p-0 mt-1" type="submit" class="delete" data-confirm="Are you sure to delete this item?" style="width: 3em;"><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
            
        </tr>
        @endforeach

        
  </tbody>
</table>
</div>
        <a class="btn btn-default add mt-3" href="{{route('jeux.create')}}"><i class="fas fa-plus"></i> Add Game</a>
            </main>


<?php echo View::make('layouts.footDashboard'); ?>

@endsection