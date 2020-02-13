@extends('backend.layouts.app')
@section('title','New Product')

@section('content')
    <div class="products">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">New Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">New Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

    	<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3>New Product
                                <a href="{{route('products.index')}}" class="btn btn-primary pull-right">Back</a></h3>
                            </div>
                            <div class="card-body">
                                @include('includes.error')
                                @include('includes.message')
                                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-3">Product Name:</label>
                                        <input name="name" type="text" class="form-control" placeholder="Enter Product Name" value="{{old('name')}}">
                                    </div>

                                    <div class="form-group">
                                        <select name="category_id" id="category" class="form-control">
                                            <option value="" label="-- Select One --"></option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label mb-2">Product Price:</label>
                                                <input name="product_price" type="text" class="form-control" placeholder="Enter Product Price" value="{{old('product_price')}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label mb-2">Sale Price:</label>
                                                <input name="sale_price" type="text" class="form-control" placeholder="Enter Sale Price" value="{{old('sale_price')}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label mb-2">Product Quantity:</label>
                                                <input name="quantity" type="text" class="form-control" placeholder="Enter Product Size" value="{{old('quantity')}}">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label mb-2">Product Color:</label>
                                                <input name="product_color" type="text" class="form-control" placeholder="Enter Product Color" value="{{old('product_color')}}">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label mb-2">Alert Quantity:</label>
                                                <input name="alert_quantity" type="text" class="form-control" placeholder="Enter Product Color" value="{{old('alert_quantity')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label mb-1">Description:</label>
                                        <textarea name="description" id="description" rows="6" class="form-control" placeholder="Description">{{old('description')}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label mb-1">Publication Status:</label>
                                        <input type="radio" name="status" value="1" checked>Published
                                        <input type="radio" name="status" value="0">Unpublished
                                    </div>

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    	    </div>
        </div>
    </div>

@endsection
