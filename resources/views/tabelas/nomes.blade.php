@extends('layouts.app')

@push('css')
@endpush

@section('content')

	<div class="container">
		<a href="{{ url('/home') }}" role="button" class="btn btn-primary" style="float: left">Voltar</a><br>
		<h2>Nomes</h2>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Profissão</th>
						<th>Telefone</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Diego Feitosa de Oliveira</td>
						<td>Programador Júnior</td>
						<td>(99) 99999-9999</td>
						<td>teste@example.com.br</td>
					</tr>
					<tr>
						<td>Carol</td>
						<td>Design</td>
						<td>(99) 99999-9999</td>
						<td>teste@example.com.br</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection
