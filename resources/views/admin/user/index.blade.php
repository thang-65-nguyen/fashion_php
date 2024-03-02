@extends('layouts.admin')
@section('content')
<div class="card">
<div class="card-header">
Manager Employee
</div>
<div class="card-body">        
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
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="margin-left: -13px">Email:</label>
    <div class="col-lg-10 col-md-6 col-sm-12">
        <input name="emai" value="{{ old('email') }}" type="email" class="form-control" style="margin-left: -13px">
    </div>
    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="margin-left: -13px">Password:</label>
    <div class="col-lg-10 col-md-6 col-sm-12">
        <input name="password" value="{{ old('password') }}" type="password" class="form-control" style="margin-left: -13px">
    </div>
    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="margin-left: -13px">Role:</label>
    <div class="col-lg-10 col-md-6 col-sm-12">
        <input name="role" value="{{ old('role') }}" type="text" class="form-control" style="margin-left: -13px">
    </div>
    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="margin-left: -13px">Balance:</label>
    <div class="col-lg-10 col-md-6 col-sm-12" style="margin-left: -13px">
        <input name="balance" value="{{ old('balance') }}" type="text" class="form-control">
    </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>


    <table class="table table-bordered table-striped mt-3">
        <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">Emai</th>
        <th scope="col">Password</th>
        <th scope="col">Role</th>
        <th scope="col">Balance</th>
        <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($user as $users)
        <tr>
        <td>{{ $users->getId() }}</td>
        <td>{{ $users->getName() }}</td>
        <td>{{ $users->getEmail() }}</td>
        <td>{{ $users->getPassword() }}</td>
        <td>{{ $users->getRole() }}</td>
        <td>{{ $users->getBalance() }}</td>
        <td class="d-flex">
            <a class="btn btn-primary" style="margin-right: 10px" href="{{route('admin.user.edit', ['id'=> $users->getId()])}}">
                <i class="bi-pencil"></i>
            </a>
            <form action="{{ route('admin.user.delete', $users->getId()) }}" method="POST">
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
            {{ $user->links() }}
        </nav>
</div>

</div>
@endsection
