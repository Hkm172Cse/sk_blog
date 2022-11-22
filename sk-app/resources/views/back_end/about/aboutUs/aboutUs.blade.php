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
                        <h4 class="card-title">Footer Left Side</h4>
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


                @if (\Session::has('update_image'))
                <div class="alert alert-success">
                    {!! \Session::get('update_image') !!}
                </div>
                @endif
                <div class="col-md-12 table-responsive">
                    <table id="example2" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Image One</th>
                                <th>Image Two</th>
                                <th>Image three</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0
                            @endphp
                            @foreach($image_data as $image_data)
                            <tr>
                                <td>{{++$i}}</td>
                                <td><img src="{{asset('images/about/'.$image_data->image_one)}}"/></td>
                                <td><img src="{{asset('images/about/'.$image_data->image_two)}}"/></td>
                                <td><img src="{{asset('images/about/'.$image_data->image_three)}}"/></td>
                                <td>
                                    <a href="{{route('about_page.aboutus_image.edit',['id'=>$image_data->id])}}">
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
                        <h4 class="card-title">Page Title</h4>
                    </div>
                    <div class="col-md-6 text-right mb-3">
                        <a href="{{route('new.right_footer')}}">
                            <button type="button" class="btn btn-sm btn-outline-orange">
                                Create
                                <i class="mdi mdi-play-circle ml-1"></i>
                            </button>
                        </a>
                    </div>
                </div>

                @if (\Session::has('insert_right'))
                <div class="alert alert-success">
                    {!! \Session::get('insert_right') !!}
                </div>
                @endif

                @if (\Session::has('del_msg_right'))
                <div class="alert alert-success">
                    {!! \Session::get('del_msg_right') !!}
                </div>
                @endif


                @if (\Session::has('update_partner'))
                <div class="alert alert-success">
                    {!! \Session::get('update_partner') !!}
                </div>
                @endif
                <div class="col-md-12 table-responsive">
                    <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0
                            @endphp
                            @foreach($text_data as $text_data)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$text_data->name}}</td>
                                <td>{{$text_data->title}}</td>
                                <td>{{substr($text_data->des, 0,20)}}</td>
                                <td>
                                    <a href="">
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