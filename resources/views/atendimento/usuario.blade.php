@extends('template.app')



	@section('content')


		@foreach($usuarios as $usuario)
			<li>{{ $usuario->username }} - {{ $usuario->firstname }} - {{ $usuario->lastname }}</li>
		@endforeach		
		

	 @endsection