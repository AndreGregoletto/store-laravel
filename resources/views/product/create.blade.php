@extends('layouts.default')
@section('content')
    <form method="post" action="{{ route('produto.store') }}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-1 mt-3">Nome:</p>
                    <input class="w-100" type="text" name="name" id="name" placeholder="Nome!">
                </div>
                <div class="col-md-6">
                    <p class="mb-1 mt-3">Codigo de Barras:</p>
                    <input class="w-100" type="text" name="barCode" id="barCode" placeholder="barCode!">
                </div>
                <div class="col-md-6">
                    <p class="mb-1 mt-3">Preço</p>
                    <input class="w-100" type="text" name="price" id="price" placeholder="R$ 0,00!">
                </div>
                <div class="col-md-6 mt-3">
                    <button type="submit" class="btn btn-primary w-100 mt-4 bg-success">Criar</button>
                </div>                
            </div>
        </div>  
    </form>
@endsection