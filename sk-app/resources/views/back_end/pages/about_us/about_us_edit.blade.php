@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('about_us_edit')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Title Field -->
                    <div class="col-md-3 techics-form-group">
                        <label for="input_field">Title </label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="title" id="input_field" value="{{$val->title}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Sort description -->
                    <div class="col-md-9 techics-form-group">
                        <label for="input_field">Sort Description </label>
                        <input type="text" name="sort_des" id="input_field" value="{{$val->sort_des}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 techics-form-group">
                        <label for="textarea">Description </label>
                        <textarea class="form-control" name="des" id="textarea" cols="30"
                            rows="10">{{$val->des}}</textarea>
                    </div>



                    <!-- Image One -->
                    <div class="col-md-6 techics-form-group">
                        <label>Image One</label>
                        <input type="file" name="image_one" class="file-upload-default">
                        <input type="hidden" value="about_one" name="image_one_name" />
                        <div class="techics-input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="techics-input-group-append">
                                <button class="file-upload-browse btn btn-sm btn-orange" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <!-- Set Iamge one -->
                    <div class="col-md-6 techics-form-group text-center">
                        <img style="width:100px; height:100px; border-radius:20px"
                            src="{{asset('images/about_us/'.$val->img_one)}}" />
                    </div>

                      <!-- Image Two -->
                      <div class="col-md-6 techics-form-group">
                        <label>Image Two</label>
                        <input type="file" name="image_two" class="file-upload-default">
                        <input type="hidden" value="about_two" name="image_two_name" />
                        <div class="techics-input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="techics-input-group-append">
                                <button class="file-upload-browse btn btn-sm btn-orange" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <!-- Set Iamge Two -->
                    <div class="col-md-6 techics-form-group text-center">
                        <img style="width:100px; height:100px; border-radius:20px"
                            src="{{asset('images/about_us/'.$val->img_two)}}" />
                    </div>

                    <!--Button two link-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Link</label>

                        <input type="text" name="about_link" value="{{$val->link}}" id="input_field"
                            class="form-control" placeholder="button two link">
                    </div>

                    @endforeach
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