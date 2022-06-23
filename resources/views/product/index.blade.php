@extends('layouts.default')
@section('content')
    <a href="{{route('produto.create')}}" class="btn btn-dark mb-1">Criar</a>
    <table class="table table-dark table-striped table-hover dataTables">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Codigo de Barras</th>
                <th scope="col">Preço</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->barCode}}</td>
                <td>{{'R$ '.number_format($product->price, 2, '.', ',') }}</td> 
                <td>
                    <a href="{{ route('produto.edit', [$product->id]) }}"><img width="25px" src="https://cdn0.iconfinder.com/data/icons/ui-22/24/283-128.png"></a>
                    <a href="{{ route('produto.destroy', [$product->id])}}"><img width="25px" src="https://cdn1.iconfinder.com/data/icons/office-322/24/delete-recycle-bin-trash-garbage-128.png"></a>
                </td>
            </tr>
            @endforeach
        </thead>
    </table>
    {{-- <div class="pagination justify-content-center">{{ $products->links() }}</div> --}}
@endsection