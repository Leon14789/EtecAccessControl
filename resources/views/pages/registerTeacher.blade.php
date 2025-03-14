<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
@extends('layouts.base-layout')

@section('title', 'Registrar Professor')

@section('content')


<!-- Formulário -->
<form method="POST" action="{{ route('register.teacher') }}">
    @csrf
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <input type="text" name="name" id="name" value="" placeholder="Nome Completo" required />
        </div>
        <div class="col-6 col-12-xsmall">
            <input type="text" name="vehicle" id="vehicle" value="" placeholder="Veiculo" required />
        </div>
        <div class="col-6 col-12-xsmall">
            <input type="text" name="plate" id="plate" value="" placeholder="Placa" required />
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Registrar Professor</button>
        </div>
    </div>
</form>


@endsection
