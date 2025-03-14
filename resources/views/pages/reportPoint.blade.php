<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
@extends('layouts.base-layout')

@section('title', 'Registrar Usuario')

@section('content')
<h1>Relatorio de Professores</h1>

<form method="POST" action="{{ route('report.point') }}">
    @csrf
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <label for="idTeacher" class="text-custom">Selecione o Professor</label>
            <select name="idTeacher" id="teacherSelect">
                <option value="VALOR-X">Selecionar</option>
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6 col-12-xsmall">
            <label class="text-custom" for="dateof">Inicio</label>
            <input type="date" name="dateof" id="dateof" value="" placeholder="Data de" required />
        </div>
        <div class="col-6 col-12-xsmall">
        <label class="text-custom" for="dateUntil">Até</label>
            <input type="date" name="dateUntil" id="dateUntil" value="" placeholder="Data Até" required />
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">BUSCAR</button>
        </div>
    </div>
</form>

@if(isset($reportPoint) && $reportPoint->isNotEmpty())
<table class="table table-bordered table-striped ">
    <thead class="table-dark ">
        <tr>
            <th>Nome do Professor</th>
            <th>Veículo</th>
            <th>Placa</th>
            <th>Dia</th>
            <th>Entrada</th>
            <th>Saida</th>
        </tr>
    </thead>
    <tbody class="">
        @foreach($reportPoint as $reportPointTeacher)
        <tr class="text-custom">
            <td>{{$reportPointTeacher->teacher->name}}</td>
            <td> {{$reportPointTeacher->teacher->vehicle}} </td>
            <td> {{$reportPointTeacher->teacher->plate}} </td>
            <td> {{$reportPointTeacher->created_at}} </td>
            <td> {{$reportPointTeacher->Prohibited}} </td>
            <td> {{$reportPointTeacher->exit}} </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h2>Nenhum Registro encontrado.</h2>
@endif
@endsection