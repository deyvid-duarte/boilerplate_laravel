<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list() : \Illuminate\View\View
    {
        $users = User::all();
        return view('user.list', compact('users'));
    }

    public function store(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $params = $request->only(['name', 'email', 'password']);
        $user   = User::create($params);
        if ($user)
            return redirect()->route('users')->with('success', 'Usuario cadastrado com sucesso!');

        return redirect()->route('users')->with('error', 'Algo de errado aconteceu!');
    }

    public function update(User $user, Request $request) : \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => 'required|max:255|email:filter|unique:App\Models\User,email,' . $user->id
        ]);
        
        $res = $user->update($request->only(['name', 'email']));
        if ($res)
            return redirect()->route('users')->with('success', 'Usuario alterado com sucesso!');

        return redirect()->route('users')->with('error', 'Algo de errado aconteceu!');
    }

    public function delete(User $user) : \Illuminate\Http\RedirectResponse
    {
        $res = $user->delete();
        if ($res)
            return redirect()->route('users')->with('success', 'Usuario removido com sucesso!');

        return redirect()->route('users')->with('error', 'Algo de errado aconteceu!');
    }
}
