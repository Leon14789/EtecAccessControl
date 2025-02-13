<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
@extends('layouts.base-layout')

@section('title', 'Registrar Professor')

@section('content')
<form method="POST" action="#">

    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <input type="text" name="demo-name" id="demo-name" value="" placeholder="Nome Completo" />
        </div>
        <div class="col-6 col-12-xsmall">
            <input type="email" name="demo-email" id="demo-email" value="" placeholder="Veiculo" />
        </div>
        <div class="col-12">
           <a href="" class="btn btn-success">Registrar Professor</a>
        </div>
    </div>
</form>
@endsection