@extends('layouts.default')
@section('content')
    <form class="container" method="post" action="{{ route('status.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Descrição</p>
                <input class="w-100 h-50" type="text" name="description" id="description" placeholder="Descrição">
            </div>
            <div class="col-sm-6">
                <p class="mb-1 mt-3">Status</p>
                <select class="w-100 h-50" name="status">
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary w-100 mt-4 bg-success">Criar</button>
            </div>
        </div>
    </form>
@endsection
