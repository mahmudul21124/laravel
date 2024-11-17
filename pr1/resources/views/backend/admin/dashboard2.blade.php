@extends('backend.master')

@section('content')
@include('backend.admin.sidebar2')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-md-0">
                <h4>School</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">School</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-xxl-12 col-xl-5">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body widget-school-stat bg-1 rounded">
                                <div class="text">
                                    <h2>2584</h2>
                                    <p>Students</p>
                                </div>
                                <div class="icon">
                                    <span><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body widget-school-stat bg-2 rounded">
                                <div class="text">
                                    <h2>42</h2>
                                    <p>Teachers</p>
                                </div>
                                <div class="icon">
                                    <span><i class="fa fa-users"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body widget-school-stat bg-3 rounded">
                                <div class="text">
                                    <h2>812</h2>
                                    <p>Attendance</p>
                                </div>
                                <div class="icon">
                                    <span><i class="fa fa-tag"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body widget-school-stat bg-4 rounded">
                                <div class="text">
                                    <h2>45</h2>
                                    <p>Course</p>
                                </div>
                                <div class="icon">
                                    <span><i class="fa fa-graduation-cap"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body widget-school-stat bg-5 rounded">
                                <div class="text">
                                    <h2>&#36;2145</h2>
                                    <p>Expenses</p>
                                </div>
                                <div class="icon">
                                    <span><i class="fa fa-money"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body widget-school-stat bg-6 rounded">
                                <div class="text">
                                    <h2>&#36;5847</h2>
                                    <p>Income</p>
                                </div>
                                <div class="icon">
                                    <span><i class="fa fa-university"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-7 col-lg-12 col-xxl-12">
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Average Students</h4>
                        <div class="form-group absolute-icon-append-widget mb-0">
                            <span class="absolute-form-icon absolute-form-icon-append">

                                <i class="fa fa-search" aria-hidden="true"></i>

                            </span>
                            <input type="text" placeholder="Search for Students" name="avstudents"
                                id="avstudents" class="form-control bg-white">
                        </div>
                    </div>
                    <div class="card-body pt-4">
                        <div class="chart">
                            <div id="count-avarage-students"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card transparent-card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-padded status-table table-responsive-fix-bgsc-big">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">No</th>
                                        <th style="width: 15%">Name</th>
                                        <th style="width: 20%">Assigned Professor</th>
                                        <th style="width: 20%">Date of Admit</th>
                                        <th style="width: 15%">Fees</th>
                                        <th>Branch</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Fleece Marigold</td>
                                        <td>Indigo Violet</td>
                                        <td class="text-muted">02/06/2018</td>
                                        <td>
                                            <span
                                                class="label label-success py-2 px-4 f-s-12 text-white">paid</span>
                                        </td>
                                        <td>
                                            <span class="mr-5">Science</span>
                                        </td>
                                        <td>
                                            <span>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title="" class="text-pale-sky"
                                                    data-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    class="text-pale-sky ml-3" data-original-title="Close">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Theodore Handle</td>
                                        <td>Niles Peppertrout</td>
                                        <td class="text-muted">04/06/2018</td>
                                        <td>
                                            <span
                                                class="label label-success py-2 px-4 f-s-12 text-white">paid</span>
                                        </td>
                                        <td>
                                            <span class="mr-5">Commerce</span>
                                        </td>
                                        <td>
                                            <span>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title="" class="text-pale-sky"
                                                    data-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    class="text-pale-sky ml-3" data-original-title="Close">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Archibald Northbottom</td>
                                        <td>Jackson Pot</td>
                                        <td class="text-muted">08/06/2018</td>
                                        <td>
                                            <span
                                                class="label label-warning py-2 px-4 f-s-12 text-white">Unpaid</span>
                                        </td>
                                        <td>
                                            <span class="mr-5">Machanical</span>
                                        </td>
                                        <td>
                                            <span>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title="" class="text-pale-sky"
                                                    data-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    class="text-pale-sky ml-3" data-original-title="Close">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Carnegie Mondover</td>
                                        <td>Samuel Serif</td>
                                        <td class="text-muted">12/06/2018</td>
                                        <td>
                                            <span
                                                class="label label-warning py-2 px-4 f-s-12 text-white">Unpaid</span>
                                        </td>
                                        <td>
                                            <span class="mr-5">Science</span>
                                        </td>
                                        <td>
                                            <span>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title="" class="text-pale-sky"
                                                    data-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    class="text-pale-sky ml-3" data-original-title="Close">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Ursula Gurnmeister</td>
                                        <td>Fletch Skinner</td>
                                        <td class="text-muted">15/06/2018</td>
                                        <td>
                                            <span
                                                class="label label-success py-2 px-4 f-s-12 text-white">Paid</span>
                                        </td>
                                        <td>
                                            <span class="mr-5">M.B.A</span>
                                        </td>
                                        <td>
                                            <span>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title="" class="text-pale-sky"
                                                    data-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    class="text-pale-sky ml-3" data-original-title="Close">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Ingredia Nutrisha</td>
                                        <td>Valentino Morose</td>
                                        <td class="text-muted">18/06/2018</td>
                                        <td>
                                            <span
                                                class="label label-warning py-2 px-4 f-s-12 text-white">Unpaid</span>
                                        </td>
                                        <td>
                                            <span class="mr-5">Machanical</span>
                                        </td>
                                        <td>
                                            <span>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title="" class="text-pale-sky"
                                                    data-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="javascript:void()" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    class="text-pale-sky ml-3" data-original-title="Close">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <nav>
                            <ul class="pagination pagination-md pagination-rounded justify-content-end">
                                <li class="page-item"><a class="page-link color-muted"
                                        href="javascript:void()">01</a>
                                </li>
                                <li class="page-item"><a class="page-link color-muted"
                                        href="javascript:void()">02</a>
                                </li>
                                <li class="page-item active"><a class="page-link color-muted"
                                        href="javascript:void()">03</a>
                                </li>
                                <li class="page-item"><a class="page-link color-muted"
                                        href="javascript:void()">04</a>
                                </li>
                                <li class="page-item"><a class="page-link color-muted"
                                        href="javascript:void()">05</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- #/ container -->
</div>

@endsection
