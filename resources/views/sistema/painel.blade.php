<?php $user = auth()->user();
$saldo = $user->moeda; 
?>

<div>
    <h1>Bem Vindo, {{ Auth::user()->name }}!</h1>

    <p>Moedas: {{ $saldo }}</p>

    <form action="user.moedas" method="post">
        <input type="number" name="quantidade">
        <input type="submit" value="Adicionar">
    </form>

</div>