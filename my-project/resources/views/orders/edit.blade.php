@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Order</h1>

        <form action="{{ route('orders.update', $order) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="order_number">Order Number</label>
                <input type="text" name="order_number" class="form-control" value="{{ $order->order_number }}" required>
            </div>
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" name="product_name" class="form-control" value="{{ $order->product_name }}" required>
            </div>
            <div class="form-group">
                <label for="client_id">Client</label>
                <select name="client_id" class="form-control" required>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" {{ $client->id === $order->client_id ? 'selected' : '' }}>
                            {{ $client->full_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
