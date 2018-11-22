@extends('layouts.app')

@push('css')
@endpush

@section('content')

	<div class="container">
		<a href="{{ url('/home') }}" role="button" class="btn btn-primary" style="float: left">Voltar</a><br>
		<h2>Animes</h2>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Personagem principal</th>
						<th>Ano de lançamento</th>
						<th>Gênero</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Naruto</td>
						<td>Uzumaki, Naruto</td>
						<td>1997</td>
						<td>Shõnen</td>
					</tr>
					<tr>
						<td>Bleach</td>
						<td>Kurosaki, Ichigo</td>
						<td>2002</td>
						<td>Shõnen</td>
					</tr>
					<tr>
						<td>Dragon ball</td>
						<td>Som Goku</td>
						<td>1984</td>
						<td>Shõnen</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection
