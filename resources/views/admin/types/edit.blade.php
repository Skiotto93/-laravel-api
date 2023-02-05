@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">Modifica la Tipologia</h1>
        {{-- Condizione Error --}}
        @include('commons.error')
            
        <form action="{{ route('admin.types.update', $type) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="complexity" class="form-label">Complessità del Progetto:</label>
                {{-- <select class="form-select" name="types_id" id="types_id">
                    <option value="">No Type</option>
                    @foreach ($types as $type )
                        <option value="{{$type->id}}">{{$type->complexity}}</option>
                    @endforeach
                </select> --}}
                <input type="text" class="form-control" id="complexity" name="complexity" value="{{ old('complexity', $type->complexity) }}">
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </form>
    </div>
@endsection