@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title d-flex justify-content-between">
                Usuários
            </h4>
            <form action="{{ $user ? url('/users/' . $user->id . '/save') : route('user.create') }}" method="post">
                @csrf

                @if ($user)
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required value="{{ $user->name ?? old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required value="{{ $user->email ?? old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @if (!$user)
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required value="{{ $user->password ?? old('password') }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Confirme a senha</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required value="{{ $user->password_confirmation ?? old('password_confirmation') }}">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                @endif
                <button class="btn btn-primary">
                    Salvar
                </button>
            </form>
        </div>
    </div>
@stop