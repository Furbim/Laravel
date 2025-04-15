<?php $user = auth()->user();
$saldo = $user->moeda; 
$nome = $user->name;
?>

<div>
    <h1>Bem Vindo, {{ $nome }}!</h1>

    <p>Moedas: {{ $saldo }}</p>

    <x-alert></x-alert>

    
    <form action="{{route('user.addMoedas')}}" method="post">
        @csrf
        <input type="number" name="quantidade">
        <input type="submit" value="Adicionar">
    </form>

    <form action="{{route('user.removeMoedas')}}" method="post">
        @csrf
        <input type="number" name="quantidade">
        <input type="submit" value="Remover">
    </form>

</div>