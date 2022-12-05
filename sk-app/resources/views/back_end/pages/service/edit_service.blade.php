@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Service left section edit</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('service.update')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Title Field -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Section </label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="section" id="input_field" value="{{$val->section}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Sort description -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Title</label>
                        <input type="text" name="title" id="input_field" value="{{$val->title}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 techics-form-group">
                        <label for="textarea">Description </label>
                        <textarea class="form-control" name="des" id="textarea" cols="20"
                            rows="5">{{$val->des}}</textarea>
                    </div>



                    <!-- Image -->
                    <div class="col-md-6 techics-form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="techics-input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="techics-input-group-append">
                                <button class="file-upload-browse btn btn-sm btn-orange" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                   
                    <!-- Set Iamge -->
                    <div class="col-md-6 techics-form-group text-center">
                        <img style="width:100px; height:100px; border-radius:20px"
                            src="{{asset('images/service/'.$val->image)}}" />
                    </div>

                    <!--Service Title -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Service Title</label>

                        <input type="text" name="service_title" value="{{$val->service_title}}" id="input_field"
                            class="form-control" placeholder="button two link">
                    </div>

                    <!--Service Description-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Service Description</label>

                        <input type="text" name="service_des" value="{{$val->service_des}}" id="input_field"
                            class="form-control" placeholder="button two link">
                    </div>
                    <!--Button-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Service button</label>

                        <input type="text" name="service_btn" value="{{$val->service_btn}}" id="input_field"
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