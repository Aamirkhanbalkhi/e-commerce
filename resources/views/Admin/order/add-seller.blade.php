
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
                                <h4 class="page-title">Add Seller</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <div class="card">
                                <div class="card-body">

                                <form method="POST" action="{{ route('storeseller') }}">
                                    @csrf
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3 mt-2">
                                                    <label for="example-input-small">Seller Name</label>
                                                    <input type="text" value="{{old('seller_name')}}" id="example-input-small" name="seller_name"
                                                        class="form-control @error('seller_name') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('seller_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Email</label>
                                                    <input type="text" value="{{old('seller_email')}}" id="example-input-large" name="seller_email"
                                                    class="form-control @error('seller_email') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('seller_email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Phone</label>
                                                    <input type="text" value="{{old('seller_phone')}}" id="example-input-large" name="seller_phone"
                                                    class="form-control @error('seller_phone') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('seller_phone')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-normal">Store Name</label>
                                                    <input type="text" value="{{old('seller_storename')}}" id="example-input-large" name="seller_storename"
                                                    class="form-control @error('seller_storename') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('seller_storename')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Store Address</label>
                                                    <textarea type="text" value="{{old('seller_address')}}" rows="1" id="example-input-large" name="seller_address"
                                                    class="form-control @error('seller_address') is-invalid @enderror form-control-lg" placeholder=""></textarea>
                                                    @error('seller_address')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Products</label>
                                                    <input type="text" value="{{old('seller_products')}}" id="example-input-large" name="seller_products"
                                                    class="form-control @error('seller_products') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('seller_products')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group mt-2">
                                                        <label for="example-input-large">City</label>
                                                        <input type="text" value="{{old('seller_city')}}" id="example-input-large" name="seller_city"
                                                        class="form-control @error('seller_city') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('seller_city')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    </div>
                                                </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">State</label>
                                                    <input type="text" value="{{old('seller_state')}}" id="example-input-large" name="seller_state"
                                                    class="form-control @error('seller_state') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('seller_state')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Account Creation Date</label>
                                                    <input type="text" value="{{old('account_creation_date')}}" id="example-input-large" name="account_creation_date"
                                                    class="form-control @error('account_creation_date') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('account_creation_date')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 mt-3">
                                                <button type="submit" class="btn btn-outline-success waves-effect waves-light">CREATE</button>
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
