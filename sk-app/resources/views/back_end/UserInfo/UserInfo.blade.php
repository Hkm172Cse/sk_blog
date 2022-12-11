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
                        <h4 class="card-title">User informations</h4>
                    </div>
                    <div class="col-md-6 text-right mb-3">
                        <a href="#">
                            <button type="button" class="btn btn-sm btn-outline-orange">
                                Create
                                <i class="mdi mdi-play-circle ml-1"></i>
                            </button>
                        </a>
                    </div>
                </div>

                @if (\Session::has('insert'))
                <div class="page-success-popup-box">
                    <li class="page-success-pop-up">
                        {!! \Session::get('insert') !!}
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


                @if (\Session::has('update'))
                <div class="pop-up-box alert-success">
                    <li class="pop-up">
                        {!! \Session::get('update') !!}
                    </li>
                </div>
                @endif





                <div class="col-md-12 table-responsive">
                    <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Message</th>
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
                                <td>{{$val->name}}</td>
                                <td>{{$val->phone}}</td>
                                <td>{{$val->email}}</td>
                                <td>{{substr($val->message, 0, 20)}}</td>
                                <td>

                                    <button type="button" data-toggle="modal" edit_id="{{$val->id}}"
                                        data-target="#emailView"
                                        class="btn btn-outline-warning btn-icon-text viewEmailInfo"><i
                                            class='fa fa-eye'></i>
                                    </button>
                                    ||
                                    <a href="{{route('touch.user.delete',['id'=>$val->id])}}"
                                        onClick="return confirm('Are you sure want to delete this recored?')">
                                        <button class="btn btn-danger btn-icon-text"><i
                                                class='fa fa-trash'></i></button>
                                    </a>
                                    ||
                                    <button type="button" data-toggle="modal" edit_id="{{$val->id}}"
                                        data-target="#emailModal"
                                        class="btn btn-outline-info btn-icon-text viewEmailInfo"><i
                                            class='fa fa-envelope'></i>
                                    </button>



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

<!--Modal Code-->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="emailView" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>user name: <span id="userName"></span></h4>
                <p>Contact Number: <span id="phone"></span></p>
                <p> Email: <span id="email"></span></p>
                <h3></h3>
                <p><b>Message</b>: <span id="msg"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Modal Code -->

<!--Email Modal Code -->

<div class="modal fade" id="emailModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Send Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!--form-->

                
                    <p> <b>To</b> : <span id="sendTo"></span></p>
                    <p> <b>Subject :</b> Reply- <span id="subject"></span></p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>

                        <div class="col-md-12 techics-form-group">
                            <textarea class="form-control" id="text" id="textarea" cols="30" rows="7"></textarea>
                        </div>
                    </div>



                

                <!--form-->
            </div>

            <div class="modal-footer">
                <button type="button" id="send" class="btn btn-primary" data-dismiss="modal">Send</button>
            </div>
        </div>
    </div>
</div>
<!-- Email Modal Code -->
@endsection