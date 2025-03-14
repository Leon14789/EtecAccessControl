@extends('layouts.base-layout')

@section('title', 'Lista de Professores')

@section('content')


<h1>Usuarios Cadastrados</h1>


@if(isset($Users) && $Users->isNotEmpty())
<table class="table table-bordered table-striped ">
    <thead class="table-dark ">
        <tr>
            <th>Nome de Usuario</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody class="">
        @foreach($Users as $User)
        <tr class="text-custom">
            <td>{{$User->name}}</td>
            <td> {{$User->email}} </td>
            <td class="d-flex">
                <button type="button" class="btn btn-warning btn-sm mr-1 btn-custom-smm" data-toggle="modal" data-target="#editUser">
                    Editar
                </button>
                <form method="POST" action="{{ route('user.destroy', ['user' => $User->id]) }}">
                    @csrf
                    <button class="btn btn-danger btn-sm btn-custom-smm">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h2>Nenhum Registro encontrado</h2>
@endif

@endsection

<x-dialogue id="editUser" title="Editar Usuarios">
    <form method="POST" action="{{ route('user.update', ['user' => $User->id]) }}">
    @csrf
    @method('PUT')

        <div class="row gtr-uniform">
            <div class="col-12 col-12-xsmall">
                <label for="name" class="text-custom">Nome</label>
                <input type="text" value="{{ $User->name }}" name="name" id="name" placeholder="Veículo" readonly />
            </div>
            <div class="col-12 col-12-xsmall">
                <label for="email" class="text-custom">Email</label>
                <input type="text" name="email" value="{{ $User->email }}" id="email" placeholder="Email" readonly />
            </div>
            <div class="col-12 col-12-xsmall">
                <label  for="password" class="text-custom">Senha</label>
                <input type="text"  name="password" id="password" placeholder="Senha"  />
            </div>




            <div class="col-12">
                <button type="submit" class="btn btn-success w-100">ATUALIZAR</button>
            </div>


        </div>
    </form>
</x-dialogue>
