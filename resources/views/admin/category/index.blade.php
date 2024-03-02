
@extends('layouts.admin')
@section('title')
@section('content')
 <!-- Main -->
 <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                                </div>
                                <h3>Danh sách loại sản phẩm</h3>
                            </div>

                           
                            <form method="POST" action="{{ route('admin.category.store') }}">
                                @csrf <!– bảo vệ sự tấn công CSRF-->
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="margin-left: -13px">Name:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" style="margin-left: -13px">
                            </div>
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </form>
                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">

                                <div class="table-responsive">
                                    <table  class="table table-bordered table-striped mt-3 table-hover">
                                        <thead>
                                                <th class="text-center">ID</th>
                                                <th>Name</th>
                                                <th class="text-center">Actions</th>
                                        </thead>
                                        <tbody>
                                            @foreach($guarded['product_categories'] as $category)
                                            <tr>
                                                <td class="text-center text-muted">{{$category->getId()}}</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">{{$category->getName()}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a  href="{{route('admin.category.edit', ['id'=> $category->getId()])}}" data-toggle="tooltip" title="Edit"
                                                        data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                                        <span class="btn-icon-wrapper opacity-8">
                                                            <i class="fa fa-edit fa-w-20"></i>
                                                        </span>
                                                    </a>
                                                    <form class="d-inline" action="{{ route('admin.category.delete', $category->getId()) }}" method="post">
                                                    @csrf
                                                @method('DELETE')
                                                        <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                            type="submit" data-toggle="tooltip" title="Delete"
                                                            data-placement="bottom"
                                                            onclick="return confirm('Do you really want to delete this item?')">
                                                            <span class="btn-icon-wrapper opacity-8">
                                                                <i class="fa fa-trash fa-w-20"></i>
                                                            </span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main -->
                @endsection