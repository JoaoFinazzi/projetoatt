@extends('template.app')

@section('content')
	<div class="container">
		<h1>Editar Atendimento: {{$atendimento->usuario}}</h1>

		@if ($errors->any())
			<ul class="alert alert-warning">
		 		@foreach($errors->all() as $error)
				 	<li>{{ $error }}</li>
				 @endforeach
	 		</ul>
	 	@endif

	 	{!! Form::open(['route'=>['atendimento.update', $atendimento->id], 'method'=>'put']) !!}

	 	<!-- Usuario Form Input -->

		 <div class="form-group">
			 {!! Form::label('usuario', 'Usuário:') !!}
			 {!! Form::text('usuario', $atendimento->usuario, ['class'=>'form-control']) !!}
		 </div>

	 	<!-- Assunto Form Input -->

		 <div class="form-group">
			 {!! Form::label('assunto', 'Assunto:') !!}
			 {!! Form::text('assunto', $atendimento->assunto, ['class'=>'form-control']) !!}
		 </div>

		 <!-- Comentario Form Input -->

		 <div class="form-group">
			 {!! Form::label('comentario', 'Comentário:') !!}
			 {!! Form::textarea('comentario', $atendimento->comentario, ['class'=>'form-control']) !!}
		 </div>

		 <div class="form-group">
		 	{!! Form::submit('Salvar Atendimento', ['class'=>'btn btn-primary']) !!}
		 </div>

		 	{!! Form::close() !!}

		 </div>
 @endsection