@extends('layouts.admin')

@section('content')
    <header class="header">
        <div class="content-header text-white">
            <h2 class="title-logo"><a href="{{ route('dashboard') }}">Maxsin</a></h2>
            <ul class="list-nav-links">
                <li><a href="#" class="nav-link">Usuários</a></li>
                <li><a href="{{ route('dashboard') }}" class="nav-link">Sair</a></li>
            </ul>
            <a href="#" class="button">Listar</a>
        </div>

    </header>
    <div class="content">

        <x-alert></x-alert>


        <form action="{{ route('user.store') }}" method="post" class="form-container">
            @csrf
            <div class="content-box mb-10">
                <h1 class="text-5xl">CADASTRO</h1>
            </div>
            <div class="input-box">
                <label for="name" class="mb-3">Nome:</label>
                <input type="text" name="name" id="name" placeholder="Nome Completo" class="input" value="{{ old('name') }}"
                    >
            </div>

            <div class="input-box">
                <label for="email" class="mb-3">Email:</label>
                <input type="email" name="email" id="email" placeholder="email@exemplo.com" class="input"
                    value=" {{ old('email') }}" >
            </div>

            <div class="input-box">
                <label for="password" class="mb-3">Senha:</label>
                <input type="password" name="password" id="password" placeholder="Senha com no mínimo 6 carcateres"
                    value="{{ old(key: 'password') }}" class="input" >
            </div>
            <div class="content-box">
                <input type="submit" value="Cadastrar" class="button">
            </div>
            <div class="content-box mt-5">
                <a href="{{ route('user.entrar') }}">Já tem cadastro? Faça Login</a>
            </div>
        </form>
    </div>
@endsection