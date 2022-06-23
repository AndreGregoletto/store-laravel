@extends('layouts.default')
@section('content')
    <form class="container" method="post" action="{{ route('status.update', $data->id) }}">
    @csrf
    @method('PATCH')
        <div class="row">
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Descrição</p>
                <input class="w-100 h-50" type="text" name="description" id="description" value="{{$data->description}}">
            </div>
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Status</p>
                <select class="w-100 h-50" name="status" id="status">
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary w-100 mt-4 bg-success">Editar</button>
            </div>
        </div>
    </form>
@endsection

