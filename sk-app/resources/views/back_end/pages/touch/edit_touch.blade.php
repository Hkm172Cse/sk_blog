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

                <form action="{{route('getintouch.update')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Input Field -->
                    <div class="col-md-12 techics-form-group">
                        <label for="input_field">Name</label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="name" id="input_field" value="{{$val->name}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Input Field -->
                    <div class="col-md-12 techics-form-group">
                        <label for="input_field">Title </label>
                        <input type="text" name="title" id="input_field" value="{{$val->title}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                      <!-- Button -->
                      <div class="col-md-12 techics-form-group">
                        <label for="input_field">Button name </label>
                        <input type="text" name="button" id="input_field" value="{{$val->button}}"
                            class="form-control" placeholder="Enter Input Field">
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