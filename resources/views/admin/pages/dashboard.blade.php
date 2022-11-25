@extends('admin.layout.master')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <div>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Codefox</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card bg-purple shadow-none">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-light">
                                        <i class="fe-bar-chart-line- font-28 avatar-title text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h2 class="text-white mt-2">$<span data-plugin="counterup">92,847</span>
                                        </h2>
                                        <p class="text-white mb-0 text-truncate">Statistics</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card bg-info shadow-none">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-light">
                                        <i class="fe-users font-28 avatar-title text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h2 class="text-white mt-2"><span data-plugin="counterup">56</span>k
                                        </h2>
                                        <p class="text-white mb-0 text-truncate">Users Today</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card bg-pink shadow-none">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-light">
                                        <i class="fe-shuffle font-28 avatar-title text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h2 class="text-white mt-2"><span data-plugin="counterup">2568</span>
                                        </h2>
                                        <p class="text-white mb-0 text-truncate">Request Per Minute</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card bg-success shadow-none">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-light">
                                        <i class="fe-download font-28 avatar-title text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h2 class="text-white mt-2"><span data-plugin="counterup">523</span>
                                        </h2>
                                        <p class="text-white mb-0 text-truncate">New Downloads</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-0">Statistics</h4>

                            <div dir="ltr">
                                <div id="chartss"></div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-0">Statistics</h4>

                            <div dir="ltr">
                                <div id="chartss-2"></div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card" style="height: 428px">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-0">Statistics</h4>

                            <div dir="ltr">
                                <div id="timeline-chart"></div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-0">Statistics</h4>

                            <div dir="ltr">
                                <div id="chartss-3"></div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-0">Bacis line chart</h4>

                            <div dir="ltr">
                                <div id="chartss-line1"></div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->


                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-0">comprasion line chart</h4>

                            <div dir="ltr">
                                <div id="chartss-line2"></div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-0">Statistics</h4>

                            <div dir="ltr">
                                <div id="chartss-4"></div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-3">Product License</h4>
                            <div class="position-relative">
                                <div class="row align-items-center">
                                    <div class="col-xl-5">
                                        <h5>Standard <span class="text-muted fw-normal"> - Single Site</span> <b
                                                class="px-2">-</b> <span class="text-muted">30%</span></h5>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%;"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-2">
                                    <div class="col-xl-5">
                                        <h5>Multisite <span class="text-muted fw-normal"> - Unlimited
                                                sites</span> <b class="px-2">-</b> <span class="text-muted">60%</span>
                                        </h5>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-2">
                                    <div class="col-xl-5">
                                        <h5>Extended <span class="text-muted fw-normal"> - For paying
                                                users</span> <b class="px-2">-</b> <span class="text-muted">85%</span>
                                        </h5>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%;"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-2">
                                    <div class="col-xl-5">
                                        <h5>Multisite <span class="text-muted fw-normal"> - Unlimited
                                                sites</span> <b class="px-2">-</b> <span class="text-muted">60%</span>
                                        </h5>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-2">
                                    <div class="col-xl-5">
                                        <h5>Extended <span class="text-muted fw-normal"> - For paying
                                                users</span> <b class="px-2">-</b> <span class="text-muted">85%</span>
                                        </h5>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%;"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-0">Bacis line chart</h4>

                            <div dir="ltr">
                                <div id="chart-year"></div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->


                
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="w-100">
                                    <h5 class="text-muted mt-0">Active Users</h5>
                                    <h2 class="mb-0">24,600</h2>
                                </div>
                                <i class="mdi mdi-account text-light display-3 float-end"></i>
                            </div>
                            <p class="text-muted mt-3 mb-3">Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut ratione voluptate msequi nesciunt.</p>
                            <div>
                                <a href="#" class="text-primary float-end"><i
                                        class="mdi mdi-arrow-right font-20"></i></a>
                                <span
                                    class="bg-soft-primary fw-medium text-primary rounded px-2 font-12 py-1">Excellent</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="w-100">
                                    <h5 class="text-muted mt-0">Business Profile</h5>
                                    <h2 class="mb-0">$40,340</h2>
                                </div>
                                <i class="mdi mdi-office-building text-light display-3 float-end"></i>
                            </div>
                            <p class="text-muted mt-3 mb-3">Quis autem vel eum iure reprehenderit qui in ea
                                voluptate velit esse quam nihil molestiae consequatur.</p>
                            <div>
                                <a href="#" class="text-primary float-end"><i
                                        class="mdi mdi-arrow-right font-20"></i></a>
                                <span
                                    class="bg-soft-warning fw-medium text-warning rounded px-2 font-12 py-1">Excellent</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="w-100">
                                    <h5 class="text-muted mt-0">Market Price</h5>
                                    <h2 class="mb-0">$1,180</h2>
                                </div>
                                <i class="mdi mdi-database-marker text-light display-3 float-end"></i>
                            </div>
                            <p class="text-muted mt-3 mb-3">At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                            <div>
                                <a href="#" class="text-primary float-end"><i
                                        class="mdi mdi-arrow-right font-20"></i></a>
                                <span class="bg-soft-pink fw-medium text-pink rounded px-2 font-12 py-1">Excellent</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-3">Recent Product</h4>

                            <div class="table-responsive">
                                <table class="table table-hover table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ASOS Ridley High Waist</td>
                                            <td>$79.49</td>
                                            <td>82</td>
                                            <td><span class="badge text-success border border-success">Active</span>
                                            </td>
                                            <td>$6,518.18</td>
                                        </tr>
                                        <tr>
                                            <td>Marco Lightweight Shirt</td>
                                            <td>$128.50</td>
                                            <td>37</td>
                                            <td><span class="badge text-warning border border-warning">Pending</span>
                                            </td>
                                            <td>$4,754.50</td>
                                        </tr>
                                        <tr>
                                            <td>Half Sleeve Shirt</td>
                                            <td>$39.99</td>
                                            <td>64</td>
                                            <td><span class="badge text-primary border border-primary">Done</span>
                                            </td>
                                            <td>$2,559.36</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td>184</td>
                                            <td><span class="badge text-info border border-info">Progress</span>
                                            </td>
                                            <td>$3,680.00</td>
                                        </tr>
                                        <tr>
                                            <td>Marco Shoes</td>
                                            <td>$28.49</td>
                                            <td>69</td>
                                            <td><span class="badge text-warning border border-warning">Pending</span>
                                            </td>
                                            <td>$1,965.81</td>
                                        </tr>
                                        <tr>
                                            <td>ASOS Ridley High Waist</td>
                                            <td>$79.49</td>
                                            <td>82</td>
                                            <td><span class="badge text-primary border border-primary">Done</span>
                                            </td>
                                            <td>$6,518.18</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table responsive-->
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-3">Latest Update</h4>
                            <div class="align-items-center border-bottom border-light pb-2 mb-1">
                                <h3 class="float-end my-2 py-1">45K</h3>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md rounded-circle bg-soft-info">
                                        <i class="mdi mdi-sale font-26 avatar-title text-info"></i>
                                    </div>

                                    <div class="ms-2">
                                        <h5 class="mb-1 mt-0 fw-bold">Total Sales</h5>
                                        <p class="text-muted mb-0">New Sale 20.5k</p>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center border-bottom border-light py-2 my-1">
                                <h3 class="float-end my-2 py-1">13K</h3>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md rounded-circle bg-soft-warning">
                                        <i class="mdi mdi-autorenew font-26 avatar-title text-warning"></i>
                                    </div>

                                    <div class="ms-2">
                                        <h5 class="mb-1 mt-0 fw-bold">Product Cost</h5>
                                        <p class="text-muted mb-0">Total Cost 12.3k</p>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center border-bottom border-light py-2 my-1">
                                <h3 class="float-end my-2 py-1">16M</h3>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md rounded-circle bg-soft-pink">
                                        <i class="mdi mdi-emoticon-happy-outline font-26 avatar-title text-pink"></i>
                                    </div>

                                    <div class="ms-2">
                                        <h5 class="mb-1 mt-0 fw-bold">Satisfaction Users</h5>
                                        <p class="text-muted mb-0">Total Users 26M</p>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center pt-2 mt-1">
                                <h3 class="float-end my-2 py-1">75K</h3>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md rounded-circle bg-soft-dark">
                                        <i class="mdi mdi-cash-multiple font-26 avatar-title text-dark"></i>
                                    </div>

                                    <div class="ms-2">
                                        <h5 class="mb-1 mt-0 fw-bold">Product Income</h5>
                                        <p class="text-muted mb-0">Income 65.4k</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection


