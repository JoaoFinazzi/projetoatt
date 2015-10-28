@extends('template.app')

@section('content')
	<div class="container">
		<h1>Novo Atendimento</h1>

		@if ($errors->any())
			<ul class="alert alert-warning">
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif

			{!! Form::open(['route'=>'atendimento.store']) !!}
			<!-- Nome Form Input -->

			 <div class="form-group">
				 {!! Form::label('usuario', 'Usuário:') !!}
				 {!! Form::text('usuario', null, ['class'=>'form-control']) !!}
{{-- 					<select id="usuario_id" usuario="usuario_id" class="form-control">
					    <option value="null">Selecione</option>

					    @foreach (App\Usuario::all() as $usuario)
					        <option value="{{ $usuario->id }}">{{ $usuario->firstname }}</option>
					    @endforeach

					</select> --}}			 
			 </div>

			 <div class="form-group">
				 {!! Form::label('assunto', 'Assunto:') !!}
				 {{-- {!! Form::text('assunto', null, ['class'=>'form-control']) !!} --}}
					<select id="assunto" assunto="assunto" class="form-control">
					    <option value="null">Selecione</option>

					    @foreach (App\Categoria_ped::all() as $assunto)
					        <option value="{{ $assunto->id }}">{{ $assunto->assunto_ped }}</option>
					    @endforeach

					</select>				 
			 </div>

			 <!-- Descricao Form Input -->

			 <div class="form-group">
				 {!! Form::label('comentario', 'Comentário:') !!}
				 {!! Form::textarea('comentario', null, ['class'=>'form-control']) !!}
			 </div>

			 <div class="form-group">
			 	{!! Form::submit('Criar atendimento', ['class'=>'btn btn-primary']) !!}
			 </div>

			 	{!! Form::close() !!}

	 </div>
 @endsection