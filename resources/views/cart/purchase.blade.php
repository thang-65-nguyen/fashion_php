@extends('layouts.app')
@section('title', 'Cart')
@section('content')
<div class="card">
<div class="card-header">
    Hoàn tất mua hàng
</div>
<div class="card-body">
<div class="alert alert-success" role="alert">
    Xin chúc mừng, giao dịch mua đã hoàn tất. số thứ tự là
<b>#{{ $viewData['orders']->getId() }}</b>
</div>
</div>
</div>
@endsection
