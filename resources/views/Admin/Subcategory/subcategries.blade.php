@extends('layout.app')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-10">
                    <div class="page-title-box">
                        <h4 class="page-title">Sub Category</h4>
                    </div>
                </div>
                <div class="col-2">
                    <div class="page-title-box">
                        <a href="{{route('add.subcategory')}}" class="btn btn-success waves-effect waves-light mt-3"><i class="mdi mdi-plus-circle mr-1"></i>New Sub Category</a>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Main content -->
            <section class="content">
                <!-- Alert message  -->
                @include('Includes.Admin.alert')
                <!-- Default box -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <div class="input-group input-group" style="width: 250px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th width="60">ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Category</th>
                                        <th width="100">Status</th>
                                        <th width="100">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($subcateroy) > 0)
                                    <?php $i = 1; ?>
                                    @foreach ($subcateroy as $subcate)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $subcate->sub_category_name }}</td>
                                        <td>{{ $subcate->sub_category_slug }}</td>
                                        <td>
                                            @if($subcate->category)
                                            {{ $subcate->category->category_name }}
                                            @else
                                            No Category Available
                                            @endif
                                        </td>
                                        <td>
                                            @if ($subcate->status === 'active')
                                            <i data-feather="check-circle" class="text-success"></i>
                                            @else
                                            <i data-feather="x-circle" class="text-danger"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('edit.subcategory', $subcate->sub_category_slug) }}">
                                                <i data-feather="edit-2"></i>
                                            </a>
                                            <a onclick="return confirm('Are you sure?')" href="{{ route('delete.subcategory', $subcate->id) }}" class="text-danger w-4 h-4 mr-1">
                                                <i data-feather="trash-2"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">No Records Available</td>
                                    </tr>
                                    @endif
                                </tbody>

                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination m-0 float-right">
                                <li class="page-item"><a class="page-link prev" href="#">« Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link next" href="#">Next »</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->

        </div>
    </div>
</div>
@include('Includes.Admin.functions')
@endsection