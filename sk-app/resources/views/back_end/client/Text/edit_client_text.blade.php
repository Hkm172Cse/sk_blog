@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About page banner edit</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('client_page.text.update')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    


                    <!-- Image -->
                    <input type="hidden" name="edit_id" value="{{$val->id}}"/>
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
                            src="{{asset('images/client/'.$val->image)}}" />
                    </div>
                   <!-- Textarea -->
                   <div class="col-md-12 techics-form-group">
                        <label for="textarea">Description </label>
                        <textarea class="form-control" name="des" id="textarea" cols="30"
                            rows="10">{{$val->des}}</textarea>
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