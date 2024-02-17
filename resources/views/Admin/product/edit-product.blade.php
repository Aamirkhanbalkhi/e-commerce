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
                        <h4 class="page-title">Update Product</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="{{ route('update.product', $data['product']->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                            <div class="form-group mb-3">
                                <label for="product-name">Product Name <span class="text-danger">*</span></label>
                                <input type="text" value="{{  $data['product']->product_name, old('product_name')}}" class="form-control @error('product_name') is-invalid @enderror" name="product_name" placeholder="e.g : Apple iMac">
                                @error('product_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="product-reference">Reference <span class="text-danger">*</span></label>
                                <input type="text" name="reference" value="{{ $data['product']->reference, old('reference')}}" class="form-control @error('reference') is-invalid @enderror" placeholder="e.g : Apple iMac">
                                @error('reference')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="title">title <span class="text-danger">*</span></label>
                                <input type="text" name="title" value="{{ $data['product']->title, old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="title">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="product-description">Product Description <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5">{{ old('description', $data['product']->description) }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="product_details">Product Details <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('product_details') is-invalid @enderror CKeditor" name="product_details" rows="3">{{ old('description', $data['product']->product_details) }}</textarea>
                                @error('product_details')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="product-category">Categories <span class="text-danger">*</span></label>
                                <select class="form-control select2" name="category_id">
                                    <option value="">Select</option>
                                    @foreach($categories as $id => $category)
                                    <option value="{{ $category->id }}" @if($category->id == $data['product']->category_id) selected @endif>
                                        {{ $category->category_name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="product-price">Price <span class="text-danger">*</span></label>
                                <input type="text" value="{{ $data['product']->price, old('price')}}" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Enter amount">
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="mb-2">Status <span class="text-danger">*</span></label>
                                <br />
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio1" value="In Stock" name="status" @if($data['product']->status == 'In Stock') checked @endif>
                                    <label for="inlineRadio1"> In Stock </label>
                                </div>
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio2" value="Out of Stock" name="status" @if($data['product']->status == 'Out of Stock') checked @endif>
                                    <label for="inlineRadio2"> Out of Stock </label>
                                </div>
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio3" value="Coming Soon" name="status" @if($data['product']->status == 'Coming Soon') checked @endif>
                                    <label for="inlineRadio3"> Coming Soon </label>
                                </div>
                                @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                        </div> <!-- end card-box -->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card-box">
                            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>
                            @dump($data['product']->image_url_1)
                            <img src="{{ asset('uploads/' . $data['product']->image_url_1) }}" alt="Product Image" width="100">
                            <img src="{{ asset('uploads/' . $data['product']->image_url_2) }}" alt="Product Image" width="100">
                            <img src="{{ asset('uploads/' . $data['product']->image_url_3) }}" alt="Product Image" width="100">
                            <img src="{{ asset('uploads/' . $data['product']->image_url_4) }}" alt="Product Image" width="100">

                            <div class="fallback">
                                <!-- File input for updating the image -->
                                <input type="file" name="image_url_1" />
                            </div>
                            <div class="fallback">
                                <input name="image_url_2" type="file" />
                            </div>
                            <div class="fallback">
                                <input name="image_url_3" type="file" />
                            </div>
                            <div class="fallback">
                                <input name="image_url_4" type="file" />
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
                                <a href="{{route('products')}}"><button type="button" class="btn w-sm btn-danger waves-effect waves-light">Cancel</button></a>
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