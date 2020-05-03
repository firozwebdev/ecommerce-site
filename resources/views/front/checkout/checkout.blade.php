@extends('front.master')

@section('content')
<div id="body-content">
    <div id="main-content">
        <div class="main-content">
            <div id="shopify-section-cart-template" class="shopify-section">

                <div class="wrap-breadcrumb bw-color">
                    <div id="breadcrumb" class="breadcrumb-holder container">
                        <ul class="breadcrumb">
                            <li itemscope itemtype="">
                                <a itemprop="url" href="/">
                                    <span itemprop="title" class="d-none">Ynimini</span>Home
                                </a>
                            </li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>

              <div id="col-main" class="page-register page-checkout">
                    <h1 class="page-heading">Checkout</h1>
                    <div class="container">
                      @include('front.checkout.checkout_top')


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-wrapper checkout-form-wrapper order-details">
                                        <h2 class="heading">Your order</h2>
                                        <div class="woocommerce-checkout-review-order" id="order_review">
                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-total">Total</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($cartcontent as $data)
                                                    <tr class="cart_item">
                                                        <td class="product-name">{{$data->name}}
                                                            <strong class="product-quantity">× {{$data->qty}}</strong>
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="amount">৳ {{$data->price}}</span>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>

                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td><span class="amount">৳ {{Cart::subtotal()}}</span></td>
                                                    </tr>

                                                    <tr class="shipping">
                                                        <th>
                                                            <span>Shipping</span>
                                                            @foreach($s_zones as $data)
                                                            <span class="shipping-price-radio-btn">
                                                                <input type="radio" value="" name="" class="input-radio" id="inside-dhaka" checked>
                                                                <label for="inside-dhaka">{{$data->name}}</label>
                                                            </span>
                                                            @endforeach

                                                        </th>
                                                        <td data-title="Shipping">Flat Rate: <span class="amount"> ৳ 50 </span> <input type="hidden" class="shipping_method" value="international_delivery" id="shipping_method_0" data-index="0" name="shipping_method[0]"></td>
                                                    </tr>

                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td><strong><span class="amount">৳ {{$total = str_replace(',', '', Cart::subtotal()) +50}}</span></strong> </td>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                            <div class="woocommerce-checkout-payment" id="payment">
                                                <ul class="wc_payment_methods payment_methods methods">
                                                  @foreach($pay_methods as $value)

                                                    <li class="wc_payment_method payment_method_cheque">
                                                        <input type="radio" data-order_button_text="" value="{{$value->id}}" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                        <label for="payment_method_cheque">{{$value->name}}  </label>
                                                        <div style="display:none;" class="payment_box payment_method_cheque">
                                                        </div>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                                <div class="form-row place-order">

                                                  <input type="hidden" class="form-control" id="customer_id" name="customer_id" value="{{Auth::user()->id}}">
                                                  @foreach($cartcontent as $data)
                                                   <input type="hidden" class="form-control" id="product_id" name="product_id[]" value="{{$data->id}}">
                                                   <input type="hidden" class="form-control" id="name" name="product_name[]" value="{{$data->name}}">
                                                   <input type="hidden" class="form-control" id="qty" name="product_qty[]" value="{{$data->qty}}">
                                                   <input type="hidden" class="form-control" id="qty" name="product_size[]" value="{{$data->options->size}}">
                                                   <input type="hidden" class="form-control" id="qty" name="product_color[]" value="{{$data->options->color}}">
                                                   <input type="hidden" class="form-control" id="qty" name="product_price[]" value="{{$data->price}}">
                                                    @endforeach

                                                   <input type="hidden"   name="total_price" value="{{$total}}">



                                                    <p class="form-row terms wc-terms-and-conditions">
                                                        <input type="checkbox" id="terms" name="terms" class="input-checkbox">
                                                        <label class="checkbox" for="terms">I’ve read and accept the <a target="_blank" href="{{route('terms')}}">terms &amp; conditions</a> <span class="required">*</span></label>
                                                        <input type="hidden" value="1" name="terms-field">
                                                    </p>

                                                    <button class="btn btn-1 place-order-btn" type="submit">Place order</button>
                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
