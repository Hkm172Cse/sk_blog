@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Home page banner edit</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('edit_submit')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Input Field -->
                    <div class="col-md-12 techics-form-group">
                        <label for="input_field">Sort Description </label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="sort_des" id="input_field" value="{{$val->sort_des}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Textarea -->
                    <div class="col-md-12 techics-form-group">
                        <label for="textarea">Description </label>
                        <textarea class="form-control" name="des" id="textarea" cols="30"
                            rows="10">{{$val->des}}</textarea>
                    </div>



                    <!-- File Upload -->
                    <div class="col-md-6 techics-form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default">
                        <input type="hidden" value="banner" name="image_name" />
                        <div class="techics-input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="techics-input-group-append">
                                <button class="file-upload-browse btn btn-sm btn-orange" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="col-md-6 techics-form-group text-center">
                        <img style="width:100px; height:100px; border-radius:20px"
                            src="{{asset('images/banner/'.$val->image)}}" />
                    </div>

                    <!--Button one name-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Button one name </label>

                        <input type="text" name="btn_one_name" value="{{$val->btn_one}}" id="input_field"
                            class="form-control" placeholder="button one name">
                    </div>

                    <!--Button one link-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Button one Link </label>

                        <input type="text" name="btn_one_link" value="{{$val->btn_one_link}}" id="input_field"
                            class="form-control" placeholder="button one Link">
                    </div>

                    <!--Button two name-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Button two name </label>

                        <input type="text" name="btn_two_name" value="{{$val->btn_two}}" id="input_field"
                            class="form-control" placeholder="button two name">
                    </div>

                    <!--Button two link-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Button two link </label>

                        <input type="text" name="btn_two_link" value="{{$val->btn_two_link}}" id="input_field"
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