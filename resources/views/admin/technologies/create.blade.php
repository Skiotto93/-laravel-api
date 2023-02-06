@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">Aggiungi un nuova Tecnologia:</h1>
        {{-- Condizione Error --}}
        @include('commons.error')
            
        <form action="{{ route('admin.technologies.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nuova tecnologia:</label>
                {{-- <select class="form-select" name="types_id" id="types_id">
                    <option value="">No Type</option>
                    @foreach ($types as $type )
                        <option value="{{$type->id}}">{{$type->complexity}}</option>
                    @endforeach
                </select> --}}
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Aggiungi tecnologia</button>
            </div>
        </form>
    </div>
@endsection