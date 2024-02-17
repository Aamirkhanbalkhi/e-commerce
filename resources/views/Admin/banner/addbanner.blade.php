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
                        <h4 class="page-title">Add / Edit Banner</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="{{route('add.banner')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Banner Detail</h5>

                            <div class="form-group mb-3">
                                <label for="product-name">Heading <span class="text-danger">*</span></label>
                                <input type="text" value="{{old('heading')}}" class="form-control @error('heading') is-invalid @enderror" name="heading" placeholder="e.g : Apple iMac">
                                @error('heading')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="title">title <span class="text-danger">*</span></label>
                                <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="title">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="product-description">Description <span class="text-danger">*</span></label>
                                <textarea value="{{old('decs')}}" class="form-control @error('decs') is-invalid @enderror" name="decs" rows="5" placeholder="Please enter description"></textarea>
                                @error('desc')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Status <span class="text-danger">*</span></label>
                                <br />
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio1" value="active" name="status" checked="">
                                    <label for="inlineRadio1"> Active </label>
                                </div>
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio2" value="inactive" name="status">
                                    <label for="inlineRadio2"> Inactive </label>
                                </div>

                                @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div> <!-- end card-box -->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card-box">
                            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Banner Images</h5>

                            <div class="fallback">
                                <input name="image" type="file" />
                            </div>

                            <div class="dz-message needsclick">
                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                <h3>Drop files here or click to upload.</h3>
                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files
                                    <strong>not</strong> actually uploaded.)</span>
                            </div>

                            <!-- Preview -->
                            <div class="dropzone-previews mt-3" id="file-previews"></div>

                        </div> <!-- end card-box -->
                    </div> <!-- end col -->

                    <div class="row">
                        <div class="col">
                            <div class="text-center mb-3">
                                <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                <a href="{{route('banner')}}"><button type="button" class="btn w-sm btn-danger waves-effect waves-light">Cancel</button></a>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div> <!-- end row -->
                <!-- end row -->
            </form>
        </div> <!-- container -->

    </div> <!-- content -->
</div>

@endsection