<div class="row">

    <div class="col-sm-6 col-xs-12">
        <div class="form-wrapper checkout-form-wrapper">

            <h2 class="heading">Billing Details</h2>



            {!! Form::open(['url' => route('order'),'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}


            <div class="control-wrapper">
                <label for="address1">Home Address<span class="req">*</span></label>
                <input type="text" value=" @if(Auth::check()){{ Auth::user()->home_address }}@endif " name="home_address"  required placeholder="Home address" />
            </div>

            <div class="control-wrapper">
                <label for="address1">Delivery Address<span class="req">*</span></label>
                <input type="text" value="@if(Auth::check()){{ Auth::user()->delivery_address }}@endif" name="delivery_address"  required placeholder="Delivery address" />
            </div>

            <div class="control-wrapper">
                <label for="address1">Phone Number Address<span class="req">*</span></label>
                <input type="number" value="@if(Auth::check()){{ Auth::user()->phone_number }}@endif" name="phone_number"  required placeholder="Phone Number" />
            </div>




            <div class="control-wrapper-checkout">
                <input type="checkbox" id="create-account-check" />
                <label for="create-account-check"><strong>Place Order to Default Address</strong></label>
            </div>

        </div>
    </div>

</div>
