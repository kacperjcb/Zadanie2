@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edytuj pracownika</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Imię i nazwisko:</label>
                <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
            </div>
            <div class="form-group">
                <label for="position">Stanowisko:</label>
                <input type="text" name="position" class="form-control" value="{{ $employee->position }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </form>
    </div>
@endsection
