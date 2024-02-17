
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
                                <h4 class="page-title">Add Customers</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <div class="card">
                                <div class="card-body">

                                <form method="POST" action="{{ route('storecustomer') }}">
                                    @csrf
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3 mt-2">
                                                    <label for="example-input-small">Name</label>
                                                    <input type="text" value="{{old('customer_name')}}" id="example-input-small" name="customer_name"
                                                        class="form-control @error('customer_name') is-invalid @enderror form-control-lg" placeholder="">
                                                        @error('customer_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-normal">Email</label>
                                                    <input type="email" value="{{old('customer_email')}}" id="example-input-normal" name="customer_email"
                                                        class="form-control @error('customer_email') is-invalid @enderror form-control-lg" placeholder="">
                                                        @error('customer_email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Phone</label>
                                                    <input type="text" value="{{old('customer_phone')}}" id="example-input-large" name="customer_phone"
                                                    class="form-control @error('customer_phone') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('customer_phone')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Address</label>
                                                    <textarea type="text" value="{{old('customer_address')}}" rows="1" id="example-input-large" name="customer_address"
                                                        class="form-control @error('customer_address') is-invalid @enderror form-control-lg" placeholder=""></textarea>
                                                    @error('customer_address')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">City</label>
                                                    <input type="text" value="{{old('customer_city')}}" id="example-input-large" name="customer_city"
                                                    class="form-control @error('customer_city') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('customer_city')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">State</label>
                                                    <input type="text" value="{{old('customer_state')}}" id="example-input-large" name="customer_state"
                                                    class="form-control @error('customer_state') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('customer_state')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group mt-2">
                                                        <label for="example-input-large">Country</label>
                                                        <input type="text" value="{{old('customer_country')}}" id="example-input-large" name="customer_country"
                                                        class="form-control @error('customer_country') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('customer_country')
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

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Total Orders</label>
                                                    <input type="text" value="{{old('total_orders')}}" id="example-input-large" name="total_orders"
                                                    class="form-control @error('total_orders') is-invalid @enderror form-control-lg" placeholder="">
                                                    @error('total_orders')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    {{-- <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group mt-2">
                                                <label for="example-input-large">Status</label>
                                                <select name="" id="" class="form-control form-control-lg">
                                                    <option value="">Active</option>
                                                    <option value="">Blocked</option>
                                                </select>
                                                <input type="text" id="example-input-large" name="total_orders"
                                                 class="form-control form-control-lg" placeholder="">
                                            </div>
                                        </div>
                                    </div> --}}

                                        <div class="row">
                                            <div class="col-lg-12 mt-3">
                                                <button type="submit" class="btn btn-outline-success waves-effect waves-light">CREATE</button>
                                                <a href="{{ route('customers') }}"><button type="button" class="btn btn-outline-danger waves-effect ml-2">CANCEL</button></a>
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
