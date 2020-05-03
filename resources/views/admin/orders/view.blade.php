@extends('admin.master')
@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box order-card-box">
                    <h4>Order Details</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="divider"></div>
                        </div>
                        <!-- <div class="col-lg-3 offset-6 col-sm-6 offset-sm-0 col-xs-12 offset-xs-0">
                            <div class="order-status-action">
                                <h5>Payment Status</h5>
                                <select class="form-control payment-status-select">
                                    <option value=" {{$order->pay_method == 'Cash on delivery'? 'selected':''}}">Paid</option>
                                    <option value=" {{$order->pay_method == 'Cash on delivery'? 'selected':''}}">Paid</option>
                                    <option>Unpaid</option>
                                </select>
                            </div>
                        </div> -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="order-status-action">
                                <h2>Delivery Status</h2>
                                <h4>{{$order->status}}</h4>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="order-person-info">
                                <h5>{{$order->customer->name}}</h5>
                                <p>{{$order->customer->email}}</p>
                                <p>{{$order->customer->phone_number}}</p>
                                <p>{{$order->customer->delivery_address}}</p>
                            </div>
                        </div>

                        <div class="col-lg-3 offset-6 col-sm-6 order-details-col">
                            <div class="order-details-info">
                                <ul>
                                    <li>
                                        <span class="left">Order #</span>
                                        <span class="right">
                                            <span class="order-number">{{$order->order_id}}</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="left">Order Status</span>
                                        <span class="right">
                                            <span class="order-status pending">{{$order->status}}</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="left">Order Date</span>
                                        <span class="right">
                                            <?php
                                                $dt = new DateTime($order->created_at);
                                                $tz = new DateTimeZone('Asia/Dhaka');
                                                $dt->setTimezone($tz);
                                                echo $dt->format('F j, Y, g:i a');
                                            ?>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="left">Total amount</span>
                                        <span class="right">৳ {{$order->total_price}}</span>
                                    </li>
                                    <li>
                                        <span class="left">Payment method</span>
                                        <span class="right">
                                            @if($order->pay_method==null)
                                                Cash on delivery
                                            @else
                                                {{$order->pay_method->name}}
                                            @endif
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                            @php
                                $pid = json_decode($order->product_id);
                                $product_names = json_decode($order->product_name);
                                $product_qtys = json_decode($order->product_qty);
                                $product_colors = json_decode($order->product_color);
                                $product_sizes = json_decode($order->product_size);
                                $product_price = json_decode($order->product_price);
                                $sub_total = 0;
                            @endphp

                            <div class="table-responsive order-list-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="number">#</th>
                                            <th class="description">DESCRIPTION</th>
                                            <th class="quantity">QTY</th>
                                            <th class="price">PRICE</th>
                                            <th class="total">TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pid as $key=>$value)
                                        <tr>
                                            <td class="number">{{ $key+1 }}</td>
                                            <td class="description">
                                                <span class="product-name">{{ $product_names[$key] }}</span>
                                                <span class="product-color-size">
                                                    @if($product_colors[$key]) {{ $product_colors[$key] }} @endif
                                                    @if($product_sizes[$key] && $product_colors[$key]) - @endif
                                                    @if($product_sizes[$key]) {{ $product_sizes[$key] }} @endif
                                                </span>
                                            </td>
                                            <td class="quantity">{{ $product_qtys[$key] }}</td>
                                            <td class="price">৳ {{number_format($product_price[$key],2)}}</td>
                                            <td class="total">৳ {{number_format(($product_price[$key] * $product_qtys[$key]),2) }}</td>
                                        </tr>
                                        @php
                                            $sub_total += ($product_price[$key] * $product_qtys[$key]);
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-4 offset-8 order-sub-total-col">
                            <div class="order-details-info order-sub-total-info">
                                <ul>
                                    <li>
                                        <span class="left">Sub Total :</span>
                                        <span class="right">৳ {{number_format($sub_total,2)}}</span>
                                    </li>
                                    <li>
                                        <span class="left">Tax :</span>
                                        <span class="right">৳ 0.00</span>
                                    </li>
                                    <li>
                                        <span class="left">Shipping :</span>
                                        <span class="right"> ৳ 50.00 </span>
                                    </li>
                                    <li>
                                        <span class="left">GRAND TOTAL :</span>
                                        <span class="right">
                                            <span class="total-amount-bold">
                                                ৳ {{number_format($order->total_price,2)}}
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-12 text-right">
                            <a href="{{route('admin.pending-orders',$order->id)}}" class="order-details-print">
                                <i class="fas fa-print"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
</div>

@endsection
