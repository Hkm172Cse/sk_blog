@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Left Side Link Edit</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('left_footer.update')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Name -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Name</label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="name" id="input_field" value="{{$val->name}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Link Field -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Link </label>
                        <input type="text" name="link" id="input_field" value="{{$val->link}}"
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