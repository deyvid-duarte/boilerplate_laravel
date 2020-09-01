@extends('layouts.auth')

@section('content')
<div style="height:100%" class="d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="card-body pt-0">
                        <h3 class="text-center mt-4">
                            <a href="index.html" class="logo logo-admin">
                                <img src="PathToImage" alt="LeadsChecker" />
                            </a>
                        </h3>
                        <div class="p-3">
                            <h4 class="text-muted font-size-18 mb-1 text-center">Login</h4>
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email" class="col-form-label text-md-right">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-form-label text-md-right">Senha</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group row mt-4">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-primary w-md waves-effect waves-light">
                                            Entrar
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-4">
                                        <a href="/password/reset" class="text-muted"><i class="mdi mdi-lock"></i> Esqueceu a senha?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <p>Não possui uma conta? <a href="/register" class="text-primary"> Registre-se </a></p>
                </div>
                @include('layouts.flash-messages')
            </div>
        </div>
    </div>
</div>
@endsection
