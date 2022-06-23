@extends('layouts.default')
@section('content')
    <form class="container" method="post" action="{{ route('pedidos.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Cliente</p>
                <select class="w-100 h-50" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Produto</p>
                <select class="w-100 h-50" name="product_id">
                    @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Quantidade</p>
                <input class="w-100 h-50" type="text" name="quantity">
            </div>
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Status</p>
                <select class="w-100 h-50" name="status_id">
                    @foreach ($status as $sts)
                        <option value="{{$sts->id}}">{{$sts->description}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary w-100 mt-4 bg-success" type="submit">Criar</button>
            </div>
        </div>
    </form>
@endsection