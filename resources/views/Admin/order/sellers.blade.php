
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
                                <h4 class="page-title">Sellers</h4>
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
                                        <div class="col-md-6">
                                            <form class="search-bar form-inline">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Search...">
                                                    <span class="mdi mdi-magnify"></span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-md-right">

                                                <a href="{{ route('addseller')}}"><button type="button"
                                                    class="btn btn-success waves-effect waves-light mb-2 mr-2"><i
                                                        class="mdi mdi-basket mr-1"></i> Add Sellers</button></a>

                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light mb-2 mr-1"><i
                                                        class="mdi mdi-cog"></i></button>
                                            </div>
                                        </div><!-- end col-->
                                    </div>

                                    <div class="table-responsive">
                                        <table
                                            class="table table-centered table-nowrap table-borderless table-hover mb-0">
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
                                                    <th>Seller Name</th>
                                                    <th>Store Name</th>
                                                    <th>Email</th>
                                                    <th>Products</th>
                                                    <th>Rating</th>
                                                    <th>Account Creation Date</th>
                                                    <th>Status</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($sellers as $seller)

                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck2">
                                                            <label class="custom-control-label"
                                                                for="customCheck2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="{{ asset('assets/images/users/user-3.jpg') }}" alt="table-user"
                                                            class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">{{ $seller->seller_name }}</a>
                                                    </td>
                                                    <td>
                                                        {{ $seller->seller_storename }}
                                                    </td>
                                                    <td>
                                                        {{ $seller->seller_email}}
                                                    </td>
                                                    <td>
                                                        <span class="font-weight-semibold">{{ $seller->seller_products }}</span>
                                                    </td>
                                                    <td>
                                                        <i class="mdi mdi-star text-warning"></i> 4.9
                                                    </td>
                                                    <td>
                                                        {{ $seller->account_creation_date }}
                                                    </td>
                                                    
                                                    <td>
                                                    @if ($seller->status === 'active')
                                                    <span class="badge badge-soft-success">Active</span>
                                                    @else
                                                    <span class="badge badge-soft-danger">Blocked</span>
                                                    @endif
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('editseller', $seller->id) }}" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>

                                                        <a href="{{ route('deletseller', $seller->id)}}" class="action-icon"
                                                            onclick="return confirm('Are You sure you want to Delete Seller ?');">
                                                            <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>

                                                @endforeach

                                                {{-- <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck5">
                                                            <label class="custom-control-label"
                                                                for="customCheck5">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="table-user"
                                                            class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Timothy Kauper</a>
                                                    </td>
                                                    <td>
                                                        9202922929
                                                    </td>
                                                    <td>
                                                        Uberer
                                                    </td>
                                                    <td>
                                                        <span class="font-weight-semibold">847</span>
                                                    </td>
                                                    <td>
                                                        <i class="mdi mdi-star text-warning"></i> 4.9
                                                    </td>
                                                    <td>
                                                        09/08/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-soft-success">Active</span>
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

    </div>
    <!-- END wrapper -->


@endsection
