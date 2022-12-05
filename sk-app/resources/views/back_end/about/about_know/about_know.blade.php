@extends('layout.app')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item"><a href="#">Data</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span>Files</span></li>
    </ol>
</nav>

<div class="row mb-2">
    <div class="col-md-6 profile-btn">
        <h4 class="techics-system-title"><strong>Welcome</strong> <span class="techics-text-custom">IT Support</span>
        </h4>
    </div>
    <div class="col-md-6 techics-profile-button">
        <div class="dropdown profile-btn" style="margin-left:0px;margin-bottom:2px;">
            <button class="btn btn-sm btn-outline-orange dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cog mr-2"></i> Create New
            </button>
            <div class="dropdown-menu">
                <a class="techics-dropdown-item new_time_entry" href="#">Time Entry</a>
                <a class="techics-dropdown-item new_expense_entry" href="#">Expense Entry</a>
                <a class="techics-dropdown-item new_event_entry" href="#">Email Log Entry</a>
                <a class="techics-dropdown-item new_phone_log" href="#">Phone Log Entry</a>
                <a class="techics-dropdown-item" href="new_case.php">Case</a>
                <a class="techics-dropdown-item" href="external-calendar.php">Calendar</a>
                <a class="techics-dropdown-item" href="external-tasks.php">Task</a>
            </div>
            <a href="settings.php">
                <button type="button" class="btn btn-outline-orange btn-sm">
                    <i class="fab fa-codepen customiz-set"></i>
                    Customization
                </button>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Know about us images</h4>
                    </div>
                    <div class="col-md-6 text-right mb-3">
                        <a href="{{route('new.know_aboutus')}}">
                            <button type="button" class="btn btn-sm btn-outline-orange">
                                Create
                                <i class="mdi mdi-play-circle ml-1"></i>
                            </button>
                        </a>
                    </div>
                </div>

                @if (\Session::has('insert_content'))
                <div class="alert alert-success">
                    {!! \Session::get('insert_content') !!}
                </div>
                @endif

                @if (\Session::has('del_msg_left'))
                <div class="alert alert-success">
                    {!! \Session::get('del_msg_left') !!}
                </div>
                @endif


                @if (\Session::has('update_content'))
                <div class="alert alert-success">
                    {!! \Session::get('update_content') !!}
                </div>
                @endif
                <div class="col-md-12 table-responsive">
                    <table id="example2" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Image</th>
                                <th>Image Title</th>
                                <th>Date</th>
                                <th>Comments</th>
                                <th>Title</th>
                                <th>Descreiption</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0
                            @endphp
                            @foreach($content_data as $val)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$val->image}}</td>
                                <td><img src="{{asset('images/about/'.$val->image)}}"/></td>
                                <td>{{$val->date}}</td>
                                <td>{{$val->comments}}</td>
                                <td>{{$val->title}}</td>
                                <td>{{substr($val->des, 0,20)}}</td>
                                <td>
                                    <a href="{{route('aboutus.know.edit',['id'=>$val->id])}}">
                                        <button class="btn btn-secondary btn-icon-text"><i
                                                class='fa fa-edit'></i></button>
                                    </a>
                                    ||
                                    <a href=""
                                        onClick="return confirm('Are you sure want to delete this recored?')">
                                        <button class="btn btn-danger btn-icon-text"><i
                                                class='fa fa-trash'></i></button>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Left data table-->
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Know about us text</h4>
                    </div>
                    <div class="col-md-6 text-right mb-3">
                        <a href="{{route('partner.logo.add')}}">
                            <button type="button" class="btn btn-sm btn-outline-orange">
                                Create
                                <i class="mdi mdi-play-circle ml-1"></i>
                            </button>
                        </a>
                    </div>
                </div>

                @if (\Session::has('insert_logo'))
                <div class="alert alert-success">
                    {!! \Session::get('insert_logo') !!}
                </div>
                @endif

                @if (\Session::has('del_msg_left'))
                <div class="alert alert-success">
                    {!! \Session::get('del_msg_left') !!}
                </div>
                @endif


                @if (\Session::has('update_heading'))
                <div class="alert alert-success">
                    {!! \Session::get('update_heading') !!}
                </div>
                @endif
                <div class="col-md-12 table-responsive">
                    <table id="example2" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0
                            @endphp
                            @foreach($heading_data as $heading_data)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$heading_data->title}}</td>
                                <td>{{substr($heading_data->des, 0, 20)}}</td>
                                <td>
                                    <a href="{{route('heading.edit.know_about',['id'=>$heading_data->id])}}">
                                        <button class="btn btn-secondary btn-icon-text"><i
                                                class='fa fa-edit'></i></button>
                                    </a>
                                    ||
                                    <a href=""
                                        onClick="return confirm('Are you sure want to delete this recored?')">
                                        <button class="btn btn-danger btn-icon-text"><i
                                                class='fa fa-trash'></i></button>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection