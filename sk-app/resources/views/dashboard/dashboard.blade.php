@extends('layout.app')
@section('content')
<div class="container-fluid"></div>
<main class="page-content">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <div class="form-group">
                        <div class='input-group date' id='startDate'>
                            <input type='text' class="form-control date-p" name="startDate" />
                            <span class="input-group-addon input-group-text date-btn"><span
                                    class="fa fa-calendar "></span>
                            </span>
                        </div>
                    </div>

                </div>
                <h4 class="page-title d-xs-none">Dashboard</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-5 col-lg-6 ">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card widget-flat shadow">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="fa fa-users widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0 c-t fw-400 mb-2" title="Number of Customers">Customers
                            </h5>
                            <h3 class="mt-3 mb-3 text-muted c-m mb-2 mt-2">45,222</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success c-p me-2"><i class="fa fa-arrow-up mr-2 "
                                        aria-hidden="true">5.20%</i></span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card widget-flat shadow">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="fa fa-cart-arrow-down widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal c-t mt-0" title="Number of Orders">
                                Orders</h5>
                            <h3 class="mt-3 mb-3 c-m text-muted">45,222</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger c-p me-2"><i class="fa fa-arrow-down"
                                        aria-hidden="true">1.28%</i></span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card widget-flat shadow">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="bi bi-graph-up-arrow widget-icon"></i>
                            </div>
                            <h5 class="text-muted c-t fw-normal mt-0" title="Number of Growth">
                                Growth</h5>
                            <h3 class="mt-3 mb-3 c-m text-muted">40.20%</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success  c-p me-2"><i class="fa fa-arrow-up mr-2 "
                                        aria-hidden="true">6.20%</i></span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card widget-flat shadow">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="bi bi-currency-dollar widget-icon"></i>
                            </div>
                            <h5 class="text-muted c-t fw-normal mt-0" title="Number of Revenue">
                                Revenue</h5>
                            <h3 class="mt-3 mb-3 c-m text-muted">7,452$</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger c-p  me-2"><i class="fa fa-arrow-down"
                                        aria-hidden="true">8.00%</i></span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-6 ">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h3 class="card-title"></h3>
                                    <h6 class="card-subtitle">
                                        Ample Admin Vs Pixel Admin
                                    </h6>
                                </div>
                                <div class="ms-auto">
                                    <ul class="list-inline">
                                        <li class="list-inline-item px-2">
                                            <h6 class="text-top">
                                                <i class="fa fa-circle font-10 me-2 color1"></i>Ample
                                            </h6>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <h6 class="text-top">
                                                <i class="fa fa-circle font-10 me-2 color2"></i>Pixel
                                            </h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="sales-overview">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-5 col-lg-6 ">
            <div class="card shadow">
                <div class="card-body mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="articles card">
                                            <div class="card-close">
                                                <div class="dropdown">
                                                    <button type="button" id="closeCard4" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        class="dropdown-toggle"><i
                                                            class="fa fa-ellipsis-v"></i></button>
                                                    <div aria-labelledby="closeCard4"
                                                        class="dropdown-menu dropdown-menu-right has-shadow">
                                                        <a href="#" class="dropdown-item remove"> <i
                                                                class="fa fa-times"></i>Close</a><a href="#"
                                                            class="dropdown-item edit">
                                                            <i class="fa fa-gear"></i>Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header d-flex align-items-center">
                                                <h2 class="h3">Trending Articles </h2>
                                                <div class="badge badge-rounded bg-green">4 New
                                                </div>
                                            </div>
                                            <div class="card-body no-padding">
                                                <div class="item d-flex align-items-center">
                                                    <div class="image"><img
                                                            src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                            alt="..." class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="text"><a href="#">
                                                            <h3 class="h5">Lorem Ipsum Dolor
                                                            </h3>
                                                        </a><small>Posted on 5th June 2017 by
                                                            Aria Smith. </small></div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="image"><img
                                                            src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                            alt="..." class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="text"><a href="#">
                                                            <h3 class="h5">Lorem Ipsum Dolor
                                                            </h3>
                                                        </a><small>Posted on 5th June 2017 by
                                                            Frank Williams. </small></div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="image"><img
                                                            src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                                            alt="..." class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="text"><a href="#">
                                                            <h3 class="h5">Lorem Ipsum Dolor
                                                            </h3>
                                                        </a><small>Posted on 5th June 2017 by
                                                            Ashley Wood. </small></div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="image"><img
                                                            src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                            alt="..." class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="text"><a href="#">
                                                            <h3 class="h5">Lorem Ipsum Dolor
                                                            </h3>
                                                        </a><small>Posted on 5th June 2017 by
                                                            Jason Doe. </small></div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="image"><img
                                                            src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                            alt="..." class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="text"><a href="#">
                                                            <h3 class="h5">Lorem Ipsum Dolor
                                                            </h3>
                                                        </a><small>Posted on 5th June 2017 by
                                                            Sam Martinez. </small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-6">
            <div class="card shadow">
                <h2 class="text-center mb-5 fs-4 fw-400 mt-5">Project Timeline</h2>
                <div class="timeline-centered timeline-sm ">
                    <article class="timeline-entry">
                        <div class="timeline-entry-inner">
                            <time datetime="2014-01-10T03:45" class="timeline-time"><span>01-10-2022
                                </span><span></span></time>
                            <div class="timeline-icon bg-violet"><i class="fa fa-exclamation"></i>
                            </div>
                            <div class="timeline-label shadow">
                                <h4 class="timeline-title">Price:200</h4>

                                <p>202210010001</p>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-entry left-aligned">
                        <div class="timeline-entry-inner">
                            <time datetime="2014-01-10T03:45"
                                class="timeline-time"><span>01-12-2022</span><span></span></time>
                            <div class="timeline-icon bg-green"><i class="bi bi-people"></i>
                            </div>
                            <div class="timeline-label bg-green text-right shadow">
                                <h4 class="timeline-title">Price:2000</h4>
                                <p>202210010001</p>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-entry">
                        <div class="timeline-entry-inner">
                            <time datetime="2014-01-09T13:22"
                                class="timeline-time"><span>02-12-2022</span><span></span></time>
                            <div class="timeline-icon bg-orange"><i class="fa fa-paper-plane"></i>
                            </div>
                            <div class="timeline-label bg-orange shadow">
                                <h4 class="timeline-title">Price:2000</h4>

                                <p>202210010001</p>
                            </div>
                        </div>

                    </article>
                    <article class="timeline-entry left-aligned">
                        <div class="timeline-entry-inner">
                            <time datetime="2014-01-10T03:45"
                                class="timeline-time"><span>01-12-2022</span><span></span></time>
                            <div class="timeline-icon bg-green"><i class="bi bi-people"></i>
                            </div>
                            <div class="timeline-label bg-green text-right shadow">
                                <h4 class="timeline-title">Price:2000</h4>
                                <p>202210010001</p>
                            </div>
                        </div>
                        <div class="timeline-entry-inner">
                            <div style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);"
                                class="timeline-icon"><i class="fa fa-plus"></i></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow">
                <div class="card-tittle mt-4">
                    <h4 class="text-center">Monthly Sales</h4>
                    <p class="text-muted text-center">Month of Oct 2022</p>
                    <div class="card-body">
                        <div id="monthlySals">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-5 col-lg-6 ">
            <div class="card shadow">
                <div class="card-title  ml-5 mt-4">
                    <h4>User Control</h4>
                </div>
                <div class="card-body">
                    <div id="pieChart"></div>
                    <button type="button" class="btn btn-outline-danger btn-sm" id="add">Add</button>
                    <button type="button" class="btn btn-outline-danger btn-sm" id="remove">Remove</button>
                    <button type="button" class="btn btn-outline-danger btn-sm" id="reset">Reset</button>
                    <button type="button" class="btn btn-outline-danger btn-sm" id="randomize">Randomize</button>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-6">
            <div class="card shadow">
                <h4 class="text-center pt-4">Quick Summery
                </h4>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <div class="card widget-flat border ">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="bi bi-cash-coin widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0 c-t fw-400 mb-2" title="Number of Customers">This
                                    Month Sales</h5>
                                <h3 class="mt-3 mb-3 text-muted c-m mb-2 mt-2">5,240 tk</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success c-p me-2"><i class="fa fa-arrow-up mr-2 "
                                            aria-hidden="true">5.20%</i></span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card widget-flat border ">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="fa fa-cart-arrow-down widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal c-t mt-0" title="Number of Orders">
                                    Orders</h5>
                                <h3 class="mt-3 mb-3 c-m text-muted">45,222</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger c-p me-2"><i class="fa fa-arrow-down"
                                            aria-hidden="true">1.28%</i></span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card widget-flat border">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="bi bi-graph-up-arrow widget-icon"></i>
                                </div>
                                <h5 class="text-muted c-t fw-normal mt-0" title="Number of Growth">
                                    Growth</h5>
                                <h3 class="mt-3 mb-3 c-m text-muted">40.20%</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success  c-p me-2"><i class="fa fa-arrow-up mr-2 "
                                            aria-hidden="true">6.20%</i></span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card widget-flat border">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="bi bi-currency-dollar widget-icon"></i>
                                </div>
                                <h5 class="text-muted c-t fw-normal mt-0" title="Number of Revenue">
                                    Revenue</h5>
                                <h3 class="mt-3 mb-3 c-m text-muted">7,452$</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger c-p  me-2"><i class="fa fa-arrow-down"
                                            aria-hidden="true">8.00%</i></span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card ">
                <div class="card-tittle">
                    <div class="card-body">
                        <div id="trafic"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
</div>
@endsection