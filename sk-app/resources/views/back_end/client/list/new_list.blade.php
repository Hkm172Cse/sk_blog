@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data</h4>
                @foreach ($errors->all() as $error)
                <div class="page-error-popup-box">
                    <li class="page-error-pop-up">
                        {{ $error }}
                    </li>
                </div>
                @endforeach

                <form action="{{route('new.client.insert')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf

                    <!-- Name Field -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">name </label>
                        <input type="text" name="name" id="input_field" class="form-control"
                            placeholder="Enter Input Field">
                    </div>

                    <!-- Title Field -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Title </label>
                        <input type="text" name="title" id="input_field" class="form-control"
                            placeholder="Enter Input Field">
                    </div>




                    <!-- Image -->
                    <div class="col-md-12 techics-form-group">
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