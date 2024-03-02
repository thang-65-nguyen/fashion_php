@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Order Details</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID:</th>
                    <td>{{ $order->id }}</td>
                </tr>
                <tr>
                    <th>Customer Name:</th>
                    <td>{{ $order->customer_name }}</td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td>{{ $order->address }}</td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>{{ $order->phone }}</td>
                </tr>
                <tr>
                    <th>Amount:</th>
                    <td>{{ $order->amount }}</td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>{{ $order->status }}</td>
                </tr>
                <tr>
                    <th>Date:</th>
                    <td>{{ $order->created_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
