@extends('layouts.base-layout')

@section('title', 'Dashboard')

@section('content')
<h1>Controle de Acesso</h1>

@if(isset($points) && $points->isNotEmpty())
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
        @foreach($points as $point)
        <tr class="text-custom">
            <td>{{$point->teacher->name}}</td>
            <td>Carro</td>
            <td>{{$point->Prohibited}}</td>
            @if($point->exit)
            <td>{{$point->exit}}</td>
            @else
            <td> <button class="btn btn-primary btn-sm">Registrar Saida</button></td>
            @endif
            <td class="d-flex justify-content-center">
                <button class="btn btn-warning btn-sm">Editar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
    <h2>Nenhum Registro encontrado para hoje</h2>
@endif



<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
    REGISTRAR CHEGADA
</button>


@endsection
<x-dialogue id="exampleModalCenter" title="REGISTRAR ENTRADA">
    <form method="POST" action="{{ route('registerPoint') }}">
        @csrf

        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <label for="idTeacher" class="text-custom">Selecione o Professor</label>
                <select name="idTeacher" id="teacherSelect">
                    <option value="VALOR-X">Selecionar</option>
                    @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="vehicle" class="text-custom">Veiculo</label>
                <input type="text" name="vehicle" id="vehicle" placeholder="Veículo" readonly />
            </div>

            <div class="col-6 col-12-xsmall">
                <label for="plate" class="text-custom">Placa do Veiculo</label>
                <input type="text" name="plate" id="plate" placeholder="Placa" readonly />
            </div>

            <div class="col-6 col-12-xsmall">
                <label for="Prohibited" class="text-custom">Horario de Entrada</label>
                <input type="time" name="Prohibited" id="Prohibited" />
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-success w-100">REGISTRAR</button>
            </div>




        </div>


    </form>
</x-dialogue>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/selectTeacher.js"></script>