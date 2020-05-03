@extends('admin.master')
@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Yinimini</a></li>
                                <li class="breadcrumb-item">Total Orders</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Total Orders</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h2>{{ Session::get('message') }}</h2>

                        <div class="table-responsive">
                            <table class="table table-striped fixed mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th> Customer Name</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($order_full_details as $product)
                                    <tr>
                                        <td>{{$product->order_id}}</td>
                                        <td>
                                            {{$product->product_info->products->product_name}}
                                        </td>
                                        <td>{{$product->product_info->products->product_price}}</td>
                                        <td>{{$product->customer_name}}</td>
                                        <td>{{$product->order_quantity}}</td>
                                        <td>{{$product->order_status}}</td>

                                        <td class="action-column">

                                            <a href="{{route('admin.order-view',$product->order_id)}}" class="btn btn-info" title="View Order">
                                                <span class="fas fa-eye"></span>
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

    </div>
</div>
</div>

</div>

</div>
@endsection
