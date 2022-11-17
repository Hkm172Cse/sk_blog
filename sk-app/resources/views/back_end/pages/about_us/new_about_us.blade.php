@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Insert About Us</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('new.about_us')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                   
                    <!-- Title Field -->
                    <div class="col-md-3 techics-form-group">
                        <label for="input_field">Title </label>
                        <input type="text" name="title" id="input_field" class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Sort description -->
                    <div class="col-md-9 techics-form-group">
                        <label for="input_field">Sort Description </label>
                        <input type="text" name="sort_des" id="input_field" class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 techics-form-group">
                        <label for="textarea">Description </label>
                        <textarea class="form-control" name="des" id="textarea" cols="30"
                            rows="7"></textarea>
                    </div>



                    <!-- Image One -->
                    <div class="col-md-6 techics-form-group">
                        <label>Image One</label>
                        <input type="file" name="image_one" class="file-upload-default">
                        <div class="techics-input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="techics-input-group-append">
                                <button class="file-upload-browse btn btn-sm btn-orange" type="button">Upload</button>
                            </span>
                        </div>
                    </div>

                      <!-- Image Two -->
                      <div class="col-md-6 techics-form-group">
                        <label>Image Two</label>
                        <input type="file" name="image_two" class="file-upload-default">
                        <div class="techics-input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="techics-input-group-append">
                                <button class="file-upload-browse btn btn-sm btn-orange" type="button">Upload</button>
                            </span>
                        </div>
                    </div>

                    <!--About us link-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Link</label>

                        <input type="text" name="about_link" id="input_field"
                            class="form-control" placeholder="button two link">
                    </div>

                   
                    <div class="col-md-12 text-right">

                        <button type="submit" class="btn btn-sm btn-outline-orange ">
                            Update
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection