@extends('layouts.app')
@section('content')
@forelse ($viewData["orders"] as $order)
<div class="card mb-4">
<div class="card-header">
Order #{{ $order->getId() }}
</div>
<div class="card-body">
{{-- insert code card-body --}}
<div class="card-body">
    {{-- insert code card-body --}}
    <b>Date:</b> {{ $order->getCreatedAt() }}<br />
    <b>Total:</b> ${{ $order->getTotal() }}<br />
    <table class="table table-bordered table-striped text-center mt-3">
    <thead>
    <tr>
    <th scope="col">Item ID</th>
    <th scope="col">Image</th>
    <th scope="col">Product Name</th>
    <th scope="col">Price</th>
    <th scope="col">Quantity</th>
    {{-- <th scope="col">Actions</th> --}}
    </tr>
    </thead>
    <tbody>
    @foreach ($order->getItems() as $item)
    <tr>
    <td>{{ $item->getId() }}</td>
    <td><img src="{{ asset('/storage/' . $item->getProduct()->getImage()) }}" style="width: 90px;" alt=""></td>
    <td>
    <a class="link-success"
    href="{{ route('product.show', ['id' => $item->getProduct()->getId()]) }}">
    {{ $item->getProduct()->getName() }}
    </a>
    </td>
    <td>${{ $item->getPrice() }}</td>
    <td>{{ $item->getQuantity() }}</td>
    {{-- <td><a href="{{route('myaccount.show')}}">Xem</a></td> --}}
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
</div>
</div>
@empty
<div class="alert alert-danger" role="alert">
    Có vẻ như bạn chưa mua bất cứ thứ gì trong cửa hàng của chúng tôi
</div>
@endforelse
@endsection