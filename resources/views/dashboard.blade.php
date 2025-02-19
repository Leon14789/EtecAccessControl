@extends('layouts.base-layout')

@section('title', 'Dashboard')

@section('content')
<h1>Controle de Acesso</h1>
<table class="table table-bordered table-striped ">
    <thead class="table-dark ">
        <tr>
            <th>Nome do Professor</th>
            <th>Veículo</th>
            <th>Entrada</th>
            <th>Saída</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr class="text-custom">
            <td >Professor A</td>
            <td>Carro</td>
            <td>08:00</td>
            <td>12:00</td>
            <td class="d-flex justify-content-center">
            <button class="btn btn-warning btn-sm">Registrar Saida</button>
            </td>
        </tr>
    </tbody>
</table>

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    REGISTRAR CHEGADA
</button>


@endsection
<x-dialogue id="exampleModal" title="REGISTRAR ENTRADA">




</x-dialogue>


