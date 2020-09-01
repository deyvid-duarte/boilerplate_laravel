@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title d-flex justify-content-between">
                Usuários
                <a href="/users/save" class="text-primary font-size-14">
                    <i class="fas fa-plus"></i> Adicionar
                </a>
            </h4>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Açoes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="users/{{ $user->id }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop