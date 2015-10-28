@extends('template.app')



	@section('content')
		<div class="container">
			<h1>Atendimentos</h1>

			<a href="{{ route('atendimento.create') }}" class="btn btn-default">Novo atendimento</a>
			 <br />
			 <br />
			<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr>
					 <th>ID</th>
					 <th>Usuário</th>					 
					 <th>Assunto</th>
					 <th>Comentário</th>
					 <th>Status</th>					 
					 <th>Ação</th>					 
				</tr>
				</thead>
				<tbody>	
						
				@foreach($atendimento as $atend)

				<tr>
					<td>{{ $atend->id }}</td>
					<td>{{ $atend->usuario }}</td>					
					<td>{{ $atend->assunto }}</td>
					<td>{{ $atend->comentario }}</td>
					<td>{{ $atend->status }}</td>					
					<td>
						
					<a href="{{ route('atendimento.edit',['id'=>$atend->id]) }}" class="btn-sm btn-success">Editar</a>
					<a href="{{ route('atendimento.destroy',['id'=>$atend->id]) }}" class="btn-sm btn-danger">Remover</a

					</td>					
				</tr>
				@endforeach
				</tbody>
			</table>
		</div
	 @endsection