@extends('layouts.app')

@push('css')
<style>
	.dv {
		text-align: center;
		font-size: 25px;
	}
</style>
@endpush

@section('content')
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Tabelas aleatórias</h1>
			<p class="lead">Seja bem vindo!</p>
		</div>
	</div>
	<div class="dv">
		@hasanyrole($collectionOfRoles)
			<a href="{{ url('/jogos') }}"><span class="label label-primary">Jogos</span></a>
			<a href="{{ url('/animes') }}"><span class="label label-primary">Animes</span></a>
		@endhasanyrole

		@role('admin')
			<a href="{{ url('/nomes') }}"><span class="label label-primary">Nomes</span></a>
		@endrole
	</div>
@endsection
