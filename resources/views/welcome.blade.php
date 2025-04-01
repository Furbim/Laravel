@extends('layouts.admin')

@section('content')

<h1>Hello World!</h1>
<a href="{{ route('user.create') }}">Cadastrar</a>

@endsection