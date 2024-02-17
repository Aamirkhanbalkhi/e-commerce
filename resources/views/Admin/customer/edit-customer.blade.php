

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
                                <h4 class="page-title">Edit Customers</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <div class="card">
                                <div class="card-body">

                                <form method="POST" action="{{ route('updatecustomer', $customer->id) }}">
                                    @csrf

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3 mt-2">
                                                    <label for="example-input-small">Name</label>
                                                    <input type="text" id="example-input-small" name="customer_name"
                                                    value="{{ $customer->customer_name }}" class="form-control form-control-lg" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-normal">Email</label>
                                                    <input type="email" id="example-input-normal" name="customer_email"
                                                     value="{{ $customer->customer_email }}"   class="form-control form-control-lg" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Phone</label>
                                                    <input type="text" id="example-input-large" name="customer_phone"
                                                   value="{{ $customer->customer_phone }}" class="form-control form-control-lg" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group mt-2">
                                                        <label for="example-input-large">Country</label>
                                                        <input type="text" id="example-input-large" name="customer_country"
                                                        value="{{ $customer->customer_country }}" class="form-control form-control-lg" placeholder="">
                                                    </div>
                                                </div>

                                            <div class="col-lg-4">
                                                <div class="form-group mt-2">
                                                    <label for="example-input-large">Total Orders</label>
                                                    <input type="text" id="example-input-large" name="total_orders"
                                                   value="{{ $customer->total_orders }}" class="form-control form-control-lg" placeholder="">
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
