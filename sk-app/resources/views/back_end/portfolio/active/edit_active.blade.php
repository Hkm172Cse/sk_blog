@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 mb-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About page banner edit</h4>
                @foreach ($errors->all() as $error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach

                <form action="{{route('active.portfolio.update')}}" class="row mt-2" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $val)
                    

                     <!-- Textarea -->
                     <input type="hidden" name="edit_id" value="{{$val->id}}"/>
                   <div class="col-md-12 techics-form-group">
                        <label for="textarea">Portfolio</label>
                        <textarea id="editor" class="form-control" name="name" id="textarea" cols="30"
                            rows="10">{{$val->name}}</textarea>
                            
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