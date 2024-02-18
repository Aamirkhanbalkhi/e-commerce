
@extends('layout.app')

@section('content')

    <!-- Begin page -->
    <div id="wrapper">

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
                                <h4 class="page-title">Customers</h4>
                            </div>
                        </div>
                    </div>

                        @include('Includes.Admin.alert')

                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-sm-4">
                                            <a href="{{ route('addcustomer') }}" class="btn btn-success mb-2"><i
                                                    class="mdi mdi-plus-circle mr-2"></i> Add Customers</a>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-sm-right">
                                                <button type="button" class="btn btn-success mb-2 mr-1"><i
                                                        class="mdi mdi-cog"></i></button>
                                                <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                                                <button type="button" class="btn btn-light mb-2">Export</button>
                                            </div>
                                        </div><!-- end col-->
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped dt-responsive nowrap w-100"
                                            id="products-datatable">
                                            <thead>
                                                <tr>
                                                    {{-- <th style="width: 20px;">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck1">
                                                            <label class="custom-control-label"
                                                                for="customCheck1">&nbsp;</label>
                                                        </div>
                                                    </th> --}}
                                                    <th>Sr No.</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Country</th>
                                                    <th>Account Creation Date</th>
                                                    <th>Total Order</th>
                                                    <th>Status</th>
                                                    <th style="width: 75px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach ($customers as $customer)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td> {{-- yeah Laravel ka concept h No. wise show--}}

                                                    <td class="table-user">
                                                        <img src="{{ asset('assets/images/users/user-4.jpg') }}" alt="table-user"
                                                            class="mr-2 rounded-circle">
                                                        <span class="text-body font-weight-semibold">{{ $customer->customer_name}}</span>
                                                    </td>
                                                    <td>
                                                        {{ $customer->customer_email }}
                                                    </td>
                                                    <td>{{ $customer->customer_phone }}</td>
                                                    <td>
                                                        {{ $customer->customer_country }}
                                                    </td>
                                                    <td>
                                                        {{ $customer->account_creation_date }}
                                                    </td>
                                                    <td>
                                                        {{ $customer->total_orders }}
                                                    </td>

                                                    <td>
                                                        @if ($customer->status === 'active')
                                                        <span class="badge badge-soft-success">Active</span>
                                                        @else
                                                        <span class="badge badge-soft-danger">Blocked</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('editcustomer', ['id' => $customer->id ]) }}" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>

                                                        <a href="{{ route('deletecustomer', $customer->id) }}" class="action-icon"
                                                            onclick="return confirm('Are You Sure you want to delete this customer ?');">
                                                        <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>

                                                @endforeach

                                                {{-- <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck3">
                                                            <label class="custom-control-label"
                                                                for="customCheck3">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="{{ asset('assets/images/users/user-3.jpg') }}" alt="table-user"
                                                            class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                                    </td>
                                                    <td>
                                                        bryan@text.com
                                                    </td>
                                                    <td>
                                                        215-302-3376
                                                    </td>
                                                    <td>
                                                        India
                                                    </td>
                                                    <td>August 04 2019 <small class="text-muted">08:18 AM</small></td>
                                                    <td>10</td>
                                                    <td>
                                                        <span class="badge badge-soft-success">Active</span>
                                                    </td>

                                                    <td>
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
                                                    <td class="table-user">
                                                        <img src="{{ asset('assets/images/users/user-1.jpg' )}}" alt="table-user"
                                                            class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Timothy Kauper</a>
                                                    </td>
                                                    <td>
                                                        jame@exaample.com
                                                    </td>
                                                    <td>
                                                        (216) 75 612 706
                                                    </td>
                                                    <td>
                                                        Afganishtan
                                                    </td>
                                                    <td>February 01 2019 <small class="text-muted">07:22 AM</small></td>
                                                    <td>10</td>
                                                    <td>
                                                        <span class="badge badge-soft-danger">Blocked</span>
                                                    </td>

                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr> --}}

                                            </tbody>

                                        </table>
                                    </div>
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

    </div>
    <!-- END wrapper -->

@endsection
