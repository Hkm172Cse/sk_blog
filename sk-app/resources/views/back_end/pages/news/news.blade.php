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
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">News/Blog section</h4>
                    </div>
                    <div class="col-md-6 text-right mb-3">
                        <a href="{{route('new_news')}}">
                            <button type="button" class="btn btn-sm btn-outline-orange">
                                Create
                                <i class="mdi mdi-play-circle ml-1"></i>
                            </button>
                        </a>
                    </div>
                </div>

                @if (\Session::has('insert'))
                <div class="alert alert-success">
                    {!! \Session::get('insert') !!}
                </div>
                @endif

                @if (\Session::has('delete_banner'))
                <div class="alert alert-success">
                    {!! \Session::get('delete_banner') !!}
                </div>
                @endif


                @if (\Session::has('update_suc'))
                <div class="alert alert-success">
                    {!! \Session::get('update_suc') !!}
                </div>
                @endif





                <div class="col-md-12 table-responsive">
                    <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>News</th>
                                <th>Tag</th>
                                <th>Image</th>
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
                                <td>{{$val->title}}</td>
                                <td>{{$val->date}}</td>
                                <td>{{substr($val->news, 0, 20)}}</td>
                                <td>{{$val->tag}}</td>
                                <td><img src="{{asset('images/news/'.$val->image)}}" /></td>
                                <td>
                                    <a href="{{route('news.edit',['id'=>$val->id])}}">
                                        <button class="btn btn-secondary btn-icon-text"><i class='fa fa-edit'></i></button>
                                    </a>
                                    ||
                                    <a href="{{route('news.delete',['id'=>$val->id])}}"
                                        onClick="return confirm('Are you sure want to delete this recored?')">
                                        <button class="btn btn-danger btn-icon-text"><i class='fa fa-trash'></i></button>
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