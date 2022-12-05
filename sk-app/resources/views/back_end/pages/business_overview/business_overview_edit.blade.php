@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Business statistics edit</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('business_overview.update')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    <!-- Project -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Project</label>
                        <input type="hidden" name="edit_id" value="{{$val->id}}" />
                        <input type="text" name="project" id="input_field" value="{{$val->project}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Project Number -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Project Number</label>
                        <input type="text" name="project_num" id="input_field" value="{{$val->project_num}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Cutomer -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Cutomer</label>
                        <input type="text" name="customer" id="input_field" value="{{$val->customer}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Customer Number -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Customer Number</label>
                        <input type="text" name="customer_num" id="input_field" value="{{$val->customer_num}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Data -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Data</label>
                        <input type="text" name="data" id="input_field" value="{{$val->data}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Data Number -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Data Number</label>
                        <input type="text" name="data_num" id="input_field" value="{{$val->data_num}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Class Base -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Class Base</label>
                        <input type="text" name="class_base" id="input_field" value="{{$val->class_base}}"
                            class="form-control" placeholder="Enter Input Field">
                    </div>

                    <!-- Class Base Number -->
                    <div class="col-md-6 techics-form-group">
                        <label for="input_field">Class Base Number </label>
                        <input type="text" name="class_base_num" id="input_field" value="{{$val->class_base_num}}"
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