@extends('layouts.default')
@section('content')
    <form method="post" action="{{ route('cliente.update', $data->id) }}">
    @csrf
    @method('PATCH')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-1 mt-3">Nome:</p>
                    <input class="w-100" type="text" name="name" id="name" value="{{$data->name}}">
                </div>
                <div class="col-md-6">
                    <p class="mb-1 mt-3">CPF:</p>
                    <input class="w-100" type="text" name="cpf" id="cpf" value="{{$data->cpf}}">
                </div>
                <div class="col-md-6">
                    <p class="mb-1 mt-3">email</p>
                    <input class="w-100" type="text" name="email" id="email" value="{{$data->email}}">
                </div>
                <div class="col-md-6">
                    <p class="mb-1 mt-3">Senha</p>
                    <input class="w-100" type="text" name="password" id="password" value="{{$data->password}}">
                </div>
                <input type="number" name="status" value="0" hidden>
                <div class="col-xs-12"><button type="submit" class="btn btn-primary w-100 mt-3 bg-success">Editar</button></div>
            </div>
        </div>
    </form>
@endsection