<div id="col-main" class="page-cart">
    <h1 class="page-heading">Shopping Cart</h1>
    <div class="container">
        <div class="cart-table">
            <table>
                <thead>
                    <tr>
                        <th class="remove">&nbsp;</th>
                        <th class="item">Product</th>
                        <th class="price">Price</th>
                        <th class="qty">Quantity</th>
                        <th class="qty">Color</th>
                        <th class="qty">Size</th>

                        <th class="total-price">Cart Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartcontent as $content)
                    <tr class="cart-item">
                        {!! Form::open(['url' => route('cart_delete'),'method'=>'Post', 'enctype'=>"multipart/form-data"]) !!}
                        <td class="action">
                            <input type="hidden" name="rowid" value="{{$content->rowId}}">
                            <button class="cart-remove-btn" type="submit" title="Remove">
                                <span class="cart-remove-icon">
                                    <i class="demo-icon icon-close" aria-hidden="true"></i>
                                </span>
                            </button>
                        </td>
                        {!! Form::close() !!}
                        <td class="item-name">
                            <span class="money">{{$content->name}}</span>
                        </td>
                        <td class="item-price">
                            <span class="money">৳ {{$content->price}}</span>
                        </td>
                        <td class="item-qty">
                            <div class="quantity ajax-false">
                                <input readonly type="text" name="item-quantity" class="replace input-cart-qty item-quantity" value="{{$content->qty}}" min="0" pattern="[0-9]*">
                                <input readonly type="hidden" name="item-rowId" class="item-rowId" value="{{$content->rowId}}">
                                <div class="qty-wrapper">
                                    <span class="qty-inner">
                                        <span class="qty-up">
                                            <i class="demo-icon icon-plus"></i>
                                        </span>
                                        <span class="qty-down">
                                            <i class="demo-icon icon-minus"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </td>



                        <td class="item-price">
                            <span class="money">{{$content->options->color}}</span>
                        </td>

                        <td class="item-price">
                            <span class="money">{{$content->options->size}}</span>
                        </td>



                        <td class="item-price">
                            <span class="money" id="price-{{$content->rowId}}">৳ {{($content->price)*($content->qty)}}</span>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="last">
                        <td colspan="7">
                            <a href="{{route('home')}}" class="btn btn-2 btn-continue">Continue  Shopping</a>
                            {!! Form::open(['url' => route('cart_destory'),'method'=>'Post', 'enctype'=>"multipart/form-data"]) !!}
                            <button class="btn btn-1 btn-clear">Clear cart</a>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cart-row">
            <div class="cart-left">
                <div id="shipping-calculator">
                    <div class="shipping">
                        <div class="cart-order-note">
                            <h3>Add a note to your order</h3>
                            <div class="cart-note">
                                <textarea name="note" id="CartSpecialInstructions"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-right">
                <div class="cart-right-table">
                    <div class="total-price">Cart Total
                        <span class="cart-total">
                            <span class='hulkapps-cart-original-total'>
                                <span class="money" id="cartSubtotalMain"> ৳ {{Cart::subtotal()}}</span>
                            </span>
                        </span>
                    </div>
                    <div class="free-shipping">
                        <div class="progress">
                            <span class="progress-bar" style="width:100%">100%</span>
                        </div>
                    </div>
                    <div class="terms-conditions">
                        <input type="checkbox" id="agree" />
                        <label for="agree">I agree with the terms and conditions</label>
                        <img src="{{asset('frontEnd/assets/img/terms_condition_image.png')}}" alt="terms and conditions" />
                    </div>
                </div>
                {!! Form::open(['url' => route('checkout'),'method'=>'Post', 'enctype'=>"multipart/form-data"]) !!}
                @if(Auth::check())
                <div class="cart-action">
                    <button class="btn btn-1" type="submit" name="checkout">Proceed to Checkout</button>
                </div>
                @else
                <div class="cart-action">
                    <a href="{{route('login')}}">
                        <button class="btn btn-1" type="submit" name="checkout">Proceed to Checkout</button>
                    </a>
                </div>
                @endif
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@section('after-script')
<script>
  $(document).on('click', '.qty-up', function(){
    var quantity = $(this).parent().parent().parent().find( ".item-quantity" ).val();
    var rowId = $(this).parent().parent().parent().find( ".item-rowId" ).val();
    updateCart(rowId, quantity);
    // console.log(quantity, rowId, 'qty-up');
  });
  $(document).on('click', '.qty-down', function(){
    var quantity = $(this).parent().parent().parent().find( ".item-quantity" ).val();
    var rowId = $(this).parent().parent().parent().find( ".item-rowId" ).val();
    updateCart(rowId, quantity);
    // console.log(quantity, rowId, 'qty-down');
  });

  function updateCart(rowId, quantity){
    var formData = {rowId: rowId, qty: quantity}
    $.ajax({
      type: 'POST',
      url: "{{route('cart_update')}}",
      async: true,
      data: formData,
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      error: function(response){
        console.log("Error: ", response);
      },
      success: function(response){
        updateCartDetails(response);
        // console.log("Success: ", response);
      },
      cache: false,
    });
  }

  function updateCartDetails(cartData){
    var element = $("#price-"+cartData.rowId);
    element.html(cartData.subtotal);
    // $('#cartSubtotalMain').html(cartData.cartFinalSubtotal);
    updateMainCartInfo();
  }
  function updateMainCartInfo(){
    $.ajax({
      type: 'GET',
      url: "{{route('cart_subtotal')}}",
      async: true,
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      error: function(response){
        console.log("Error: ", response);
      },
      success: function(response){
        $('#cartSubtotalMain').html(response);

        // console.log("Success: ", response);
      },
      cache: false,
    });
  }
</script>
@endsection
