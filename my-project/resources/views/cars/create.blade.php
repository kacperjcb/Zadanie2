@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dodaj samochód</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cars.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="brand">Marka</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand') }}">
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ old('model') }}">
            </div>
            <div class="form-group">
                <label for="employee_id">ID Pracownika</label>
                <input type="text" class="form-control" id="employee_id" name="employee_id" value="{{ old('employee_id') }}">
            </div>
            <div class="form-group">
                <label for="start_date">Data rozpoczęcia korzystania</label>
                <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}">
            </div>
            <button type="submit" class="btn btn-primary">Dodaj</button>
        </form>
    </div>
@endsection
