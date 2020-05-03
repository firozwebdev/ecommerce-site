<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<title>Editable Invoice</title>

	<link rel='stylesheet' type='text/css' href='{{ asset('invoice/css/style.css') }}' />
	<link rel='stylesheet' type='text/css' href='{{ asset('invoice/css/print.css') }}' media="print" />
	<script type='text/javascript' src='{{ asset('invoice/js/jquery-1.3.2.min.js') }}'></script>
	<script type='text/javascript' src='{{ asset('invoice/js/example.js') }}'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>

		<div id="identity">

            <textarea id="address">Chris Coyier
						123 Appleseed Street
						Appleville, WI 53719

						Phone: (555) 555-5555
						</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="{{ asset('invoice/images/logo.png') }}" alt="logo" />
            </div>

		</div>

		<div style="clear:both"></div>

		<div id="customer">

            <textarea id="customer-title">Widget Corp.
c/o Steve Widget</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 15, 2009</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>

            </table>

		</div>

		<table id="items">

		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
			<?php $subTotal = 0; ?>
			@foreach($products as $product)
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>{{$product->product_info->product_name}}</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea></textarea></td>
		      <td><textarea class="cost">
							{{$sPrice = $product->product_info->special_price?
								$product->product_info->special_price:$product->product_info->product_price}}
						</textarea></td>
		      <td><textarea class="qty">{{$product->order_quantity}}</textarea></td>
		      <td><span class="price">{{$subTotal += $sPrice * $product->order_quantity}}</span></td>
		  </tr>
			@endforeach

		  <tr id="hiderow">
		    <td colspan="5"></td>
		  </tr>

		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">{{$subTotal}}</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid <small>(vat 15%)</small> </td>

		      <td class="total-value"><textarea id="paid">{{$order->product_price}}</textarea></td>
		  </tr>

		</table>

		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>

	</div>

</body>

</html>
