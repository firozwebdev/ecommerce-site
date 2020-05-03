@extends('admin.master') @section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-8">

                            <div class="table-responsive">
                                <h4 class="text-center"> Product Info</h4>
                                <table class="table table-striped">
                                    <tr>
                                        <td>Product ID:</td>
                                        <td>{{$product->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Name:</td>
                                        <td>{{$product->product_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Price:</td>
                                        <td>{{$product->product_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Category:</td>
                                        <td>{{$product->sub_category->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Specal Price Start </td>
                                        <td>{{$product->start_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Special Price End </td>
                                        <td>{{$product->end_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Special price </td>
                                        <td>{{$product->special_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sku</td>
                                        <td>{{$product->sku}}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>{{$product->stock=1?'Available ':'Stock Out'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Special price </td>
                                        <td>{{$product->special_price}}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td> Available Size </td>
                                        <td>
                                          @if($product->size)
                                            <?php
                                             $avail_size = json_decode($product->size,true);
                                            ?>
                                                <ul>
                                                    @foreach($avail_size as $data)
                                                    <li>{{ $data }}</li>
                                                    @endforeach
                                                </ul>
                                          @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Available Color </td>
                                        <td>
                                          @if($product->color)
                                            <?php
                                             $avail_color = json_decode($product->color,true);
                                            ?>
                                            <ul>
                                                @foreach($avail_color as $data)
                                                <li>{{ $data }}</li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Video Link </td>
                                        <td>
                                            <a href="{{$product->video_link}}" target="_blank">{{$product->video_link}}</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Warranty </td>
                                        <td>
                                            {{$product->warrantly}} Year </td>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Description </td>
                                        <td>
                                            {!!($product->description)!!} </td>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <h4 class="text-center">Product Image</h4>
                            <table class="table table-bordered" style="margin-bottom:45px;">
                                <tr>

                                    <td>
                                        <?php $images=json_decode($product->multiple) ?>
                                            <ul>
                                                @foreach($images as $image)
                                                <li style="list-style-type:none;float:left;">
                                                    <img style="margin:10px;border: 1px solid blue;border-radius: 30px 20px;width:100px;" src="{{ asset('uploads/documents/productimages/'.$image) }}" height="100px"></img>
                                                </li>
                                                @endforeach
                                            </ul>

                                    </td>
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

@endsection
