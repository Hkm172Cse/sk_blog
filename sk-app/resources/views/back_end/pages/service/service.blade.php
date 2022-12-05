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
                        <h4 class="card-title">Service left section</h4>
                    </div>
                    <div class="col-md-6 text-right mb-3">
                        <a href="{{route('add.service')}}">
                            <button type="button" class="btn btn-sm btn-outline-orange">
                                Create
                                <i class="mdi mdi-play-circle ml-1"></i>
                            </button>
                        </a>
                    </div>
                </div>

                @if (\Session::has('new_service'))
                <div class="page-success-popup-box">
                    <li class="page-success-pop-up">
                        {!! \Session::get('new_service') !!}
                    </li>
                </div>
                @endif

                @if (\Session::has('del_msg'))
                <div class="page-success-popup-box">
                    <li class="page-success-pop-up">
                        {!! \Session::get('del_msg') !!}
                    </li>
                </div>
                @endif


                @if (\Session::has('update_suc'))
                <div class="pop-up-box alert-success">
                    <li class="pop-up">
                        {!! \Session::get('update_suc') !!}
                    </li>
                </div>
                @endif





                <div class="col-md-12 table-responsive">
                    <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Section</th>
                                <th>title</th>
                                <th>Description</th>
                                <th>Button</th>
                                <th>Image</th>
                                <th>service title</th>
                                <th>service_description</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0
                            @endphp
                            @foreach($data as $val)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$val->section}}</td>
                                <td>{{substr($val->title, 0, 20)}}</td>
                                <td>{{substr($val->des, 0, 20)}}</td>
                                <td>{{$val->service_btn}}</td>
                                <td><img src="{{asset('images/service/'.$val->image)}}" /></td>
                                <td>{{$val->service_title}}</td>
                                <td>{{substr($val->service_des,0,20)}}</td>
                                <td>
                                    <a href="{{route('service.edit.page',['id'=>$val->id])}}">
                                        <button class="btn btn-secondary btn-icon-text"><i
                                                class='fa fa-edit'></i></button>
                                    </a>
                                    ||
                                    <a href="{{route('service.delete',['id'=>$val->id])}}"
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
    <!--Right Side-->
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Service right section</h4>
                    </div>
                    <div class="col-md-6 text-right mb-3">
                        <a href="{{route('add.service')}}">
                            <button type="button" class="btn btn-sm btn-outline-orange">
                                Create
                                <i class="mdi mdi-play-circle ml-1"></i>
                            </button>
                        </a>
                    </div>
                </div>

                @if (\Session::has('new_service'))
                <div class="page-success-popup-box">
                    <li class="page-success-pop-up">
                        {!! \Session::get('new_service') !!}
                    </li>
                </div>
                @endif

                @if (\Session::has('del_msg'))
                <div class="page-success-popup-box">
                    <li class="page-success-pop-up">
                        {!! \Session::get('del_msg') !!}
                    </li>
                </div>
                @endif


                @if (\Session::has('update_r_suc'))
                <div class="pop-up-box alert-success">
                    <li class="pop-up">
                        {!! \Session::get('update_r_suc') !!}
                    </li>
                </div>
                @endif





                <div class="col-md-12 table-responsive">
                    <table id="example2" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>title</th>
                                <th>Link</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0
                            @endphp
                            @foreach($r_data as $r_val)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$r_val->name}}</td>
                                <td>{{$r_val->title}}</td>
                                <td>{{$r_val->link}}</td>
                                <td>
                                    <a href="{{route('service.edit.r_page',['id'=>$val->id])}}">
                                        <button class="btn btn-secondary btn-icon-text"><i
                                                class='fa fa-edit'></i></button>
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