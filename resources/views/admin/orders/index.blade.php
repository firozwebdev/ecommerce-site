@extends('admin.master') @section('content')

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
                                <li class="breadcrumb-item active">Pending Orders</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Pending Orders</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h4 class="header-title">{{ Session::get('message') }}</h4>

                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Coustomer Name</th>
                                        <th>Product Name</th>
                                        <th>Product Qty</th>
                                        <th>Product Color</th>
                                        <th>Product Size</th>
                                        <th>Order Total Price</th>

                                        <th>Order Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pending_orders as $data)

                                    <tr>

                                        <th scope="row">{{$data->id}}</th>
                                        <td>{{$data->user?$data->user->name:''}}</td>
                                        <td>
                                            <?php
                                                $name = json_decode($data->product_name);
                                            ?>
                                            <ul>
                                                @foreach($name as $value)
                                                <li>{{ $value }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <?php
                                                $quantity = json_decode($data->product_qty);
                                            ?>
                                            <ul>
                                                @foreach($quantity as $qty)
                                                <li>{{ $qty }}</li>
                                                @endforeach
                                            </ul>
                                        </td>

                                        <?php  $colors=json_decode($data->product_color) ?>
                                        @if($colors==!null)
                                        <td>
                                            <ul>
                                                @foreach($colors as $color)
                                                <li>{{$color}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        @endif


                                        <?php $sizes=json_decode($data->product_size) ?>
                                        @if($sizes==!null)
                                        <td>
                                            <ul>
                                                @foreach($sizes as $value)
                                                <li>{{$value}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        @endif

                                        <td>
                                            <?php $prices=json_decode($data->product_price) ?>
                                            <ul>
                                                @foreach($prices as $price)
                                                <li>{{$price}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <?php
                                                $dt = new DateTime($data->created_at);
                                                $tz = new DateTimeZone('Asia/Dhaka');
                                                $dt->setTimezone($tz);
                                                echo $dt->format('F j, Y, g:i a');
                                            ?>
                                        </td>

                                        <td class="action-column">

                                            <a href="{{route('admin.orders.show',$data->id)}}" class="btn btn-info" title="Orders View">
                                                <span class="fas fa-eye"></span>
                                            </a>

                                            {!! Form::open(['url' => route('admin.updateStatus',$data->id),'method'=>'post']) !!}
                                            <button type="submit" title="Confrimed" name="status" value="Confrimed" class="btn btn-success">
                                                <span class="fas fa-check-circle"></span>
                                            </button>
                                            {!! Form::close() !!}

                                            {!! Form::open(['url' => route('admin.orders.destroy',$data->id),'method'=>'DELETE']) !!}
                                            <button type="submit" title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                                <span class="fas fa-trash-alt"></span>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>

                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            {{$pending_orders->links()}}

        </div>

    </div>
</div>
</div>

</div>

</div>
@endsection
