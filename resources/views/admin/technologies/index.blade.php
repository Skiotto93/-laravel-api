@extends('layouts.admin')

@section('content')
<div class="container my-3">
    <h1 class="my-3">Tabella Tecnologie:</h1>
    @include('commons.message')
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Tecnologia</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            {{-- @dd($technologies) --}}
            @foreach ($technologies as $technology)
            <tr>
                <th>{{$technology->id}}</th>
                <td>{{$technology->name}}</td>
                <td>{{$technology->slug}}</td>
                <td>
                    <a href="{{ route('admin.technologies.show', $technology) }}" class="btn btn-success">Dettagli</a>
                    <a href="{{ route('admin.technologies.edit', $technology) }}" class="btn btn-warning">Modifica</a>
                    <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST" class="d-inline">
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
        <a href="{{ route('admin.technologies.create') }}" class="btn btn-secondary">Aggiungi una tecnologia</a>
    </div>
</div>
@endsection