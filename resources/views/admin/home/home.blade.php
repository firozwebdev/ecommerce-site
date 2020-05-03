@extends('admin.master')
 @section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Dashboard
                                <li class="breadcrumb-item"><a href="javascript: void(0);">For</a></li>
                                <li class="breadcrumb-item active">MultiVendor Ecommerce</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @if(Auth::guard('admin')->user()->hasRole(['admin']))

            <div class="row">
                <div class="col-xl-6">
                    <div class="card-box">
                        <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                        <h2 class="mt-0 font-16">Registered Customers</h2>
                        @if($customers==!null)
                        <h2 class="text-primary my-4 text-center"><span data-plugin="counterup">{{$customers->count()}} </span></h2>
                    </div>
                    @endif

                </div>

                <div class="col-xl-6">
                  <div class="card-box">
                      <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                      <h2 class="mt-0 font-35">Total  Orders</h2>
                      @if($total_orders==!null)
                      <h2 class="text-primary my-4 text-center mt-0 font-20"><span data-plugin="counterup">{{$total_orders->count()}}</span></h2>
                    @endif
                    <div class="row mb-4">
                        <div class="col-6">
                          @if($currentMonthData==!null)
                            <p class="text-muted mb-1" style="text-align:center;">This Month Orders</p>
                            <h1 class="mt-0 font-20 text-truncate" style="text-align:center;"><small  class="badge badge-light-success font-20">{{$currentMonthData->count()}}</small></h1>
                            @endif
                        </div>

                        <div class="col-6">
                          @if($pastMontData==!null)
                            <p class="text-muted mb-1">Last Month Orders</p>
                            <h3 class="mt-0 font-20 text-truncate"> <small class="badge badge-light-danger font-20">{{$pastMontData->count()}}</small></h3>
                            @endif
                        </div>
                    </div>

                  </div>
                </div>


                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <!-- Portlet card -->
                    <div class="card-box">
                        <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                        <h4 class="mt-0 font-16">Total Sell Report</h4>
                        <h2 class="text-primary my-4 text-center"><span data-plugin="counterup">{{$total_sell->count()}} </span></h2>
                        <div class="row mb-4">
                            <div class="col-6">
                                <p class="text-muted mb-1">This Month Report</p>
                                <h3 class="mt-0 font-20 text-truncate"> <small class="badge badge-light-success font-20">{{$currentMonthsell->count()}}</small></h3>
                            </div>

                            <div class="col-6">
                                <p class="text-muted mb-1">Last Month Report</p>
                                <h3 class="mt-0 font-20 text-truncate"> <small class="badge badge-light-danger font-20">{{$pastMontsell->count()}}</small></h3>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-widgets">
                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h4 class="header-title mb-0">Orders Analytics</h4>

                            <div id="cardCollpase2" class="collapse pt-3 show" dir="ltr">
                                <div id="radar-multiple-series" class="apex-charts"></div>
                            </div>
                            <!-- collapsed end -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-->

                    <div class="card cta-box bg-info text-white">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <div class="avatar-md bg-soft-light rounded-circle text-center mb-2">
                                        <i class="mdi mdi-store font-22 avatar-title text-light"></i>
                                    </div>
                                    <h3 class="m-0 font-weight-normal text-white sp-line-1 cta-box-title">Special launcing <b>Discount</b> offer</h3>
                                    <p class="text-light mt-2 sp-line-2">Suspendisse vel quam malesuada, aliquet sem sit amet, fringilla elit. Morbi tempor tincidunt tempor. Etiam id turpis viverra.</p>
                                    <a href="javascript: void(0);" class="text-white font-weight-semibold text-uppercase">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                                <img class="ml-3" src="assets/images/update.svg" width="120" alt="Generic placeholder image">
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                </div>
                <!-- end col-->
            </div>
            <!-- end row -->
            @endif

            @if(Auth::guard('admin')->user()->hasRole(['seller']))

            <div class="row">
                <div class="col-xl-6">
                    <div class="card-box">
                        <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                        <h2 class="mt-0 font-16"></h2>
                        <h2 class="text-primary my-4 text-center"><span data-plugin="counterup"></span></h2>
                    </div>

                </div>

                <div class="col-xl-6">
                  <div class="card-box">
                      <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                      <h2 class="mt-0 font-35">Total  Orders</h2>
                      <h2 class="text-primary my-4 text-center mt-0 font-20"><span data-plugin="counterup"></span></h2>
                    <div class="row mb-4">
                        <div class="col-6">
                            <p class="text-muted mb-1" style="text-align:center;">This Month Orders</p>
                            <h1 class="mt-0 font-20 text-truncate" style="text-align:center;"><small  class="badge badge-light-success font-20"></small></h1>
                        </div>

                        <div class="col-6">
                            <p class="text-muted mb-1">Last Month Orders</p>
                            <h3 class="mt-0 font-20 text-truncate"> <small class="badge badge-light-danger font-20"></small></h3>
                        </div>
                    </div>

                  </div>
                </div>


                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <!-- Portlet card -->
                    <div class="card-box">
                        <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                        <h4 class="mt-0 font-16">Total Sell Report</h4>
                        <h2 class="text-primary my-4 text-center"><span data-plugin="counterup"></span></h2>
                        <div class="row mb-4">
                            <div class="col-6">
                                <p class="text-muted mb-1">This Month Report</p>
                                <h3 class="mt-0 font-20 text-truncate"> <small class="badge badge-light-success font-20"></small></h3>
                            </div>

                            <div class="col-6">
                                <p class="text-muted mb-1">Last Month Report</p>
                                <h3 class="mt-0 font-20 text-truncate"> <small class="badge badge-light-danger font-20"></small></h3>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-widgets">
                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h4 class="header-title mb-0">Orders Analytics</h4>

                            <div id="cardCollpase2" class="collapse pt-3 show" dir="ltr">
                                <div id="radar-multiple-series" class="apex-charts"></div>
                            </div>
                            <!-- collapsed end -->
                        </div>
                        <!-- end card-body -->
                    </div>

                    <div class="card cta-box bg-info text-white">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <div class="avatar-md bg-soft-light rounded-circle text-center mb-2">
                                        <i class="mdi mdi-store font-22 avatar-title text-light"></i>
                                    </div>
                                    <h3 class="m-0 font-weight-normal text-white sp-line-1 cta-box-title">Special launcing <b>Discount</b> offer</h3>
                                    <p class="text-light mt-2 sp-line-2">Suspendisse vel quam malesuada, aliquet sem sit amet, fringilla elit. Morbi tempor tincidunt tempor. Etiam id turpis viverra.</p>
                                    <a href="javascript: void(0);" class="text-white font-weight-semibold text-uppercase">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                                <img class="ml-3" src="assets/images/update.svg" width="120" alt="Generic placeholder image">
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                </div>
                <!-- end col-->
            </div>
            @endif


  </div>
</div>

    @endsection
