@extends('layouts.default')
@section('content')
    <form method="post" action="{{ route('produto.update', $data->id) }}">
    @csrf
    @method('PATCH')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-1 mt-3">Produto:</p>
                    <input class="w-100" type="text" name="name" id="name" value="{{$data->name}}">
                </div>
                <div class="col-md-6">
                    <p class="mb-1 mt-3">Codigo de Barras:</p>
                    <input class="w-100" type="text" name="barCode" id="barCode" value="{{$data->barCode}}">
                </div>
                <div class="col-md-6">
                    <p class="mb-1 mt-3">Preço</p>
                    <input class="w-100" type="text" name="price" id="price" value="{{$data->price}}">
                </div>
                <div class="col-md-6 mt-3">
                    <button type="submit" class="btn btn-primary w-100 mt-4 bg-success">Editar</button>
                </div>
            </div>
        </div>
    </form>
@endsection