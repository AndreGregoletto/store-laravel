@extends('layouts.default')
@section('content')
    <a href="{{route('pedidos.create')}}" class="btn btn-dark mb-1">Criar</a>
    <table class="dataTables table table-dark table-striped table-hover">
        <thead>
            <tr class="font-orders">
                <th scope="col">N#</th>
                <th scope="col">Cliente</th>
                <th scope="col">CPF</th>
                <th scope="col">Email</th>
                <th scope="col">DtPedido</th>
                <th scope="col">CodBarras</th>
                <th scope="col">Produto</th>
                <th scope="col">Quant.</th>
                <th scope="col">V/T</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="text-break font-orders-table">
            @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->users[0]->name}}</td>
                    <td>{{number_format($order->users[0]->cpf, 2, '-', '.')}}</td>
                    <td>{{$order->users[0]->email}}</td>
                    <td>{{date('Y/m/d', strtotime($order->dtOrder))}}</td>
                    <td>{{$order->product[0]->barCode}}</td>
                    <td>{{$order->product[0]->name}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{'R$ '.number_format($order->quantity * $order->product[0]->price, 2, '.', ',')}}</td>
                    <td class="
                        @if($order->status[0]->id == 1)
                            text-danger
                        @elseif($order->status[0]->id == 2)
                            text-warning
                        @else
                            text-success
                        @endif
                    ">{{$order->status[0]->description}}</td>
                    <td>
                        <a href="{{ route('pedidos.edit', [$order->id])}}"><img width="20px" src="https://cdn0.iconfinder.com/data/icons/ui-22/24/283-128.png"></a>
                        <a href="{{ route('pedidos.destroy', [$order->id])}}"><img width="20px" src="https://cdn1.iconfinder.com/data/icons/office-322/24/delete-recycle-bin-trash-garbage-128.png"></a>
                    </td>
                </tr>
            @endforeach
        </thead>
    </table>
@endsection