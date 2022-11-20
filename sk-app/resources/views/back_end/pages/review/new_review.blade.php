@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data</h4>
                @foreach ($errors->all() as $error)
                <div class="pop-up-box alert-success">
                    <li class="pop-up">
                        {{ $error }}
                    </li>
                </div>
                @endforeach

                <form action="{{route('insert.review')}}" class="row mt-2" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- Title Field -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Client Name </label>
                        <div class="float-right text-danger">Required</div>
                        <input type="text" name="client_name" id="input_field" class="form-control"
                            placeholder="Enter Input Field">
                    </div>

                    <!-- Sort description -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Designation</label>
                        <div class="float-right text-danger">Required</div>
                        <input type="text" name="designation" id="input_field" class="form-control"
                            placeholder="Enter Input Field">
                    </div>
                    <!-- Image -->
                    <div class="col-md-6 techics-form-group">
                        <label>Image</label>
                        <div class="float-right text-danger">Required</div>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="techics-input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="techics-input-group-append">
                                <button class="file-upload-browse btn btn-sm btn-orange" type="button">Upload</button>
                            </span>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="col-md-12 techics-form-group">
                        <label for="textarea">Review </label>
                        <textarea class="form-control" name="review" id="textarea" cols="30" rows="10"></textarea>
                    </div>


                    
                    <div class="col-md-12 text-right">

                        <button type="submit" class="btn btn-sm btn-outline-orange ">
                            Add
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection