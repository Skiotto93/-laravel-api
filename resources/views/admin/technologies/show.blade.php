@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-3">
            <span>
                <strong>Tecnologia utilizzata:</strong> {{$technology->name}}
            </span>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('admin.technologies.index') }}" class="btn btn-primary">Torna alla Dashboard</a>
        </div>
    </div>
@endsection