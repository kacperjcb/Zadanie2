@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Orders</h1>
        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Create Order</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Product Name</th>
                    <th>Client</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->order_number }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->client->full_name }}</td>
                        <td>
                            <a href="{{ route('orders.edit', $order) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('orders.destroy', $order) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
