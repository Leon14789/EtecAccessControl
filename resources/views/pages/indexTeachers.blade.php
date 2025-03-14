@extends('layouts.base-layout')

@section('title', 'Lista de Professores')

@section('content')

<style>
        /* Estilo personalizado para o botão */
        .btn-custom-smm {
            padding: 0.15rem 0.3rem; /* Reduz o padding */
            font-size: 0.75rem; /* Reduz o tamanho da fonte */
        }
    </style>

<h1>Professores Cadastrados</h1>

@if(isset($teachers) && $teachers->isNotEmpty())
<table class="table table-bordered table-striped ">
    <thead class="table-dark ">
        <tr>
            <th>Nome do Professor</th>
            <th>Veículo</th>
            <th>Placa</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody class="">
        @foreach($teachers as $teacher)
        <tr class="text-custom">
            <td>{{$teacher->name}}</td>
            <td> {{$teacher->vehicle}} </td>
            <td> {{$teacher->plate}} </td>
            <td class="d-flex">
                <button type="button" class="btn btn-warning btn-sm mr-1 btn-custom-smm" data-toggle="modal" data-target="#editPoint">
                    Editar
                </button>
                <form method="POST" action="{{ route('teacher.destroy', ['teacher' => $teacher->id]) }}">
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

<x-dialogue id="editPoint" title="Editar Professor">
    <form method="POST" action="{{ route('teacher.update', ['teacher' => $teacher->id]) }}">
    @csrf
    @method('PUT')

        <div class="row gtr-uniform">
            <div class="col-12 col-12-xsmall">
                <label for="name" class="text-custom">Nome</label>
                <input type="text" value="{{ $teacher->name }}" name="name" id="name" placeholder="Veículo"  />
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="plate" class="text-custom">Placa</label>
                <input type="text" name="plate" value="{{ $teacher->plate }}" id="plate" placeholder="Placa"  />
            </div>
            <div class="col-6 col-12-xsmall">
                <label  for="vehicle" class="text-custom">Veiculo</label>
                <input type="text"  name="vehicle" value="{{ $teacher->vehicle }}" id="vehicle" placeholder="Veiculo"  />
            </div>




            <div class="col-12">
                <button type="submit" class="btn btn-success w-100">ATUALIZAR</button>
            </div>


        </div>
    </form>
</x-dialogue>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
  