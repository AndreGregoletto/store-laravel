@extends('layouts.default')
@section('content')
    <a href="{{route('cliente.create')}}" class="btn btn-dark mb-1">Criar</a>
    <table class="table table-dark table-striped table-hover dataTables">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CLIENTE</th>
                <th scope="col">CPF</th>
                <th scope="col">EMAIL</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{number_format($user->cpf, 2, '-', '.')}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ route('cliente.edit', [$user->id]) }}"><img width="25px" src="https://cdn0.iconfinder.com/data/icons/ui-22/24/283-128.png"></a>
                    <a href="{{ route('cliente.destroy', [$user->id])}}"><img width="25px" src="https://cdn1.iconfinder.com/data/icons/office-322/24/delete-recycle-bin-trash-garbage-128.png"></a>
                </td>
            </tr>
            @endforeach
        </thead>
    </table>
@endsection
