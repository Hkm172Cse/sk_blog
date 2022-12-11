@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Client meta</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('update.client.meta')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Name -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Tag </label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="tag" id="input_field" value="{{$val->tag}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Title -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Title</label>
                        <input type="text" name="title" id="input_field" value="{{$val->title}}"
                            class="form-control" placeholder="Enter Input Field">
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