@section('css')
@endsection

@section('js')
    {{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> --}}
    {{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        $(document).ready(function() {

            var options = {
                series: [{
                    name: 'Income',
                    type: 'column',
                    data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
                }, {
                    name: 'Cashflow',
                    type: 'column',
                    data: [1.1, 3, 3.1, 4, 4.1, 4.9, 6.5, 8.5]
                }, {
                    name: 'Revenue',
                    type: 'line',
                    data: [20, 29, 37, 36, 44, 45, 50, 58]
                }],
                chart: {
                    height: 350,
                    type: 'line',
                    stacked: false
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: [1, 1, 4]
                },
                title: {
                    text: 'XYZ - Stock Analysis (2009 - 2016)',
                    align: 'left',
                    offsetX: 110
                },
                xaxis: {
                    categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016],
                },
                yaxis: [{
                        axisTicks: {
                            show: true,
                        },
                        axisBorder: {
                            show: true,
                            color: '#008FFB'
                        },
                        labels: {
                            style: {
                                colors: '#008FFB',
                            }
                        },
                        title: {
                            text: "Income (thousand crores)",
                            style: {
                                color: '#008FFB',
                            }
                        },
                        tooltip: {
                            enabled: true
                        }
                    },
                    {
                        seriesName: 'Income',
                        opposite: true,
                        axisTicks: {
                            show: true,
                        },
                        axisBorder: {
                            show: true,
                            color: '#00E396'
                        },
                        labels: {
                            style: {
                                colors: '#00E396',
                            }
                        },
                        title: {
                            text: "Operating Cashflow (thousand crores)",
                            style: {
                                color: '#00E396',
                            }
                        },
                    },
                    {
                        seriesName: 'Revenue',
                        opposite: true,
                        axisTicks: {
                            show: true,
                        },
                        axisBorder: {
                            show: true,
                            color: '#FEB019'
                        },
                        labels: {
                            style: {
                                colors: '#FEB019',
                            },
                        },
                        title: {
                            text: "Revenue (thousand crores)",
                            style: {
                                color: '#FEB019',
                            }
                        }
                    },
                ],
                tooltip: {
                    fixed: {
                        enabled: true,
                        position: 'topLeft', // topRight, topLeft, bottomRight, bottomLeft
                        offsetY: 30,
                        offsetX: 60
                    },
                },
                legend: {
                    horizontalAlign: 'left',
                    offsetX: 40
                }
            };

            var chart = new ApexCharts(document.querySelector("#chartss"), options);
            chart.render();



            var options = {
                series: [{
                    name: 'Inflation',
                    data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
                }],
                chart: {
                    height: 350,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        borderRadius: 10,
                        dataLabels: {
                            position: 'top', // top, center, bottom
                        },
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function(val) {
                        return val + "%";
                    },
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ["#304758"]
                    }
                },

                xaxis: {
                    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                        "Dec"
                    ],
                    position: 'top',
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    crosshairs: {
                        fill: {
                            type: 'gradient',
                            gradient: {
                                colorFrom: '#D8E3F0',
                                colorTo: '#BED1E6',
                                stops: [0, 100],
                                opacityFrom: 0.4,
                                opacityTo: 0.5,
                            }
                        }
                    },
                    tooltip: {
                        enabled: true,
                    }
                },
                yaxis: {
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false,
                    },
                    labels: {
                        show: false,
                        formatter: function(val) {
                            return val + "%";
                        }
                    }

                },
                title: {
                    text: 'Monthly Inflation in Argentina, 2002',
                    floating: true,
                    offsetY: 330,
                    align: 'center',
                    style: {
                        color: '#444'
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#chartss-2"), options);
            chart.render();


            var options = {
                chart: {
                    type: "area",
                    height: 300,
                    foreColor: "#999",
                    stacked: true,
                    dropShadow: {
                        enabled: true,
                        enabledSeries: [0],
                        top: -2,
                        left: 2,
                        blur: 5,
                        opacity: 0.06
                    }
                },
                colors: ['#00E396', '#0090FF'],
                stroke: {
                    curve: "smooth",
                    width: 3
                },
                dataLabels: {
                    enabled: false
                },
                series: [{
                    name: 'Total Views',
                    data: generateDayWiseTimeSeries(0, 18)
                }, {
                    name: 'Unique Views',
                    data: generateDayWiseTimeSeries(1, 18)
                }],
                markers: {
                    size: 0,
                    strokeColor: "#fff",
                    strokeWidth: 3,
                    strokeOpacity: 1,
                    fillOpacity: 1,
                    hover: {
                        size: 6
                    }
                },
                xaxis: {
                    type: "datetime",
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        offsetX: 14,
                        offsetY: -5
                    },
                    tooltip: {
                        enabled: true
                    }
                },
                grid: {
                    padding: {
                        left: -5,
                        right: 5
                    }
                },
                tooltip: {
                    x: {
                        format: "dd MMM yyyy"
                    },
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left'
                },
                fill: {
                    type: "solid",
                    fillOpacity: 0.7
                }
            };

            var chart = new ApexCharts(document.querySelector("#timeline-chart"), options);

            chart.render();

            function generateDayWiseTimeSeries(s, count) {
                var values = [
                    [
                        4, 3, 10, 9, 29, 19, 25, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5
                    ],
                    [
                        2, 3, 8, 7, 22, 16, 23, 7, 11, 5, 12, 5, 10, 4, 15, 2, 6, 2
                    ]
                ];
                var i = 0;
                var series = [];
                var x = new Date("11 Nov 2012").getTime();
                while (i < count) {
                    series.push([x, values[s][i]]);
                    x += 86400000;
                    i++;
                }
                return series;
            }


            var options = {
                series: [{
                    name: 'Net Profit',
                    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                }, {
                    name: 'Revenue',
                    data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                }, {
                    name: 'Free Cash Flow',
                    data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                },
                yaxis: {
                    title: {
                        text: '$ (thousands)'
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "$ " + val + " thousands"
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#chartss-3"), options);
            chart.render();


            // chart
            var options = {
                series: [76, 67, 61, 90],
                chart: {
                    height: 390,
                    type: 'radialBar',
                },
                plotOptions: {
                    radialBar: {
                        offsetY: 0,
                        startAngle: 0,
                        endAngle: 270,
                        hollow: {
                            margin: 5,
                            size: '30%',
                            background: 'transparent',
                            image: undefined,
                        },
                        dataLabels: {
                            name: {
                                show: false,
                            },
                            value: {
                                show: false,
                            }
                        }
                    }
                },
                colors: ['#348cd4', '#ff9800', '#39539E', '#f7531f'],
                labels: ['Vimeo', 'Messenger', 'Facebook', 'LinkedIn'],
                legend: {
                    show: true,
                    floating: true,
                    fontSize: '16px',
                    position: 'left',
                    offsetX: 160,
                    offsetY: 15,
                    labels: {
                        useSeriesColors: true,
                    },
                    markers: {
                        size: 0
                    },
                    formatter: function(seriesName, opts) {
                        return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
                    },
                    itemMargin: {
                        vertical: 3
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            show: false
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#chartss-4"), options);
            chart.render();



            var options = {
                series: [{
                    name: "Desktops",
                    data: [10, 41, 35, 51, 49, 62, 69, 91, 18]
                }],
                chart: {
                    height: 350,
                    type: 'line',
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                title: {
                    text: 'Product Trends by Month',
                    align: 'left'
                },
                grid: {
                    row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                    },
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                }
            };

            var chart = new ApexCharts(document.querySelector("#chartss-line1"), options);
            chart.render();


            var options = {
                series: [{
                        name: "High - 2013",
                        data: [28, 29, 33, 36, 32, 32, 33]
                    },
                    {
                        name: "Low - 2013",
                        data: [12, 11, 14, 18, 17, 13, 13]
                    }
                ],
                chart: {
                    height: 350,
                    type: 'line',
                    dropShadow: {
                        enabled: true,
                        color: '#000',
                        top: 18,
                        left: 7,
                        blur: 10,
                        opacity: 0.2
                    },
                    toolbar: {
                        show: false
                    }
                },
                colors: ['#77B6EA', '#545454'],
                dataLabels: {
                    enabled: true,
                },
                stroke: {
                    curve: 'smooth'
                },
                title: {
                    text: 'Average High & Low Temperature',
                    align: 'left'
                },
                grid: {
                    borderColor: '#e7e7e7',
                    row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                    },
                },
                markers: {
                    size: 1
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    title: {
                        text: 'Month'
                    }
                },
                yaxis: {
                    title: {
                        text: 'Temperature'
                    },
                    min: 5,
                    max: 40
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                    floating: true,
                    offsetY: -25,
                    offsetX: -5
                }
            };

            var chart = new ApexCharts(document.querySelector("#chartss-line2"), options);
            chart.render();



            var options = {
                series: [{
                    name: 'Website Blog',
                    type: 'column',
                    data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
                }, {
                    name: 'Social Media',
                    type: 'line',
                    data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
                }],
                chart: {
                    height: 350,
                    type: 'line',
                },
                stroke: {
                    width: [0, 4]
                },
                title: {
                    text: 'Traffic Sources'
                },
                dataLabels: {
                    enabled: true,
                    enabledOnSeries: [1]
                },
                labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001',
                    '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001',
                    '11 Jan 2001', '12 Jan 2001'
                ],
                xaxis: {
                    type: 'datetime'
                },
                yaxis: [{
                    title: {
                        text: 'Website Blog',
                    },

                }, {
                    opposite: true,
                    title: {
                        text: 'Social Media'
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#chart-year"), options);
            chart.render();

        });
    </script>
@endsection
