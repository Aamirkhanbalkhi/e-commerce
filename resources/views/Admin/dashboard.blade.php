@extends('layout.app')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box bg-soft-info">
                                <img src="{{asset('/assets/images/users/illustration-john-2.png')}}" class="rounded-circle float-right" height="180px" width="300px" />

                                <h4 class="header-title font-22">Congratulations John! 🎉</h4>
                                <span>You have done 72% 😎 more sales today.
                                    Check your new raising badge in your profile.</span>
                                <!-- <div class="table-responsive"> -->

                                <!-- </div> -->
                            </div>
                            <!-- end card-box -->
                        </div>
                    </div> <!-- end col-->
                </div>
            </section>

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded bg-soft-primary">
                                    <i class="dripicons-wallet font-24 avatar-title text-primary"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1">$<span data-plugin="counterup">58,947</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded bg-soft-success">
                                    <i class="dripicons-basket font-24 avatar-title text-success"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">1,845</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Orders</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded bg-soft-info">
                                    <i class="dripicons-store font-24 avatar-title text-info"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">825</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Stores</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card-box">
                        <div class=" row">
                            <div class="col-6">
                                <div class="avatar-lg rounded bg-soft-warning">
                                    <i class="dripicons-user-group font-24 avatar-title text-warning"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">2,430</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Sellers</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Transaction History</h4>

                        <div class="table-responsive">
                            <table class="table table-centered table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Card</th>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Amount</th>
                                        <th class="border-top-0">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{asset('/assets/images/users/user-2.jpg')}}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                            <span class="ml-2">Imelda J. Stanberry</span>
                                        </td>
                                        <td>
                                            <img src="{{asset('/assets/images/cards/visa.png')}}" alt="user-card" height="24" />
                                            <span class="ml-2">**** 3256</span>
                                        </td>
                                        <td>27.03.2018</td>
                                        <td>$345.98</td>
                                        <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div> <!-- end table-responsive -->

                    </div> <!-- end card-box-->
                </div> <!-- end col-->
                <div class="col-xl-6">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Recent Products</h4>

                        <div class="table-responsive">
                            <table class="table table-centered table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Product</th>
                                        <th class="border-top-0">Category</th>
                                        <th class="border-top-0">Added Date</th>
                                        <th class="border-top-0">Amount</th>
                                        <th class="border-top-0">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{asset('/assets/images/products/product-1.png')}}" alt="product-pic" height="36" />
                                            <span class="ml-2">Adirondack Chair</span>
                                        </td>
                                        <td>
                                            Dining Chairs
                                        </td>
                                        <td>27.03.2018</td>
                                        <td>$345.98</td>
                                        <td><span class="badge bg-soft-success text-success">Active</span></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div> <!-- end table-responsive -->
                    </div> <!-- end card-box-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->
</div>
@endsection