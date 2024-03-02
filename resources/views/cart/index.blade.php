@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="card">
        <div class="card-header">
            Sản phẩm trong giỏ hàng
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá tiền</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td><img src="{{ asset('/storage/' . $product->getImage()) }}" style="width: 90px;" alt=""></td>
                            <td>{{ $product->getName() }}</td>
                            <td>{{ $product->getPrice() }}</td> 
                            <td>
                                {{session('products')[$product->getId()]}}
                            </td> 
                            <td>
                                <form action="{{ route('cart.remove', $product['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <div class="row" style="margin-left: 0px">
                    <button style="background-color: white;border:1px solid black;ouline:0;">
                        <a href="{{route('product.index')}}" style="color: black">Tiếp tục mua sản phẩm khác</a>
                    </button>
                </div>
                <div class="row d-block" style="margin-right: 0px">
                    {{-- <h3>Đơn hàng</h3> --}}
                    <a class="btn btn-outline-primary mb-2"><b>Tổng tiền:</b> {{ $viewData['total'] }}đ</a>
                    @if (count($viewData["products"]) > 0)
                    <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Tiến hành thanh toán</a>
                    <a href="{{ route('cart.delete') }}">
                        <button class="btn btn-danger mb-2">
                            Xóa tất cả sản phẩm trong giỏ hàng
                        </button>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
