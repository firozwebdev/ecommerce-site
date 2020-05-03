@extends('admin.master') @section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="table-responsive">
                                <h4 class="text-center">Coupon Info</h4>
                                <table class="table table-striped">
                                    <tr>
                                        <td>Coupon ID:</td>
                                        <td>{{$coupon->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Coupon Name:</td>
                                        <td>{{$coupon->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Coupon Code:</td>
                                        <td>{{$coupon->code}}</td>
                                    </tr>
                                    <tr>
                                        <td>Shiping</td>
                                        <td>{{$coupon->shiping}}</td>
                                    </tr>
                                    <tr>
                                        <td>Coupon Type</td>
                                        <td>{{$coupon->type==1?'Fixed':'Percenttages'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Product </td>
                                        <td>{{$coupon->products->product_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Category </td>
                                        <td>{{$coupon->sub_category->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Start Date</td>
                                        <td>{{$coupon->start_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Start Date</td>
                                        <td>{{$coupon->end_date}}</td>
                                    </tr>
                                    </tr>

                                    <tr>
                                        <td>Coupon Limit</td>
                                        <td>{{$coupon->coupon_limit}}</td>
                                    </tr>
                                    <tr>
                                        <td>Customer Limit</td>
                                        <td>{{$coupon->customer_limit}}</td>
                                    </tr>

                                </table>
                            </div>

                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
</div>


@endsection
