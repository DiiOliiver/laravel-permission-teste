@extends('layouts.app')

@push('css')
@endpush

@section('content')

	<div class="container">
		<a href="{{ url('/home') }}" role="button" class="btn btn-primary" style="float: left">Voltar</a><br>
		<h2>Jogos</h2>
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
						<td>Rezidente evil 1</td>
						<td>Jill Valentine</td>
						<td>1996</td>
						<td>Terror</td>
					</tr>
					<tr>
						<td>Metroid</td>
						<td>Samus Aran</td>
						<td>1986</td>
						<td>Ação</td>
					</tr>
					<tr>
						<td>Mega Man</td>
						<td>Maga man</td>
						<td>1987</td>
						<td>Ação</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection
