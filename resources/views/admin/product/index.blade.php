@extends('layouts.admin')
@section('content')
<div class="card">
<div class="card-header">
Manage Products
</div>
<div class="card-body">

    <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input class="form-control" type="file" name="image">
                    </div>
                </div>
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </form>
        
    {{-- @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
    @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
    @endforeach
        </ul>
    @endif --}}
    
    <form method="POST" action="{{ route('admin.product.store') }}">
        @csrf <!– bảo vệ sự tấn công CSRF-->
    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="margin-left: -13px">Name:</label>
    <div class="col-lg-10 col-md-6 col-sm-12">
    <input name="name" value="{{ old('name') }}" type="text" class="form-control" style="margin-left: -13px">
    </div>

    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="margin-left: -13px">Price:</label>
    <div class="col-lg-10 col-md-6 col-sm-12">
    <input name="price" value="{{ old('price') }}" type="number" class="form-control" style="margin-left: -13px">
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="3">{{ old('description') }}
        </textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea class="form-control" name="content" rows="3">{{ old('content') }}
        </textarea>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <table class="table table-bordered table-striped mt-3">
        <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Content</th>
        <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
        <tr>
        <td>{{ $product->getId() }}</td>
        {{-- <td>{{ $product->getImage() }}</td> --}}
        <td><img src="{{ asset('/storage/' . $product->getImage()) }}" alt="" style="width: 90px"></td>
        <td>{{ $product->getName() }}</td>
        <td>{{ $product->getPrice() }}</td>
        <td>{{ $product->getDescription() }}</td>
        <td>{{ $product->getContent() }}</td>
        <td class="d-flex">
            <a class="btn btn-primary" style="margin-right: 10px" href="{{route('admin.product.edit', ['id'=> $product->getId()])}}">
                <i class="bi-pencil"></i>
            </a>
            <form action="{{ route('admin.product.delete', $product->getId()) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">
                <i class="bi-trash"></i>
                </button>
            </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        <nav aria-label="Page navigation ">
            {{ $products->links() }}
        </nav>
</div>
</div>
@endsection
