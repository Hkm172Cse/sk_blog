@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About page banner edit</h4>
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('know_about_us.update')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Name -->

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
                            src="{{asset('images/about/'.$val->image)}}" />
                    </div>
                    <!--Image title-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Image Title </label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="image_title" id="input_field" value="{{$val->image_title}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- date -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Date</label>
                        <input type="date" name="date" id="input_field" value="{{$val->date}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    

                    <!--Button -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Comments</label>

                        <input type="text" name="comments" value="{{$val->comments}}" id="input_field"
                            class="form-control" placeholder="button two link">
                    </div>
                    <!--Title -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Comments</label>

                        <input type="text" name="title" value="{{$val->title}}" id="input_field"
                            class="form-control" placeholder="button two link">
                    </div>

                    
                    <!-- Description -->
                    <div class="col-md-12 techics-form-group">
                        <label for="textarea">Description </label>
                        <textarea class="form-control" name="des" id="textarea" cols="30"
                            rows="7">{{$val->des}}</textarea>
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