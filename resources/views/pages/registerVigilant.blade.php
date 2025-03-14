<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
@extends('layouts.base-layout')

@section('title', 'Registrar Usuario')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <input type="text" name="name" id="name" required autofocus autocomplete="name" placeholder="Nome Completo" />
        </div>

        <div class="col-6 col-12-xsmall">
            <select name="is_admin" id="is_admin">
                <option value="false">É administrador</option>
                <option value="true">Sim</option>
                <option value="false">Nao</option>


            </select>
        </div>
        <div class="col-6 col-12-xsmall">
            <input type="email" name="email" id="email" required autocomplete="username" placeholder="Seu melhor Email" />
        </div>

        <div class="col-6 col-12-xsmall">
            <input type="password" name="password" id="password" required autocomplete="new-password" placeholder="Senha" />
        </div>

        <div class="col-6 col-12-xsmall">
            <input type="password" for="password_confirmation" name="password_confirmation" id="password" required autocomplete="new-password" placeholder="Confirme sua Senha" />
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-success">Registrar</button>
        </div>
    </div>
</form>
@endsection