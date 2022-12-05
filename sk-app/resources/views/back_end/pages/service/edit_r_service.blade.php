@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">service right section edit</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('r_service.update')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Name Field -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Name </label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="name" id="input_field" value="{{$val->name}}"
                            class="form-control" placeholder="Enter service name">
                    </div>

                    <!-- Title -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Title</label>
                        <input type="text" name="title" id="input_field" value="{{$val->title}}"
                            class="form-control" placeholder="Enter service title">
                    </div>

                    <!--Service Link page -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Service Page link</label>

                        <input type="text" name="link" value="{{$val->link}}" id="input_field"
                            class="form-control" placeholder="Link">
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