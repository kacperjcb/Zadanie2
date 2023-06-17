<?php
namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_number' => 'required',
            'product_name' => 'required',
            'client_id' => 'nullable|exists:clients,id',
        ]);
    
        $order = new Order([
            'order_number' => $validatedData['order_number'],
            'product_name' => $validatedData['product_name'],
        ]);
    
        if (isset($validatedData['client_id'])) {
            $order->client_id = $validatedData['client_id'];
        }
    
        $order->save();
    
        return redirect()->route('orders.index')
            ->with('success', 'Order has been created.');
    }

    public function edit(Order $order)
{
    $clients = Client::all();
    return view('orders.edit', compact('order', 'clients'));
}

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'order_number' => 'required',
            'product_name' => 'required',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Zamówienie zaktualizowane pomyślnie.');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Zamówienie usunięte pomyślnie.');
    }
}
