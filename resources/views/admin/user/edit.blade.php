@extends('layouts.admin')
@section('content')
<div class="card mb-4">
<div class="card-header">
Edit Product
</div>
<div class="card-body">
@if ($errors->any())
<ul class="alert alert-danger list-unstyled">
@foreach ($errors->all() as $error)
<li>- {{ $error }}</li>
@endforeach
</ul>
@endif
<!-- add form -->
<form method="POST" action="{{ route('admin.user.update', ['id' => $viewData['user']->getId()]) }} "enctype="multipart/form-data">
@csrf
@method('PUT')
<!--add element form: name, price, image, description-->
    <div class="row">
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="name" value="{{ $viewData['user']->getName() }}" type="text"
                        class="form-control">
                    </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Email:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="email" value="{{ $viewData['user']->getEmail() }}" type="email"
                        class="form-control">
                    </div>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Password:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="password" value="{{ $viewData['user']->getPassword() }}" type="password"
                        class="form-control">
                    </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Role:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="role" value="{{ $viewData['user']->getRole() }}" type="text"
                        class="form-control">
                    </div>
            </div>
        </div>
    </div> 
    <div class="mb-3">
        <label class="form-label">Balance</label>
        <input name="balance" value="{{ $viewData['user']->getBalance() }}" type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
</div>
@endsection 