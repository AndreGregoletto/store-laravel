@extends('layouts.default')
@section('content')
    <form method="post" action="{{ route('cliente.store') }}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-1 mt-3">Nome:</p>
                    <input class="w-100" type="text" name="name" id="name" placeholder="Nome!">
                </div>
                <div class="col-md-6">
                    <p class="mb-1 mt-3">cpf:</p>
                    <input class="w-100" type="text" name="cpf" id="cpf" placeholder="CPF!">
                </div>
                <div class="col-md-6">
                    <p class="mb-1 mt-3">email</p>
                    <input class="w-100" type="text" name="email" id="email" placeholder="Email!">
                </div>
                <div class="col-md-6">
                    <p class="mb-1 mt-3">Senha</p>
                    <input class="w-100" type="text" name="password" id="password" placeholder="Senha!">
                </div>
                <input type="text" name="status" value="0" hidden>
                <div class="col-xs-12"><button type="submit" class="btn btn-primary w-100 mt-3 bg-success">Criar</button></div>
            </div>
        </div>  
    </form>
@endsection