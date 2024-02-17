@extends('layout.app')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid my-2">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h2>Create Sub Category</h2>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="{{route('subcategries')}}" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <section class="content">
                    <form action="{{route('update.subcategory',$data['subcategory']->id)}}" method="post">
                        @csrf
                        <!-- Default box -->
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="name">Category</label>
                                                <select class="form-control" name="category_id">
                                                    <option value="">Please select</option>
                                                    @foreach($categories as $category)
                                                    <option {{ $data['subcategory']->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" value="{{ $data['subcategory']->sub_category_name, old('sub_category_name') }}" class="form-control @error('sub_category_name') is-invalid @enderror" name="sub_category_name" placeholder="Enter category name">
                                                @error('sub_category_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="email">Slug</label>
                                                <input type="text" value="{{ $data['subcategory']->sub_category_slug, old('sub_category_slug') }}" class="form-control @error('sub_category_slug') is-invalid @enderror" name="sub_category_slug" placeholder="Enter category slug">
                                                @error('sub_category_slug')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                    </div>
                                </div>
                            </div>
                            <div class="pb-5 pt-3">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="{{route('subcategries')}}" class="btn btn-outline-dark ml-3">Cancel</a>
                            </div>
                        </div>
                        <!-- /.card -->
                    </form>
                </section>
                <!-- /.content -->
            </div>
        </div>
    </div>

</div>
@endsection