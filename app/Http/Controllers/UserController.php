<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function create()
    {
        return view("users.create");
    }

    public function store(UserRequest $request)
    {
        // dd($request);

        try {
            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
            ]);

            return redirect()->route('user.create')->with('success', "Usuário cadastrado com sucesso!");

        } catch (\Exception $e) {

            return back()->withInput()->with('error', "Erro ao cadastrar o usuário!");
        }

    }

    public function entrar()
    {
        return view("users.entrar");
    }


    public function painel()
    {
        return view('sistema.painel'); 

    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->route("sistema.painel")->with('nome', $user->name);
        }

        return redirect()->back()->withErrors(['erro' => 'Credenciais inválidas']);
    }


}
