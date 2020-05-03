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
                                <h4 class="text-center"> Product Info</h4>
                                <table class="table table-striped">
                                    <tr>
                                        <td> ID:</td>
                                        <td>{{$order->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Order ID:</td>
                                        <td>{{$order->order_id}}</td>
                                    </tr>
                                    <tr>
                                        <td> Customer Name:</td>
                                        <td>{{$order->customer->name}}</td>
                                    </tr>
                                    <tr>
                                        <td> Customer Phone Number :</td>
                                        <td>{{$order->customer->phone_number}}</td>
                                    </tr>
                                    <tr>
                                        <td> Delievery Location </td>
                                        <td>{{$order->customer->delivery_address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Name:</td>
                                        <td>
                                            <?php
                                              $name = json_decode($order->product_name);
                                                              ?>
                                                <ul>
                                                    @foreach($name as $value)
                                                    <li>{{ $value }}</li>
                                                    @endforeach
                                                </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Price:</td>
                                        <td>{{$order->product_price}}</td>
                                    </tr>

                                    <tr>
                                        <td>Product Quantity</td>
                                        <td>
                                            <?php
                                              $quantity = json_decode($order->product_qty);
                                                              ?>
                                                <ul>
                                                    @foreach($quantity as $qty)
                                                    <li>{{ $qty }}</li>
                                                    @endforeach
                                                </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Payment Method :</td>
                                        @if($order->pay_method==null)
                                        <td></td>
                                        @else
                                        <td>{{$order->pay_method->name}}</td>
                                        @endif
                                    </tr>


                                    <tr>
                                      <?php $sizes=json_decode($order->product_size) ?>
                                  @if($sizes==!null)
                                      <td>Product Size</td>
                                      <td>
                                      <ul>
                                      @foreach($sizes as $size)
                                        <li>{{$size}}</li>
                                      @endforeach
                                    </ul>
                                  </td>
                                    @endif
                                    </tr>

                                    <tr>
                                      <?php $colors=json_decode($order->product_color) ?>
                                    @if($colors==!null)
                                      <td>Product Color</td>
                                      <td>
                                      <ul>
                                      @foreach($colors as $color)
                                        <li>{{$color}}</li>
                                        @endforeach
                                      </ul>
                                    </td>
                                    @endif

                                    </tr>

                                    <tr>
                                      <td>Order Time</td>
                                        <td>
                                          <?php
                                      $dt = new DateTime($order->created_at);
                                      $tz = new DateTimeZone('Asia/Dhaka');
                                      $dt->setTimezone($tz);
                                      echo $dt->format('F j, Y, g:i a');
                                      ?>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td>Status</td>
                                        <td>{{$order->status}}</td>
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
