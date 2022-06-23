@extends('layouts.default')
@section('content')
    <form class="container" method="post" action="{{ route('pedidos.update', $data->id) }}">
    @csrf
    @method('PATCH')
        <div class="row">
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Cliente</p>
                <input class="w-100" type="text" name="user_id" id="user_id" value="{{$data->users[0]->name}}" disabled>
            </div>
            <div class="col-sm-6">
                <p class="mb-1 mt-3">CPF</p>
                <input class="w-100" type="text" name="cpf" id="cpf" value="{{$data->users[0]->cpf}}" disabled>
            </div>
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Produto</p>
                <input class="w-100" type="text" name="product_id" id="product_id" value="{{$data->product[0]->name}}" disabled>
            </div>
            <div class="col-sm-6">
                <p class="mb-1 mt-3">CodBarras</p>
                <input class="w-100" type="text" name="barCode" id="barCode" value="{{$data->product[0]->barCode}}" disabled>
            </div>
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Quantidade</p>
                <input class="w-100" type="text" name="quantity" id="quantity" value="{{$data->quantity}}">
            </div>
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Status</p>
                <select class="w-100" name="status_id" value="{{$data->status[0]->description}}">

                    @foreach ($status as $sts)
                        <option value="{{$sts->id}}">{{$sts->description}}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary w-100 mt-4 bg-success" type="submit">Atualizar</button>
            </div>
        </div>
    </form>
@endsection