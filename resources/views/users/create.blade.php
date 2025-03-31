<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])

    <title>Cadastro</title>
</head>


<body class="main-container">
    <header class="header">
        <div class="content-header text-white">
            <h2 class="title-logo"><a href="{{ route('dashboard') }}">Maxsin</a></h2>
            <ul class="list-nav-links">
            <li><a href="#" class="nav-link">Usuários</a></li>
            <li><a href="{{ route('dashboard') }}" class="nav-link">Sair</a></li>
            </ul>
        </div>

    </header>

    <form action="{{ route('user.store') }}" method="post"
        class="w-[500px] text-stone-50 p-10 border-gray-400 border-2 rounded-2xl">
        @csrf
        <div class="content-box mb-10">
            <h1 class="text-5xl">CADASTRO</h1>
        </div>
        <div class="input-box">
            <label for="name" class="mb-3">Nome:</label>
            <input type="text" name="name" id="name" placeholder="Nome Completo" class="input" value="{{ old('name') }}"
                required>
        </div>

        <div class="input-box">
            <label for="email" class="mb-3">Email:</label>
            <input type="email" name="email" id="email" placeholder="email@exemplo.com" class="input"
                value=" {{ old('email') }}" required>
        </div>

        <div class="input-box">
            <label for="password" class="mb-3">Senha:</label>
            <input type="password" name="password" id="password" placeholder="Senha com no mínimo 6 carcateres"
                value="{{ old(key: 'password') }}" class="input" required>
        </div>
        <div class="content-box">
            <input type="submit" value="Cadastrar" class="button">
        </div>
        <div>
            <a href="{{ route('') }}"></a>
        </div>
    </form>
    @if (session('success'))
        <div class="bg-green-400/20  mt-10 w-[500px] py-5 flex justify-center rounded-2xl">
            <p class="text-green-600">{{ session('success') }}</p>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-400/20 mt-10 w-[500px] py-5 flex justify-center rounded-2xl">
            <p class="text-red-600">{{ session('error') }}</p>
        </div>
    @endif

</body>
</body>

</html>