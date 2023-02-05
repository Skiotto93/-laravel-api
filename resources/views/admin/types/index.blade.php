@extends('layouts.admin')

@section('content-type')
@include('commons.message')
<div class="container mt-3">
    <h1 class="my-3">Tabella Tipologie:</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Tipologia</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <th>{{$type->id}}</th>
                <td>{{$type->complexity}}</td>
                <td>{{$type->slug}}</td>
                <td>
                    <a href="{{ route('admin.types.show', $type) }}" class="btn btn-success">Dettagli</a>
                    <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-warning">Modifica</a>
                    <form action="{{ route('admin.types.destroy', $type) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
    
                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>                
            @endforeach
        </tbody>
    </table>
    <div class="my-5 text-center">
        <a href="{{ route('admin.types.create') }}" class="btn btn-secondary">Crea una Tipologia</a>
    </div>
</div>
@endsection