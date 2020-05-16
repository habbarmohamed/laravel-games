@extends('layouts.navbar')
  @section('content')
  <div class="head-pubg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="background-pubg" data-setbg="{{$jeu->img_jeu}}">
					
				</div>
			</div>

			<div class="col-lg-6">
				<div class="infos-pubg">
					<h3>{{$jeu->name_jeu}}</h3>
					

					<table class="table">
						<tbody>
							<tr>

								<td><b>
								Name of game:
								</b></td>
								<td>{{$jeu->name_jeu}}</td>
								<td></td>
							</tr>
							<tr>

								<td><b>
								Version
								</b></td>
								<td>{{$jeu->n_rate}}</td>
								<td></td>
							</tr>

							<tr>
								<td><b>
								Sortie:
								</b></td>
								<td>{{$jeu->sortie_jeu}}</td>
								<td></td>
								
							</tr>

							<tr>
								<td><b>
								Genres:
								</b></td>
								<td>{{$jeu->genre_jeu}}</td>
								<td></td>
								
							</tr>
							<tr>
								<td><b>
								Compositeur:
								</b></td>
								<td>{{$jeu->composer_jeu}}</td>
								<td></td>
								
							</tr>
							<tr>
								<td><b>
								Récompenses
								</b></td>
								<td>{{$jeu->rewards_jeu}}</td>
								<td></td>
								
							</tr>
							<tr>
								<td><b>
								Systéme
								</b></td>
								<td>Mac OS, Windows</td>
								<td></td>
								
							</tr>

							<tr>
								<td><b>
								Price</b></td>
								<td>
								
								</td>
								<td><span class="price"><b>{{$jeu->price_jeu}}</b></span></td>
								
								
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="container">
		<div class="description-pubg">
		<div class="row justify-content-md-center">
		<div class="col-lg-8">
			<label>Description</label>
			<p>
				{{$jeu->desc_jeu}}
			</p>
		</div>
		<div class="row">
		<div class="col-lg-8">
			<label class="text-center">Systéme De Jeu</label>
			<p>
				Parachuté d'un avion cargo militaire sans aucun équipement, le joueur doit affronter 99 autres joueurs sur un terrain inscrit dans une carte carrée avec pour but d'être le dernier survivant. Sitôt arrivé au sol, le joueur doit trouver le plus rapidement possible des armes, des munitions et de l'équipement pour atteindre son objectif3. Il peut également trouver des trousses de soin, ou encore des bidons d'essence destinés à alimenter des véhicules qu'il pourra utiliser pour se déplacer plus rapidement sur le terrain. Des loots sont parachutés à chaque nouvelle zone, à l’intérieur de la zone de survie. Les loots contiennent des armes très rares, des tenues de camouflages, etc. Une zone mortelle apparaît de façon aléatoire au bout de 5 minutes de jeu, sous la forme d'un disque en dehors duquel tout joueur subit des dégâts réguliers. Le disque rétrécit de plus en plus, forçant ainsi les joueurs à se rapprocher les uns les autres du centre de la zone encore libre, et donc à s’affronter. Chaque partie dure un maximum de 30 minutes, durant laquelle la zone se réduit rapidement à une toute petite portion de terrain au fur et à mesure des éliminations, jusqu’au duel final et à la victoire du dernier joueur4,5.

				Chaque action en jeu, comme toucher, sonner ou tuer un adversaire, ainsi que le classement final, rapportent de la monnaie en jeu qui permet d'acheter des habits et des accessoires pour améliorer l'apparence du personnage. Un bonus est accordé aux dix derniers survivants, ainsi qu'une dotation plus substantielle pour le vainqueur.

				
			</p>
		</div>
		<div class="col-lg-4">
			<div class="sys-jeu">
				
			</div>
			<div class="text-center rate">
				<span class="fa fa-star checkedstar"></span>
				<span class="fa fa-star checkedstar"></span>
				<span class="fa fa-star checkedstar"></span>
				<span class="fa fa-star checkedstar"></span>
				<span class="fa fa-star"></span>
			</div>
		</div>
		</div>
	</div>
	</div>
	</div>



<div class="associes">
	<div class="container">
		<div class="row">
		   <div class="col-lg-8">
			<h3>Recherches Associees</h3>
			<div class="row">
				<div class="col">
				<a href="#">
					<img src="../img/callofduty.jpg" >
					<b>
						<a href="#">CALL OF DUTY</a>
					</b>
				</a>
				</div>
				<div class="col">
				<a href="#">
					<img src="../img/freefire.jpg" >
					<b>
						<a href="#">FREE FIRE</a>
					</b>
				</a>
				</div>
				<div class="col">
				<a href="#">
					<img src="../img/callofduty.jpg">
					<b>
						<a href="#">CALL OF DUTY</a>
					</b>
				</a>
				</div>
				<div class="col">
				<a href="#">
					<img src="../img/freefire.jpg" >
					<b>
						<a href="#">FRRE FIRE</a>
					</b>
				</a>
				</div>
			</div>
		</div>
		
			
		
		</div>
	</div>
</div>


<!-- Footer top section end -->
    <?php echo View::make('layouts.footer'); ?>
    @endsection