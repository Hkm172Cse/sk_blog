@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Contact Form</h4>
                @foreach ($errors->all() as $error)
                <div class="pop-up-box alert-success">
                    <li class="pop-up">
                        {{ $error }}
                    </li>
                </div>
                @endforeach

                <form action="{{route('insert.getintouch')}}" class="row mt-2" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <!--Name-->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Name </label>
                        <div class="float-right text-danger">Required</div>
                        <input type="hidden" name="status" value="active"/>
                        <input type="text" name="name" id="input_field" class="form-control"
                            placeholder="Enter Input Field">
                    </div>

                    <!-- Title -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Title</label>
                        <div class="float-right text-danger">Required</div>
                        <input type="text" name="title" id="input_field" class="form-control"
                            placeholder="Enter Input Field">
                    </div>

                     <!-- Button -->
                     <div class="col-md-6 techics-form-group">
                        <label for="input_field">Button name</label>
                        <div class="float-right text-danger">Required</div>
                        <input type="text" name="button" id="input_field" class="form-control"
                            placeholder="Enter Input Field">
                    </div>
                    <!-- Subject Name -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Subject name</label>
                        <div class="float-right text-danger">Required</div>
                        <input type="text" name="subject" id="input_field" class="form-control"
                            placeholder="Enter Input Field">
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