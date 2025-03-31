<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view("users.create");
    }

    public function store(Request $request)
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

    public function entrar(){
        return view("users.entrar");
    }

    public function login(Request $request)
    {
        $user = Auth::user($request);

        $id = Auth::id($request);
        $nome = Auth::nome($request);

        return redirect()->route("sistema.painel")->with('nome', $nome);
    }
}
