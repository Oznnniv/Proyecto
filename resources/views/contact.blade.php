@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <h1>Página de contactos</h1>
    @csrf
		<input name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
		{!! $errors->first('name', '<small>:message</small><br>') !!}

		<input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
		{!! $errors->first('email', '<small>:message</small><br>') !!}

		<input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
		{!! $errors->first('subject', '<small>:message</small><br>') !!}

		<textarea name="content" placeholder="Mensaje...">{{ old('content') }}</textarea><br>
		{!! $errors->first('content', '<small>:message</small><br>') !!}

		<button>Enviar</button>
</head>
</html>
@endsection