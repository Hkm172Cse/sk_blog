@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Home page business section edit</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('business.update')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Title Field -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Title </label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="title" id="input_field" value="{{$val->title}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Sort description -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Description</label>
                        <input type="text" name="sort_des" id="input_field" value="{{$val->sort_des}}"
                            class="form-control" placeholder="Enter Input Field">
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
                            src="{{asset('/images/business/'.$val->image)}}" />
                    </div>
                   
                    <!--Button One-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Business left button</label>

                        <input type="text" name="btn_one" value="{{$val->button_one}}" id="input_field"
                            class="form-control" placeholder="button two link">
                    </div>

                     <!--Button Two-->
                     <div class="col-md-6 techics-form-group">
                        <label for="input_field">Bisiness right button</label>

                        <input type="text" name="btn_two" value="{{$val->button_two}}" id="input_field"
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