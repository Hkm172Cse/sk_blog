@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add new Banner Data</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach
                <form action="{{route('insert_banner')}}" class="row mt-2" method="post" enctype=
                "multipart/form-data">
                    @csrf
                    <!-- Input Field -->
                    <div class="col-md-12 techics-form-group">
                        <label for="input_field">Title</label>
                        <div class="float-right text-danger">Required</div>

                        <input type="text" name="sort_des" id="input_field" class="form-control"
                            placeholder="Enter Input Field">
                    </div>

                    <!-- Textarea -->
                    <div class="col-md-12 techics-form-group">
                        <label for="textarea">Description </label>
                        <textarea class="form-control" name="des" id="textarea" cols="30" rows="10"></textarea>
                    </div>



                    <!-- File Upload -->
                    <div class="col-md-12 techics-form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default">
                        <input type="hidden" value="banner" name="image_name"/>
                        <div class="techics-input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="techics-input-group-append">
                                <button class="file-upload-browse btn btn-sm btn-orange" type="button">Upload</button>
                            </span>
                        </div>
                    </div>

                    <!--Button one name-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Button one name </label>
                        <div class="float-right text-danger">Required</div>

                        <input type="text" name="btn_one_name" id="input_field" class="form-control"
                            placeholder="button one name">
                    </div>
                    <!--Button two name-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Button two name </label>
                        <div class="float-right text-danger">Required</div>

                        <input type="text" name="btn_two_name" id="input_field" class="form-control"
                            placeholder="button two name">
                    </div>
                    <!--Button one link-->

                    <div class="col-md-12 techics-form-group">
                        <label for="input_field">Button one Link </label>
                        <div class="float-right text-danger">Required</div>

                        <input type="text" name="btn_one_link" id="input_field" class="form-control"
                            placeholder="button one Link">
                    </div>

                    <!--Button two link-->
                    <div class="col-md-12 techics-form-group">
                        <label for="input_field">Button two link </label>
                        <div class="float-right text-danger">Required</div>

                        <input type="text" name="btn_two_link" id="input_field" class="form-control"
                            placeholder="button two link">
                    </div>


                    <div class="col-md-12 text-right">

                        <button type="submit" class="btn btn-sm btn-outline-orange ">
                            Submit
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection