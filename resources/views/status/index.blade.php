@extends('layouts.default')
@section('content')
    <a href="{{route('status.create')}}" class="btn btn-dark mb-1">Criar</a>
        <table class="dataTables table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($status as $sts)
            <tr>
                <th scope="row">{{$sts->id}}</th>
                <td>{{$sts->description}}</td>
                <td>{{$sts->status}}</td> 
                <td>
                    <a href="{{ route('status.edit', [$sts->id]) }}"><img width="25px" src="https://cdn0.iconfinder.com/data/icons/ui-22/24/283-128.png"></a>
                    <a href="{{ route('status.destroy', [$sts->id])}}"><img width="25px" src="https://cdn1.iconfinder.com/data/icons/office-322/24/delete-recycle-bin-trash-garbage-128.png"></a>
                </td>
            </tr>
            @endforeach
        </thead>
    </table>
@endsection