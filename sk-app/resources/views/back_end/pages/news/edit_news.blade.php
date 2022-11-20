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

                <form action="{{route('news.update')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Input Title -->
                    <div class="col-md-12 techics-form-group">
                        <label for="input_field">Title</label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="title" id="input_field" value="{{$val->title}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- News -->
                    <div class="col-md-12 techics-form-group">
                        <label for="textarea">News </label>
                        <textarea class="form-control" name="news" id="textarea" cols="30"
                            rows="10">{{$val->news}}</textarea>
                    </div>



                    <!-- File Upload -->
                    <div class="col-md-6 techics-form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default">
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
                            src="{{asset('images/news/'.$val->image)}}" />
                    </div>

                    <!--Date one name-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Date</label>

                        <input type="text" name="date" value="{{$val->date}}" id="input_field"
                            class="form-control" placeholder="button one name">
                    </div>

                    <!--Tag-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Tag</label>

                        <input type="text" name="tag" value="{{$val->tag}}" id="input_field"
                            class="form-control" placeholder="button one Link">
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