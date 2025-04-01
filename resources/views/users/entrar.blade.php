<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css'])

</head>

<body class="main-container">

    <form action="{{ route('user.login') }}" method="post"
        class="form-container">
        @csrf
        <div class="content-box mb-10">
            <h1 class="text-5xl">ENTRAR</h1>
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
            <input type="submit" value="Entrar" class="button">
        </div>
    </form>

</body>

</html>