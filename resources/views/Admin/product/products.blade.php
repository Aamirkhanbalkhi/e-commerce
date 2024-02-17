
@extends('layout.app')
@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <!-- Alert Message -->
            @include('Includes.Admin.alert')
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Products</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-lg-8">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label for="inputPassword2" class="sr-only">Search</label>
                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                    </div>
                                    <div class="form-group mx-sm-3">
                                        <label for="status-select" class="mr-2">Sort By</label>
                                        <select class="custom-select" id="status-select">
                                            <option selected="">All</option>
                                            <option value="1">Popular</option>
                                            <option value="2">Price Low</option>
                                            <option value="3">Price High</option>
                                            <option value="4">Sold Out</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-lg-right mt-3 mt-lg-0">
                                    <button type="button" class="btn btn-danger waves-effect waves-light mr-1"><i class="mdi mdi-cog"></i></button>
                                    <a href="{{route('add.product')}}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                                </div>
                            </div><!-- end col-->
                        </div> <!-- end row -->
                    </div> <!-- end card-box -->
                </div> <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                @if (count($products) > 0)
                @foreach ($products as $product ) <div class="col-md-6 col-xl-3">
                    <div class="card-box product-box">

                        <div class="product-action">
                            <a href="{{route('edit.product', $product->reference)}}" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                            <a onclick="return confirm('Are your sure?')" href="{{route('delete.product', $product->id)}}" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                        </div>

                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="bg-light">
                                    <img src="{{ asset('uploads/' . $product->image_url_1) }}" alt="product-pic" class="img-fluid" style="width: 80px;" />
                                </div>
                                <div class="col">
                                    <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">{{$product->product_name}}</a> </h5>
                                    <div class=" mb-2 font-15">
                                        <span>category : {{$product->category->category_name}} || </span>
                                        <span>{!! $product->product_details !!}</span>
                                    </div>
                                    @if ($product->status === 'In Stock')
                                    <h5 class="m-0">
                                        <span class="text-muted">Status:
                                            <span class="badge-pill badge-success">{{$product->status}}</span>
                                        </span>
                                    </h5>
                                    @elseif ($product->status === 'Out of Stock')
                                    <h5 class="m-0">
                                        <span class="text-muted">Status:
                                            <span class="badge-pill badge-danger">{{$product->status}}</span>
                                        </span>
                                    </h5>
                                    @elseif ($product->status === 'Coming Soon')
                                    <h5 class="m-0">
                                        <span class="text-muted">Status:
                                            <span class="badge-pill badge-warning">{{$product->status}}</span>
                                        </span>
                                    </h5>
                                    @endif
                                </div>
                                <div class="col-auto">
                                    <div class="product-price-tag ">
                                        ₹ {{$product->price}}
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div> <!-- end card-box-->
                </div> <!-- end col-->
                @endforeach
                @else
                <h5 class="px-4">No Records Available</h5>
                @endif
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-12">
                    <ul class="pagination pagination-rounded justify-content-end mb-3">
                        <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div> <!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->
</div>
@include('Includes.Admin.functions')
@endsection
