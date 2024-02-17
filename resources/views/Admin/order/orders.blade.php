
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
                                <h4 class="page-title">Orders</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-lg-8">
                                            <form class="form-inline">
                                                <div class="form-group mb-2">
                                                    <label for="inputPassword2" class="sr-only">Search</label>
                                                    <input type="search" class="form-control" id="inputPassword2"
                                                        placeholder="Search...">
                                                </div>
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <label for="status-select" class="mr-2">Status</label>
                                                    <select class="custom-select" id="status-select">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Paid</option>
                                                        <option value="2">Awaiting Authorization</option>
                                                        <option value="3">Payment failed</option>
                                                        <option value="4">Cash On Delivery</option>
                                                        <option value="5">Fulfilled</option>
                                                        <option value="6">Unfulfilled</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- <div class="col-lg-4">
                                            <div class="text-lg-right">
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light mb-2 mr-2"><i
                                                        class="mdi mdi-basket mr-1"></i> Add New Order</button>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th style="width: 20px;">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck1">
                                                            <label class="custom-control-label"
                                                                for="customCheck1">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Order ID</th>
                                                    <th>Products</th>
                                                    <th>Date</th>
                                                    <th>Payment Status</th>
                                                    <th>Total</th>
                                                    <th>Payment Method</th>
                                                    <th>Order Status</th>
                                                    <th style="width: 125px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck2">
                                                            <label class="custom-control-label"
                                                                for="customCheck2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="ecommerce-order-detail.html"
                                                            class="text-body font-weight-bold">#UB9708</a> </td>
                                                    <td>
                                                        <a href="ecommerce-product-detail.html"><img
                                                                src="{{ asset('assets/images/products/product-1.png') }}"
                                                                alt="product-img" height="32" /></a>
                                                        <a href="ecommerce-product-detail.html"><img
                                                                src="{{ asset('assets/images/products/product-2.png') }}"
                                                                alt="product-img" height="32" /></a>
                                                    </td>
                                                    <td>
                                                        August 05 2018 <small class="text-muted">10:29 PM</small>
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge bg-soft-success text-success"><i
                                                                    class="mdi mdi-coin"></i> Paid</span></h5>
                                                    </td>
                                                    <td>
                                                        $176.41
                                                    </td>
                                                    <td>
                                                        Mastercard
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-info">Shipped</span></h5>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-eye"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck3">
                                                            <label class="custom-control-label"
                                                                for="customCheck3">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="ecommerce-order-detail.html"
                                                            class="text-body font-weight-bold">#UB9707</a> </td>
                                                    <td>
                                                        <a href="ecommerce-product-detail.html"><img
                                                                src="{{ asset('assets/images/products/product-3.png') }}"
                                                                alt="product-img" height="32" /></a>
                                                        <a href="ecommerce-product-detail.html"><img
                                                                src="{{ asset('assets/images/products/product-4.png') }}"
                                                                alt="product-img" height="32" /></a>
                                                        <a href="ecommerce-product-detail.html"><img
                                                                src="{{ asset('assets/images/products/product-5.png') }}"
                                                                alt="product-img" height="32" /></a>
                                                    </td>
                                                    <td>August 04 2018 <small class="text-muted">08:18 AM</small></td>
                                                    <td>
                                                        <h5><span class="badge bg-soft-warning text-warning"><i
                                                                    class="mdi mdi-timer-sand"></i> Awaiting
                                                                Authorization</span></h5>
                                                    </td>
                                                    <td>
                                                        $1,458.65
                                                    </td>
                                                    <td>
                                                        Visa
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-warning">Processing</span></h5>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-eye"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck4">
                                                            <label class="custom-control-label"
                                                                for="customCheck4">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="ecommerce-order-detail.html"
                                                            class="text-body font-weight-bold">#UB9706</a> </td>
                                                    <td>
                                                        <a href="ecommerce-product-detail.html"><img
                                                                src="{{ asset('assets/images/products/product-7.png') }}"
                                                                alt="product-img" height="32" /></a>
                                                    </td>
                                                    <td>August 04 2018 <small class="text-muted">10:29 PM</small></td>
                                                    <td>
                                                        <h5><span class="badge bg-soft-success text-success"><i
                                                                    class="mdi mdi-coin"></i> Paid</span></h5>
                                                    </td>
                                                    <td>
                                                        $801.99
                                                    </td>
                                                    <td>
                                                        Credit Card
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-warning">Processing</span></h5>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-eye"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck5">
                                                            <label class="custom-control-label"
                                                                for="customCheck5">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="ecommerce-order-detail.html"
                                                            class="text-body font-weight-bold">#UB9705</a> </td>
                                                    <td>
                                                        <a href="ecommerce-product-detail.html"><img
                                                                src="{{ asset('assets/images/products/product-3.png') }}"
                                                                alt="product-img" height="32" /></a>
                                                        <a href="ecommerce-product-detail.html"><img
                                                                src="{{ asset('assets/images/products/product-8.png') }}"
                                                                alt="product-img" height="32" /></a>
                                                    </td>
                                                    <td>August 03 2018 <small class="text-muted">07:56 AM</small></td>
                                                    <td>
                                                        <h5><span class="badge bg-soft-success text-success"><i
                                                                    class="mdi mdi-coin"></i> Paid</span></h5>
                                                    </td>
                                                    <td>
                                                        $215.35
                                                    </td>
                                                    <td>
                                                        Mastercard
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-success">Delivered</span></h5>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-eye"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck6">
                                                            <label class="custom-control-label"
                                                                for="customCheck6">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="ecommerce-order-detail.html"
                                                            class="text-body font-weight-bold">#UB9704</a> </td>
                                                    <td>
                                                        <a href="ecommerce-product-detail.html"><img
                                                                src="{{ asset('assets/images/products/product-5.png') }}"
                                                                alt="product-img" height="32" /></a>
                                                        <a href="ecommerce-product-detail.html"><img
                                                                src="{{ asset('assets/images/products/product-7.png') }}"
                                                                alt="product-img" height="32" /></a>
                                                    </td>
                                                    <td>May 22 2018 <small class="text-muted">07:22 PM</small></td>
                                                    <td>
                                                        <h5><span class="badge bg-soft-danger text-danger"><i
                                                                    class="mdi mdi-cancel"></i> Payment Failed</span>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        $2,514.36
                                                    </td>
                                                    <td>
                                                        Paypal
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-danger">Cancelled</span></h5>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-eye"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                    <ul class="pagination pagination-rounded justify-content-end my-2">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


@endsection
