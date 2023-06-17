@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista Pracowników</h1>

        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Dodaj pracownika</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Imię i nazwisko</th>
                    <th>Stanowisko</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edytuj</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć tego pracownika?')">Usuń</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
