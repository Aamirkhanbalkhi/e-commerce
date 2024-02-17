
@extends('layout.app')

@section('content')

    <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Edit Sellers</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <div class="card">
                                <div class="card-body">

                                <form method="POST" action="{{ route('updatesller', $seller->id) }}">
                                    @csrf

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3 mt-2">
                                                    <label for="example-input-small">Seller Name</label>
                                                    <input type="text" id="example-input-small" name="seller_name"
                                                    value="{{ $seller->seller_name }}" class="form-control form-control-lg" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-normal">Store Name</label>
                                                    <input type="text" id="example-input-normal" name="seller_storename"
                                                     value="{{ $seller->seller_storename }}"   class="form-control form-control-lg" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Email</label>
                                                    <input type="email" id="example-input-large" name="seller_email"
                                                    value="{{ $seller->seller_email }}" class="form-control form-control-lg" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group mt-2">
                                                        <label for="example-input-large">Seller Address</label>
                                                        <textarea type="text" rows="1" id="example-input-large" name="seller_address"
                                                       class="form-control form-control-lg" placeholder="">{{ $seller->seller_address }}</textarea>
                                                    </div>
                                                </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Products</label>
                                                    <input type="text" id="example-input-large" name="seller_products"
                                                    value="{{ $seller->seller_products }}" class="form-control form-control-lg" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                            <div class="form-group mt-2">
                                                <label for="example-input-large">Status</label>
                                                <select name="status" id="" class="form-control form-control-lg">
                                                    <option value="active" name="status">Active</option>
                                                    <option value="blocked" name="status">Blocked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row">
                                            <div class="col-lg-12 mt-3">
                                                <button type="submit" class="btn btn-outline-success waves-effect waves-light">UPDATE</button>
                                                <a href="{{ route('sellers') }}"><button type="button" class="btn btn-outline-danger waves-effect ml-2">CANCEL</button></a>
                                            </div>
                                        </div>
                                </div>
                            </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Page Content here -->
        <!-- ============================================================== -->

@endsection
