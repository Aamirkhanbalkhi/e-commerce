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
                        <h4 class="page-title">Banners</h4>
                    </div>
                </div>
                <div class="col-2">
                    <div class="page-title-box">
                        <a href="{{route('addbanner')}}" class="btn btn-success waves-effect waves-light mt-3"><i class="mdi mdi-plus-circle mr-1"></i>Add New Banner</a>
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
                                        <th>ID</th>
                                        <th>Banner Images</th>
                                        <th>Title</th>
                                        <th>Heading</th>
                                        <th>Description</th>
                                        <th width="100">Status</th>
                                        <th width="100">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($banners as $banner)
                                    <tr>
                                        <td> <?php echo $i++; ?></td>
                                        <td> <img src="{{ asset('uploads/' . $banner->image) }}" alt="product-pic" class="img-fluid" style="width: 80px;" />
                                        </td>
                                        <td>{{$banner->title}}</td>
                                        <td>{{$banner->heading}}</td>
                                        <td>{{$banner->decs}}</td>
                                        <td>
                                            @if ($banner->status === 'active')
                                            <i data-feather="check-circle" class="text-success"></i>
                                            @else
                                            <i data-feather="x-circle" class="text-danger"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('edit.banner', $banner->id)}}" class="text-info">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <a onclick="return confirm('Are your sure! yout want to Delete Banner ?')" href="{{route('delete.banner', $banner->id)}}" class="text-danger w-4 h-4 mr-1">
                                                <i data-feather="trash-2"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="6">No Records Available</td>
                                    </tr>

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
